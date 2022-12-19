<?php

/**
 * @copyright 2022 Masaru Yamagishi
 * @license Apache-2.0
 */

declare(strict_types=1);

namespace App\Packages\Account\UseCases;

use App\Packages\Account\Models\Account;

class RegisterAccount
{
    public function __invoke(string $email, string $password): Account
    {
        throw new \LogicException('Not implemented');
    }
}
