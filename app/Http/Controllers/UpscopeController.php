<?php

namespace App\Http\Controllers;

use App\Contracts\Upscope\Repository as UpscopeRepository;
use Illuminate\Http\Request;

class UpscopeController extends Controller
{

    public function listAllUsers(UpscopeRepository $repository ) {
        return $repository->all();
    }

    public function watch($id , UpscopeRepository $repository ) {
        return $repository->join($id);
    }
}
