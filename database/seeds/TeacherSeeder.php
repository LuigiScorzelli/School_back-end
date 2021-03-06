<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            DB::table('teachers')->insert([
               'name' => $faker->name,
               'last_name' => $faker->lastName,
               'ranking_mark' => $faker->randomDigit,
               'email' => $faker->freeEmail,
               'phone' => $faker->e164PhoneNumber,
               'created_at' => $faker->dateTime($max = 'now'),
               'updated_at' =>   $faker->dateTime($max = 'now'),
           ]);
        }

    }
}
