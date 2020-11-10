<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Loop to Generate Laptops
        for($i = 1; $i < 30; $i++) {
            Product::create([
                'name' => 'Laptop '.$i,
                'slug' => 'laptop-'.$i,
                'details' => [13,14,15][array_rand([13,14,15])] .' inch, '.[1,2,3][array_rand([1,2,3])] .' TB SSD, 32GB RAM',
                'price' => rand(149999,329999),
                'description' => 'Lorem '. $i .' ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
            ])->categories()->attach(1);
        }

        $product = Product::find(1);
        $product->categories()->attach(2);

        // Desktops
        for($i = 1; $i < 9; $i++) {
            Product::create([
                'name' => 'Desktop '.$i,
                'slug' => 'desktop-'.$i,
                'details' => [24,25,26][array_rand([24,25,26])] .' inch, '. [1,2,3][array_rand([1,2,3])] .'TB SSD, 32GB RAM',
                'price' => rand(249999,479999),
                'description' => 'Lorem '. $i .' ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
            ])->categories()->attach(2);
        }

        // Phones
        for($i = 1; $i < 6; $i++) {
            Product::create([
                'name' => 'Phone '.$i,
                'slug' => 'phone-'.$i,
                'details' => [8,9,10][array_rand([8,9,10])] .' inch, '. [16,32,64][array_rand([16,32,64])] .'GB SSD',
                'price' => rand(10000,40000),
                'description' => 'Lorem '. $i .' ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
            ])->categories()->attach(3);
        }

        // Tablet
        for($i = 1; $i < 6; $i++) {
            Product::create([
                'name' => 'iPad '.$i,
                'slug' => 'ipad-'.$i,
                'details' => [14,15,16][array_rand([14,15,16])] .' inch, '. [16,32,64][array_rand([16,32,64])] .'GB SSD',
                'price' => rand(20000,50000),
                'description' => 'Lorem '. $i .' ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
            ])->categories()->attach(4);
        }

        // TV
        for($i = 1; $i < 6; $i++) {
            Product::create([
                'name' => 'TV '.$i,
                'slug' => 'tv-'.$i,
                'details' => [36,38,40][array_rand([36,38,40])] .' inch, HMDI, SMART TV',
                'price' => rand(40000,1000000),
                'description' => 'Lorem '. $i .' ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
            ])->categories()->attach(5);
        }

        // Cameras
        for($i = 1; $i < 6; $i++) {
            Product::create([
                'name' => 'Camera '.$i,
                'slug' => 'camera-'.$i,
                'details' => [28,38,48][array_rand([28,38,48])] .' mm IS Lens',
                'price' => rand(49999,79999),
                'description' => 'Lorem '. $i .' ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
            ])->categories()->attach(6);
        }

        // Appliances
        for($i = 1; $i < 6; $i++) {
            Product::create([
                'name' => 'Appliace '.$i,
                'slug' => 'appliance-'.$i,
                'details' => [0.8,1.0,1.2][array_rand([0.8,1.0,1.2])] .' litres capacity.',
                'price' => rand(2999,6999),
                'description' => 'Lorem '. $i .' ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
            ])->categories()->attach(7);
        }
    }
}
