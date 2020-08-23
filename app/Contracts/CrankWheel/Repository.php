<?php


namespace App\Contracts\CrankWheel;


interface Repository {

     function createNoAuthLink($email,$duration=30);

    function listMembers();
}
