<?php

use App\Formation;
use App\Work;
use Faker\Factory;
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
        $faker = Factory::create();
        for ($i = 0; $i < 3; $i++) {


            Formation::create([
                'certificate' => $faker->sentence,
                'school' => $faker->streetName,
                'obtained' => $faker->date('Y-m-d'),
                'description' => $faker->sentences,
            ]);

//            Work::create([
//                'name' => $faker->colorName,
//                'img' => $faker->imageUrl(),
//                'description' => $faker->sentences,
//                'rating' => $faker->numberBetween(1, 11),
//            ]);

//            Experience::create([
//                'company' => $faker->colorName,
//                'logo' => $faker->imageUrl(),
//                'post' => $faker->domainName,
//                'description' => $faker->sentences,
//            ]);
        }
        // $this->call(UserSeeder::class);
    }
}
