<?php

namespace App\Models;

use App\Scopes\PlayerScope;
use App\User;

class Player extends User
{
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new PlayerScope());
    }

}
