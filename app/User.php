<?php

namespace App;

use App\Models\Coach;
use App\Models\Player;
use Faker\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

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

    public function buildTeam()
    {
        $coaches = Coach::all()->shuffle();
        $players = Player::all()->keyBy('id')->sortBy('ranking');

        $goalies = $players->filter(function ($player) {
            return $player->can_play_goalie;
        });


        // Assuming every team should have a coach
        $maxPossibleNumberOfTeams = $goalies->count() < $coaches->count() ? $goalies->count() : $coaches->count();

        $numberOfTeams = floor($players->count() / config('teams.max_team_size'));

        // Throw and error if there is not enough goalies or coaches to make the teams
        if ($maxPossibleNumberOfTeams < $numberOfTeams) {
            throw new \OutOfBoundsException('There are not enough goalies or coaches to make teams of the desired size');
        }

        $teams = new Collection();

        $faker = Factory::create();
        for ($i = 0; $i < $numberOfTeams; $i++) {
            $teams->put($i, [
                'name' => $faker->streetName,
                'players' => new Collection(),
                'coach' => $coaches->shift()
            ]);
        }

        // Assign goalies
        foreach ($teams as $key => $team) {
            $goalie = $goalies->shift();
            $totalTeamRankingSum[$key] = $goalie->ranking;
            $team["players"]->push($goalie);
            $players->forget($goalie->id);
        }

        while ($players->isNotEmpty()) {
            foreach ($teams as $key => $team) {
                $player = $players->shift();
                if ($player && $team["players"]->count() < config('teams.max_team_size')) {
                    $team["players"]->push($player);
                }
            }
            $players->reverse();
        }

        return $teams;

    }
}
