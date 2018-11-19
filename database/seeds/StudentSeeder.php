<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            DB::table('students')->insert([
               'name' => $faker->name,
               'last_name' => $faker->lastName,
               'age' => count(18, 40),
               'points' => count(0, 50),
               'email' => $faker->freeEmail,
               'phone' => $faker->e164PhoneNumber,
               'course_id' => $faker->numberBetween($min=1, $max=5),
               'created_at' => $faker->dateTime($max = 'now'),
               'updated_at' =>   $faker->dateTime($max = 'now'),
           ]);
        }
    }
}
