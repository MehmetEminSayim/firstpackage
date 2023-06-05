<?php

namespace MG\Notes;

use Illuminate\Support\Facades\Http;

class Notes {
    public function justDoIt() {
        $response = Http::get('https://jsonplaceholder.typicode.com/todos/1');

        return $response['title'];
    }
}
