<?php

namespace App\Http\Controllers;

use App\Repository\MarcaRepository;
use App\RepositoryFilter\MarcaFilter;
use Illuminate\Http\Request;


class MarcaController extends Controller
{
    /** @var MarcaRepository */
    protected $repository;

    public function __construct(MarcaRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        $payload = array_merge($this->getPayloadData($request));
        $filter = new MarcaFilter($payload);
        return $this->repository->paginateByFilter($filter, true);
    }

}