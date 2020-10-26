<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TextualContent;

class TextualContentTableSeeder extends Seeder
{
    public function run()
    {
        //DB::table('textual_content')->delete();

        // TextualContentSeeder
        TextualContent::create(['text' => 'BE 4635 3456 3456 3456']);
        TextualContent::factory()->times(25)->create();
    }
}
