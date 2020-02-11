<?php

use Illuminate\Database\Seeder;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // initialize
        DB::table('persons')->truncate();
        // initial data
        $persons = [
             ['name' => 'るーかす', 'title' => 'しゃちょう']
            ,['name' => 'ほんま', 'title' => 'ぶちょう']
            ,['name' => 'いのうえ', 'title' => 'ひら']
        ];
        // regist
        foreach($persons as $person) {
            \App\Persons::create($person);
        }
    }
}
