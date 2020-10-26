<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;

class OrderTableSeeder extends Seeder
{
    public function run()
    {
        //DB::table('orders')->delete();

        // OrderSeeder
        foreach (User::all() as $user) {
            Order::create([
                'user_id' => $user->id,
                'academic_year_id' => '1'
            ]);
        }
    }
}
