<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            "title" => "ActWorthy",
            "description" => "To be announced",
            "url" => "https://actworthy.org",
        ]);
        DB::table('projects')->insert([
            "title" => "ActWorthy App",
            "description" => "To be announced",
            "url" => "https://github.com/actworthy/citizen-flutter",
            "is_mobile" => true
        ]);
        DB::table('projects')->insert([
            "title" => "Iowa PHR",
            "description" => "To be announced",
            "url" => "https://www.iowaphr.org/phr/"
        ]);
        DB::table('projects')->insert([
            "title" => "Iowa PHR Android",
            "description" => "To be announced",
            "url" => "https://play.google.com/store/apps/details?id=edu.uiowa.icts.phr&hl=en_US"
        ]);
        DB::table('projects')->insert([
            "title" => "Anko Basic Calculator",
            "description" => "To be announced",
            "url" => "https://play.google.com/store/apps/details?id=com.drakkun.ankoplay.ankoplay"
        ]);
    }
}
