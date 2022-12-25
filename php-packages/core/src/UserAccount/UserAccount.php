<?php

declare(strict_types=1);

namespace LaravelGrowth\Core\UserAccount;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User;

final class UserAccount extends User implements Authenticatable
{
}
