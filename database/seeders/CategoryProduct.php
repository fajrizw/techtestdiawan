<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class CategoryProduct extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category1 = Category::create(['name' => 'Electronics']);
        $category2 = Category::create(['name' => 'Food']);
        $category3 = Category::create(['name' => 'Clothing']);

        $category1->products()->createMany([
            ['name' => 'Laptop', 'description' => 'A laptop', 'price' => 1000],
            ['name' => 'Smartphone', 'description' => 'A smartphone', 'price' => 500],
            ['name' => 'Tablet', 'description' => 'A tablet', 'price' => 300],
        ]);

        $category2->products()->create([
            'name' => 'Pizza', 'description' => 'A delicious pizza', 'price' => 15,
        ]);
    }
}
