<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Matric_NoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matric__nos')->insert([
            'Name' => 'Shola Kojo',
            'Matric_No' => 171002255,
        ]);

        DB::table('matric__nos')->insert([
            'Name' => 'Ridwan Adedokun',
            'Matric_No' => 171002266,
        ]);

        DB::table('matric__nos')->insert([
            'Name' => 'Tobi Odeyemi',
            'Matric_No' => 171002277,
        ]);

        DB::table('matric__nos')->insert([
            'Name' => 'Hakeem Tijani',
            'Matric_No' => 171002288,
        ]);

        DB::table('matric__nos')->insert([
            'Name' => 'Segun Oregunwa',
            'Matric_No' => 171002299,
        ]);

        DB::table('matric__nos')->insert([
            'Name' => 'Onuoha Chinyere',
            'Matric_No' => 171002244,
        ]);

        DB::table('matric__nos')->insert([
            'Name' => 'Mariam Owolabi',
            'Matric_No' => 171002233,
        ]);

        DB::table('matric__nos')->insert([
            'Name' => 'Joseph Emeruwa',
            'Matric_No' => 171002222,
        ]);

        DB::table('matric__nos')->insert([
            'Name' => 'Felicia Kojo',
            'Matric_No' => 171002211,
        ]);

        DB::table('matric__nos')->insert([
            'Name' => 'Adeleye Boluwatife',
            'Matric_No' => 171002200,
        ]);
    }
}
