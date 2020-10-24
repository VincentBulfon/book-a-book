<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookOrder;
use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookOrderTableSeeder extends Seeder
{
    public function run()
    {
        //DB::table('book_order')->delete();
        // BookOrderSeeder
        $orders = Order::all();
        $books = Book::all();
        foreach ($orders as $order) {
            $nbrOfBookInOrder = mt_rand(1, $books->count());
            $thisOrderBooks = [];
            while (count($thisOrderBooks) < $nbrOfBookInOrder) {
                $rand = rand(1, $nbrOfBookInOrder);
                //ensue that no number can be duplicated in the array
                $thisOrderBooks[$rand] = $rand;
            };
            foreach ($thisOrderBooks as $thisOrderBook) {
                BookOrder::create(['order_id' => $order->id,
                    'book_id' => $thisOrderBook]);
            }
        }
    }
}
