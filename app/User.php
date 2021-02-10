<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * @package App
 *
 * @property int $id
 * @property string $user_type
 * @property string $first_name
 * @property string $last_name
 * @property int $ranking
 * @property bool $can_play_goalie
 */
class User extends Model
{
    public $timestamps = false;
    public $table = 'users';

    protected $casts = [
        'can_play_goalie' => 'boolean'
    ];

    use HasFactory;
}
