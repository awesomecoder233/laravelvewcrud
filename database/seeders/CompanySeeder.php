<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
