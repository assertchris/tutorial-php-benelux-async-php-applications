<?php

namespace App\Responder;

use Aerys\Request;
use Aerys\Response;

class HomePageResponder
{
    public function __invoke(Request $request, Response $response)
    {
        $response->end("hello world");
    }
}
