<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Covid19sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user   = \Config::get('database.connections.mysql.username');       
        $db     = \Config::get('database.connections.mysql.database');
        
        //PATH OF SQL FILE
        $path = 'database/seeds/covid19s.sql';

        // running command line import in php code
        //mysql -u username -p password database_name < file.sql
        exec("mysql -u {$user} -p {$db} < {$path}");
    }
}
