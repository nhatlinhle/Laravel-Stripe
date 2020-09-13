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
        //
        Product::create([
            'name' => 'Laptop 1',
            'slug' => 'laptop-1',
            'details' => '15 inch, 1TB, 8GB RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
        ]);
        Product::create([
            'name' => 'Laptop 2',
            'slug' => 'laptop-2',
            'details' => '15 inch, 1TB, 16GB RAM',
            'price' => 249999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
        ]);
        Product::create([
            'name' => 'Laptop 3',
            'slug' => 'laptop-3',
            'details' => '15 inch, 1TB, 32GB RAM',
            'price' => 299999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
        ]);
        Product::create([
            'name' => 'Laptop 4',
            'slug' => 'laptop-4',
            'details' => '15 inch, 1TB, 64GB RAM',
            'price' => 319999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
        ]);
        Product::create([
            'name' => 'Laptop 5',
            'slug' => 'laptop-5',
            'details' => '15 inch, 2TB, 8GB RAM',
            'price' => 279999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
        ]);
        Product::create([
            'name' => 'Laptop 6',
            'slug' => 'laptop-6',
            'details' => '17.5 inch, 2TB, 16GB RAM',
            'price' => 399999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
        ]);
        Product::create([
            'name' => 'Laptop 7',
            'slug' => 'laptop-7',
            'details' => '17 inch, 4TB, 8GB RAM',
            'price' => 329999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
        ]);
        Product::create([
            'name' => 'Laptop 8',
            'slug' => 'laptop-8',
            'details' => '17.5 inch, 4TB, 32GB RAM',
            'price' => 599999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
        ]);
        Product::create([
            'name' => 'Laptop 9',
            'slug' => 'laptop-9',
            'details' => '17.5 inch, 2TB, 32GB RAM',
            'price' => 399999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
        ]);
        Product::create([
            'name' => 'Laptop 10',
            'slug' => 'laptop-10',
            'details' => '17 inch, 568GB, 32GB RAM',
            'price' => 129999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
        ]);
        Product::create([
            'name' => 'Laptop 11',
            'slug' => 'laptop-11',
            'details' => '12 inch, 1TB, 8GB RAM',
            'price' => 99999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
        ]);
        Product::create([
            'name' => 'Laptop 12',
            'slug' => 'laptop-12',
            'details' => '17.5 inch, 2TB, 16GB RAM',
            'price' => 399999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
        ]);
        Product::create([
            'name' => 'Laptop 13',
            'slug' => 'laptop-13',
            'details' => '17 inch, 16TB, 8GB RAM',
            'price' => 329999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
        ]);
        Product::create([
            'name' => 'Laptop 14',
            'slug' => 'laptop-14',
            'details' => '17.5 inch, 8TB, 32GB RAM',
            'price' => 599999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo eu vulputate facilisis. Aenean luctus ultricies pretium. Curabitur et.',
        ]);
    }
}
