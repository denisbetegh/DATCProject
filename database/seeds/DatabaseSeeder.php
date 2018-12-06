<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('irrigations')->insert([
            'temp1' => random_int(10,99),
            'humi1' => random_int(10,99),
            'temp2' => random_int(10,99),
            'humi2' => random_int(10,99),
            'temp3' => random_int(10,99),
            'humi3' => random_int(10,99),
            'temp4' => random_int(10,99),
            'humi4' => random_int(10,99),
            'temp5' => random_int(10,99),
            'humi5' => random_int(10,99)
        ]);
    }
}
