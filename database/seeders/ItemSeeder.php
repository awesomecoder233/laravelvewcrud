<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('items')->insert(array(
            array(
              'item' => 'Upwork',
              'email' => 'tommount58@gmail.com',
              'process_from' => '2021-04-28',
              'process_to' => '2021-05-28',
            ),
            array(
                'item' => 'Freelancer',
                'email' => 'lazarev3289252@hotmail.com',
                'process_from' => '2021-05-29',
                'process_to' => '2021-06-28',
            ),
        ));
    }
}
