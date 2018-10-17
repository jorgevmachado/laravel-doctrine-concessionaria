<?php

namespace App\Http\Controllers;

use App\Repository\VeiculoRepository;
use App\RepositoryFilter\VeiculoFilter;
use Illuminate\Http\Request;


class VeiculoController extends Controller
{
    /** @var VeiculoRepository */
    protected $repository;

    public function __construct(VeiculoRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        $payload = array_merge($this->getPayloadData($request));
        $filter = new VeiculoFilter($payload);
        return $this->repository->paginateByFilter($filter, true);
    }
}