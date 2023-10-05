<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tournament;
use App\Models\Team;
use App\Models\Player;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //Tournament 1
        $tournament = new Tournament();
        $tournament->name = "EK Zwerkbal " . date('Y');
        $tournament->date = date("Y-m-d", strtotime("+14 days"));
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->save();

        //Tournament 2
        $tournament = new Tournament();
        $tournament->name = "Zwerkbalcup";
        $tournament->date = date("Y-m-d", strtotime("-8 months"));
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->save();

        //Tournament 3
        $tournament = new Tournament();
        $tournament->name = "Scholentoernooi " . (date('Y') + 1);
        $tournament->date = date("Y-m-d", strtotime("+13 months"));
        $tournament->save();

        //Tournament 4
        $tournament = new Tournament();
        $tournament->name = "ZwerkbalBeker";
        $tournament->date = date("Y-m-d");
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->save();

        //Team 1
        $team = new Team();
        $team->teamName = "German National Quidditch team";
        $team->type = "country";
        $team->origin = "Duitsland";
        $team->save();

        //Team 2
        $team = new Team();
        $team->teamName = "Hufflepuff";
        $team->type = "school";
        $team->origin = "Zweinstein";
        $team->save();

        //Team 3
        $team = new Team();
        $team->teamName = "4S Quidditch Team";
        $team->type = "commercial";
        $team->save();


        // Spelers

        $characters = ["Ludo Bagman", "Argus Filch", "Marvolo Gaunt", "Rubeus Hagrid", "Lee Jordan", "Viktor Krum", "Draco Malfoy", "Padma Patil", "Newt Scamander", "Fred Weasley", "Oliver Wood", "Horace Slughorn", "Alicia Spinnet", "Garrick Ollivander", "Luna Lovegood", "Neville Longbottom", "Gregory Goyle", "Colin Creevey", "Susan Bones", "Hannah Abbott"];
        $types = ["chaser", "beater", "keeper", "seeker"];
        $teams = Team::all();

        foreach ($characters as $character) {
            $player = new Player();
            $player->team_id = $teams->random()->id;
            $player->name = $character;
            $player->type = $types[array_rand($types)];
            $player->save();
        }





        //
        // NIETS AANPASSEN TUSSEN DEZE REGELS!
        // ~!@#$%^&**()_+
        // +_)(*&^%$#@!~
        // NIETS AANPASSEN TUSSEN DEZE REGELS!
        //
    }
}
