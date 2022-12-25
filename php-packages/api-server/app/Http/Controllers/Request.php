<?php

/**
 * @copyright 2022 Masaru Yamagishi
 * @license Apache-2.0
 */

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @link https://laravel.com/docs/9.x/validation#form-request-validation
 *
 * @template T of array
 */
abstract class Request extends FormRequest
{
    /**
     * {@inheritDoc}
     *
     * @return T
     */
    public function validated($key = null, $default = null)
    {
        return parent::validated($key, $default);
    }
}
