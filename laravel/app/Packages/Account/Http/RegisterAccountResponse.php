<?php

/**
 * @copyright 2022 Masaru Yamagishi
 * @license Apache-2.0
 */

declare(strict_types=1);

namespace App\Packages\Account\Http;

use App\Http\Controllers\Response;

/**
 * @psalm-internal App\Packages\Account\Http
 */
final class RegisterAccountResponse extends Response
{
    /**
     * {@inheritDoc}
     */
    public function rules(): array
    {
        return [
            'ok' => ['boolean'],
        ];
    }
}
