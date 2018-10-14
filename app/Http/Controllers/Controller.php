<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use JMS\Serializer\SerializerBuilder;
use League\Tactician\CommandBus;
use League\Tactician\Doctrine\ORM\TransactionMiddleware;
use League\Tactician\Handler\CommandHandlerMiddleware;
use League\Tactician\Handler\CommandNameExtractor\ClassNameExtractor;
use League\Tactician\Handler\Locator\InMemoryLocator;
use League\Tactician\Handler\MethodNameInflector\HandleInflector;
use League\Tactician\Plugins\LockingMiddleware;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $middlewareBus = [];

    /**
     * Controller constructor.
     * @param array $middlewareBus
     */
    public function __construct()
    {
        $this->middlewareBus = [new TransactionMiddleware(app('em'))];
    }

    public function getBus(string $command, $handler): CommandBus
    {
        $commandToHandlerMap = [$command => $handler];
        $handlerMiddleware = new CommandHandlerMiddleware(
            new ClassNameExtractor(),
            new InMemoryLocator($commandToHandlerMap),
            new HandleInflector()
        );

        $lockingMiddleware = new LockingMiddleware();
        $middelwares = array_merge(
            [$lockingMiddleware],
            $this->middlewareBus,
            [$handlerMiddleware]
        );
        return new CommandBus($middelwares);
    }

    public function getSerializer()
    {
        return SerializerBuilder::create()->build();
    }

    public function getPayloadData(Request $request): array
    {
        $payload = $request->get('payload', '[]');
        if (empty($payload)) {
            $payload = '[]';
        }
        return array_filter(array_map('trim', json_decode($payload, true)));
    }

}
