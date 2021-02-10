<?php

namespace App\Models;

use App\Scopes\CoachScope;
use App\User;

class Coach extends User
{
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new CoachScope());
    }
}
