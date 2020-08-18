<?php

namespace App\Repositories;

use App\Contracts\Upscope\Repository;
use Illuminate\Support\Facades\Http;


class UpscopeRepository implements Repository {

    private $client;

    public function __construct() {

        $token = config('services.upscope.key');
        $this->client = Http::withHeaders(
            [
                'X-Api-Key' => $token,
            ]
        );

    }

    public function get($id) {
        $response = $this->client->get("https://api.upscope.io/v1.1/visitors/" . $id . ".json");
        if (!$response->ok()) {
            return ['visitor' => []];
        }

        return ['visitor' => $response->json()['visitor']];
    }

    public function all($search = []) {
        $response = $this->client->get("https://api.upscope.io/v1.1/list.json");
        if (!$response->ok()) {
            return [];
        }

        return ['visitors' => $response->json()['visitors']];
    }

    public function join(
        $id,
        $params = [
            'id' => "123",
            "name" => "John Smith",
        ]
    ) {
        $response = $this->client
            ->post(
            "https://api.upscope.io/v1.1/visitors/" . $id . "/watch_url.json",
            ["agent" => $params]
    );

        return ['url' => $response->json()];
    }
}
