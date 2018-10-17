<?php

namespace App\Http\Controllers;

use App\Repository\TipoVeiculoRepository;
use App\RepositoryFilter\TipoVeiculoFilter;
use Illuminate\Http\Request;


class TipoVeiculoController extends Controller
{
    /** @var TipoVeiculoRepository */
    protected $repository;

    public function __construct(TipoVeiculoRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        $payload = array_merge($this->getPayloadData($request));
        $filter = new TipoVeiculoFilter($payload);
        return $this->repository->paginateByFilter($filter, true);
    }

}