<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<10;$i++){
            DB::table('rooms')->insert([

                    'name'=>$faker->name,
                    'image' =>"https://kenhota.com/wp-content/uploads/2019/06/kinh-nghiem-chup-hinh-can-ho-khach-san-homestay-dep-9.jpg",
                    'typeroom'=>Str::random(20),

                    'number'=>"4 nguoi",
                    'price'=>100

                ]);
            }
    }
}
