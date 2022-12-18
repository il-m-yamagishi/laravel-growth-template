<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @link https://laravel.com/docs/9.x/validation#form-request-validation
 * @template T of array
 */
abstract class Request extends FormRequest
{
    /**
     * {@inheritDoc}
     * @psalm-return T
     */
    public function validated($key = null, $default = null)
    {
        return parent::validated($key, $default);
    }
}
