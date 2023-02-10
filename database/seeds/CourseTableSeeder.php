<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'Course_Name' => 'Business Law',
            'Course_Code' => 'Bus312',
            'Department' => 'Bus. Admin',
        ]);

        DB::table('courses')->insert([
            'Course_Name' => 'Personnel Mgt',
            'Course_Code' => 'Bus320',
            'Department' => 'Bus. Admin',
        ]);

        DB::table('courses')->insert([
            'Course_Name' => 'Finance',
            'Course_Code' => 'Fin310',
            'Department' => 'Accounting',
        ]);

        DB::table('courses')->insert([
            'Course_Name' => 'Accounting Principle',
            'Course_Code' => 'Acc230',
            'Department' => 'Accounting',
        ]);

        DB::table('courses')->insert([
            'Course_Name' => 'Public Relation',
            'Course_Code' => 'Pad210',
            'Department' => 'Pub. Admin',
        ]);

        DB::table('courses')->insert([
            'Course_Name' => 'Conflict Resolution',
            'Course_Code' => 'Con211',
            'Department' => 'Pub. Admin',
        ]);

        DB::table('courses')->insert([
            'Course_Name' => 'Economic Principle',
            'Course_Code' => 'Ecn314',
            'Department' => 'Economic',
        ]);

        DB::table('courses')->insert([
            'Course_Name' => 'Budgeting',
            'Course_Code' => 'Bud215',
            'Department' => 'Economic',
        ]);

        DB::table('courses')->insert([
            'Course_Name' => 'Statistic 1',
            'Course_Code' => 'Fba210',
            'Department' => 'Bus. Admin',
        ]);

        DB::table('courses')->insert([
            'Course_Name' => 'Industrial Relation',
            'Course_Code' => 'Irs222',
            'Department' => 'Economic',
        ]);
    }
}
