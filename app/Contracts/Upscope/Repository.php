<?php

namespace App\Contracts\Upscope;

interface Repository {

    public function get($id);

    public function all($search = []);

    public function join($id, $params = []);

}
