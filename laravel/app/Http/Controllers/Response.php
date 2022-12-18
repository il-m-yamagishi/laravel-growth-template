<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use JsonSerializable;

/**
 * @link https://laravel.com/docs/9.x/validation#manually-creating-validators
 */
abstract class Response implements JsonSerializable, Responsable
{
    /**
     * Constructor
     *
     * @param array|null $result
     */
    public function __construct(private readonly ?array $result = null)
    {
    }

    /**
     * Gets validation rules
     *
     * @return array
     */
    abstract public function rules(): array;

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): mixed
    {
        if (is_null($this->result)) {
            return ['ok' => true];
        }
        return $this->result;
    }

    /**
     * {@inheritDoc}
     */
    public function toResponse($request)
    {
        $payload = $this->jsonSerialize();
        $rules = $this->rules();

        $validator = Validator::make($payload, $rules);

        $validator->validate();

        return new JsonResponse($payload);
    }
}
