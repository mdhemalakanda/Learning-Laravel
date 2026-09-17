<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('shops')->insert([
        //     'shop_name' => 'My Shop',
        //     'shop_number' => 12,
        //     'shop_address' => 'My shop address',
        //     'shop_phone' => '01540767363',
        //     'shop_email' => 'hemal.akanda.39@gmal.com'
        // ]);
        // for($i = 0; $i<=50000; $i++) {
        //     DB::table('shops')->insert([
        //         'shop_name' => 'My Shop: '. $i,
        //         'shop_number' => $i+5,
        //         'shop_address' => 'My shop Code: SHOP#'. $i*20,
        //         'shop_phone' => '01540767363',
        //         'shop_email' => 'hemal.akanda.39@gmal.com'
        //     ]);
        // }
        Shop::factory(10)->create();
    }
}
