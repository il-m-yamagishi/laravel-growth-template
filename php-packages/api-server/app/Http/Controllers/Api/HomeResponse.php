<?php

/**
 * @copyright 2022 Masaru Yamagishi
 * @license Apache-2.0
 */

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Response;

/**
 * @psalm-internal App\Http\Controllers\Api
 */
final class HomeResponse extends Response
{
    public function rules(): array
    {
        return [];
    }
}
