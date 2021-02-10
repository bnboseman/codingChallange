<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->warn('All Users are being deleted!');
        DB::table('users')->truncate();
        $this->command->info('Populating table with initial data');
        User::factory()->createMany([
            ['user_type' => 'player', 'first_name' => 'Scott', 'last_name' => 'Marrtins', 'ranking' => 5, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Joe', 'last_name' => 'Alberici', 'ranking' => 4, 'can_play_goalie' => 1],
            ['user_type' => 'player', 'first_name' => 'Lars', 'last_name' => 'Tiffany', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Frank', 'last_name' => 'Fed', 'ranking' => 5, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Randy', 'last_name' => 'Mearns', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Ben', 'last_name' => 'DeLuca', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Bob', 'last_name' => 'Shilling', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Greg', 'last_name' => 'Carroline', 'ranking' => 1, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'John', 'last_name' => 'Danowski', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Ron', 'last_name' => 'Caputo', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Greg', 'last_name' => 'Raymond', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Terry', 'last_name' => 'Muffley', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Seth', 'last_name' => 'Tierney', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Jim', 'last_name' => 'Morrissey', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Dave', 'last_name' => 'Pietra', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Jim', 'last_name' => 'Rogals', 'ranking' => 4, 'can_play_goalie' => 1],
            ['user_type' => 'player', 'first_name' => 'Charley', 'last_name' => 'Toomey', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Matt', 'last_name' => 'Dan', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Tom', 'last_name' => 'Gravant', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Kevin', 'last_name' => 'Corrigan', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Gerry', 'last_name' => 'Byrne', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Chris', 'last_name' => 'Gabrielli', 'ranking' => 4, 'can_play_goalie' => 1],
            ['user_type' => 'player', 'first_name' => 'Eric', 'last_name' => 'Fete', 'ranking' => 2, 'can_play_goalie' => 1],
            ['user_type' => 'player', 'first_name' => 'Bruce', 'last_name' => 'Frady', 'ranking' => 2, 'can_play_goalie' => 1],
            ['user_type' => 'player', 'first_name' => 'Andrew', 'last_name' => 'McMinn', 'ranking' => 2, 'can_play_goalie' => 1],
            ['user_type' => 'player', 'first_name' => 'Brian', 'last_name' => 'Brecht', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Tom', 'last_name' => 'Mariano', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'John', 'last_name' => 'Desko', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Lelan', 'last_name' => 'Rogers', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Shawn', 'last_name' => 'Nadelen', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Greg', 'last_name' => 'Cannella', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Don', 'last_name' => 'Barrett', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Dom', 'last_name' => 'Starsia', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Marc', 'last_name' => 'Arsdale', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Andy', 'last_name' => 'Shay', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Gordon', 'last_name' => 'Purdie', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Shannon', 'last_name' => 'Sligo', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Chris', 'last_name' => 'Zimmerman', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Jim', 'last_name' => 'Murphy', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Mike', 'last_name' => 'Pressler', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'John', 'last_name' => 'Jes', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Tim', 'last_name' => 'Boyle', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Mike', 'last_name' => 'Taylor', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Greg', 'last_name' => 'Skillton', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Dan', 'last_name' => 'Sheehan', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Sean', 'last_name' => 'Woods', 'ranking' => 5, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Chris', 'last_name' => 'Ryan', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Dave', 'last_name' => 'Carty', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'James', 'last_name' => 'Fritz', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Larry', 'last_name' => 'Calkins', 'ranking' => 2, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Brad', 'last_name' => 'Jorgen', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Sonny', 'last_name' => 'Ziegler', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Brian', 'last_name' => 'Novo', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Jason', 'last_name' => 'Lockner', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Nick', 'last_name' => 'Yando', 'ranking' => 5, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Peter', 'last_name' => 'Lasagna', 'ranking' => 4, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Steve', 'last_name' => 'Colfer', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Brian', 'last_name' => 'Felice', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Brooks', 'last_name' => 'Singer', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'coach', 'first_name' => 'Daniel', 'last_name' => 'Ambrose', 'ranking' => 0, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Matt', 'last_name' => 'Klank', 'ranking' => 4, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Jeff', 'last_name' => 'Cohen', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Bill', 'last_name' => 'Bergan', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Dave', 'last_name' => 'Cornell', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Steve', 'last_name' => 'Beville', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'David', 'last_name' => 'Webster', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Tom', 'last_name' => 'Leanos', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Justin', 'last_name' => 'Axel', 'ranking' => 1, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Terry', 'last_name' => 'Corcoran', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'coach', 'first_name' => 'Preston', 'last_name' => 'Chapman', 'ranking' => 0, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Sean', 'last_name' => 'Quirk', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Patrick', 'last_name' => 'Scarpello', 'ranking' => 1, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Tim', 'last_name' => 'Tuttle', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Todd', 'last_name' => 'Cavallario', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Jim', 'last_name' => 'Lyons', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Scott', 'last_name' => 'Barnard', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Ray', 'last_name' => 'Rostan', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Jason', 'last_name' => 'Rostan', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Bill', 'last_name' => 'Bjorn', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Jeffrey', 'last_name' => 'Long', 'ranking' => 4, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'John', 'last_name' => 'Wallace', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Shelley', 'last_name' => 'Sheiner', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'coach', 'first_name' => 'Mark', 'last_name' => 'Theriault', 'ranking' => 0, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Doug', 'last_name' => 'Misar', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Andrew', 'last_name' => 'Orlo', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Steve', 'last_name' => 'Matus', 'ranking' => 5, 'can_play_goalie' => 0],
            ['user_type' => 'coach', 'first_name' => 'Timothy', 'last_name' => 'Duntonelle', 'ranking' => 1, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Steve', 'last_name' => 'Koud', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'player', 'first_name' => 'Kurt', 'last_name' => 'Glaeser', 'ranking' => 3, 'can_play_goalie' => 0],
            ['user_type' => 'coach', 'first_name' => 'Jon', 'last_name' => 'Reynolds', 'ranking' => 0, 'can_play_goalie' => 0]
        ]);
    }
}
