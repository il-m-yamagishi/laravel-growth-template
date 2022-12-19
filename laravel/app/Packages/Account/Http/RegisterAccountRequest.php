<?php

/**
 * @copyright 2022 Masaru Yamagishi
 * @license Apache-2.0
 */

declare(strict_types=1);

namespace App\Packages\Account\Http;

use App\Http\Controllers\Request;

/**
 * @extends Request<array{
 *   email: string,
 *   password: string
 * }>
 * @psalm-internal App\Packages\Account\Http
 */
final class RegisterAccountRequest extends Request
{
    /**
     * {@inheritDoc}
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'password'],
            'password_confirmation' => ['required', 'confirmed'],
        ];
    }
}
