<?php


namespace App\Repositories;


use App\Contracts\CrankWheel\Repository;
use Illuminate\Support\Facades\Http;

class CrankWheelRepository implements Repository {

    private $client;

    public function __construct() {

        $token = config('services.crankWheel.key');
        $this->client = Http::withHeaders([
            'Authorization' => 'Basic '.$token
        ]);
    }

    function createNoAuthLink($email, $duration = 30) {
        $url = "https://meeting.is/ss/api/make_noauth_link";
        $response = $this->client->post(
            $url,
            [
                'email' => $email,
                'within_seconds' => $duration,
            ]
        );


        if ($response->ok()) {
            return $response->json();
        }

        return NULL;
    }


    function listMembers() {
        $url = "https://meeting.is/ss/api/user_access";
        $response = $this->client->get(
            $url
        );


        if ($response->ok()) {
            return $response->json();
        }

        return NULL;
    }
}
