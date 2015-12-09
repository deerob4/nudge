<?php

// use DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 100; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => bcrypt($faker->password()),
                'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'gender' => $faker->randomElement($array = array('m', 'f')),
                'sexuality' => $faker->randomElement($array = array('men', 'women', 'both', 'neither')),
                'town' => $faker->city(),
                'facebook_link' => 'https://www.facebook.com/' . $faker->username(),
                'photo_url' => 'http://loremflickr.com/500/500/man'
            ]);
        }        
    }
}
