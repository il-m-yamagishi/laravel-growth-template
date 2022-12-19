<?php

/**
 * @copyright 2022 Masaru Yamagishi
 * @license Apache-2.0
 */

declare(strict_types=1);

namespace App\Packages\Account\Http;

use App\Http\Controllers\Controller;
use App\Packages\Account\UseCases\RegisterAccount;

final class RegisterAccountController extends Controller
{
    public function __invoke(RegisterAccountRequest $request, RegisterAccount $useCase): RegisterAccountResponse
    {
        $input = $request->validated();
        $account = $useCase($input['email'], $input['password']);

        return new RegisterAccountResponse();
    }
}
