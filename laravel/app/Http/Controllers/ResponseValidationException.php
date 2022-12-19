<?php

/**
 * @copyright 2022 Masaru Yamagishi
 * @license Apache-2.0
 */

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\MessageBag;
use LogicException;

/**
 * Response data has invalid structure. Check your response logic.
 * @psalm-internal App\Http\Controllers
 */
final class ResponseValidationException extends LogicException implements Responsable
{
    /**
     * Constructor
     *
     * @param MessageBag $errors Error MessageBag
     */
    public function __construct(private readonly MessageBag $errors)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function toResponse($request)
    {
        return new JsonResponse(
            data: $this->errors->all(),
            status: 500,
            json: true,
        );
    }
}
