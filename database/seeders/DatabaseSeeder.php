<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('companies')->insert(array(
            array(
              'name' => 'Google',
            ),
            array(
                'name' => 'Yahoo',
            ),
            array(
                'name' => 'Freelancer',
            ),
        ));
    }
}
