<?php

namespace App\Http\Controllers;

use App\Contracts\CrankWheel\Repository;
use Illuminate\Http\Request;

class CrankWheelController extends Controller {

    public function createNoAuthUrl(Request $request, Repository $repository) {
        $email = $request->get('email');
        $res = $repository->createNoAuthLink('mohamedsalah.yahyaoui@uteek.net');
        return $res;
    }


    public function listManagers(Repository $repository) {
        $res = $repository->listMembers();

        return ['members' => $res];
    }


    public function createNewUser(Request $request, Repository $repository) {
        $email = $request->get('email');
        $res = $repository->createUser($email);
        return ['user' => $res];
    }
}
