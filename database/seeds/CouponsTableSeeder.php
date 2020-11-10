<?php

use App\Coupon;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Coupon::create([
            'code' => 'welcome',
            'type' => 'fixed',
            'value' => 5000,
        ]);

        Coupon::create([
            'code' => 'newbie',
            'type' => 'percent',
            'percent_off' => 25,
        ]);
    }
}
