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
            $nbrOfBookInOrder = rand(1, $books->count());
            $thisOrderBooks = [];
            for ($i = 0; $i <= $nbrOfBookInOrder ; $i++) {
                $randBookId = $books->random()->id;
                if (BookOrder::all()->isEmpty()) {
                    BookOrder::create([
                        'order_id' => $orders->first()->id,
                        'book_id' => $randBookId
                    ]);
                }
                //foreach line bookauthor which match our actual book_id
                foreach (BookOrder::where('book_id', '=', $order->id)->get() as $thisOrder) {
                    $thisOrderBooks[] = $thisOrder->book_id;
                }
                //create a new line with defined authors in relation with the books
                BookOrder::create([
                    'order_id' => $order->id,
                    'book_id' => DB::table('books')->whereNotIn('id', $thisOrderBooks)->get()->random()->id]);
            }
        }
    }
}
