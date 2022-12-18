<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

final class HomeController extends Controller
{
    public function __invoke(): HomeResponse
    {
        return new HomeResponse();
    }
}
