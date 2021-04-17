<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tag = new \ App \ Tag ();
        $tag -> name = ' Tutorial ';
        $tag -> save ();
        $tag = new \ App \ Tag ();
        $tag -> name = ' Industry News ';
        $tag -> save ();

        $this -> call ( PostTableSeeder :: class );
        $this -> call ( TagTableSeeder :: class );

    }
}
