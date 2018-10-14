<?php

namespace App\Http\Controllers;

use App\Repository\CategoriaRepository;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /** @var CategoriaRepository */
    protected $repository;

    public function __construct(CategoriaRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->findAll();
    }


}