<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\User::truncate();
    	$user = factory(App\User::class,100)->create();
      /*$faker = Faker::create();
      foreach (range(1,50) as $index) {
        DB::table('users')->insert([
            'name' => $faker->userName,
            'email' => $faker->email,
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
            'created_at' => $faker->dateTime($max = 'now'),
            'updated_at' => $faker->dateTime($max = 'now'),
        ]);
      }*/
    }
}
