<?php

/**
 * @copyright 2022 Masaru Yamagishi
 * @license Apache-2.0
 */

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

final class HomeController extends Controller
{
    public function __invoke(): HomeResponse
    {
        return new HomeResponse();
    }
}
