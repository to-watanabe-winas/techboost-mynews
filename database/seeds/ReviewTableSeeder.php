<?php

use Illuminate\Database\Seeder;
use App\Product;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = Product::find(1);
        $product2 = Product::find(2);
        $product3 = Product::find(3);

        DB::table('product_reviews')->insert([
            [
                'product_id' => $product1->id,
                'content'    => 'いい商品でした。',
            ],
            [
                'product_id' => $product2->id,
                'content'    => '普通でした。',
            ],
            [
                'product_id' => $product3->id,
                'content'    => '悪い商品でした。',
            ],
        ]);

    }
}
