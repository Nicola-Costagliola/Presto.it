<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\Category::factory()->create(['name'=>'Tecnologia']);
         \App\Models\Category::factory()->create(['name'=>'Auto']);
         \App\Models\Category::factory()->create(['name'=>'Arredamento']);
         \App\Models\Category::factory()->create(['name'=>'Lavoro']);
         \App\Models\Category::factory()->create(['name'=>'Immobili']);
         \App\Models\Category::factory()->create(['name'=>'Musica']);
         \App\Models\Category::factory()->create(['name'=>'Accessori']);
         \App\Models\Category::factory()->create(['name'=>'Da collezione']);
         \App\Models\Category::factory()->create(['name'=>'Sport']);
         \App\Models\Category::factory()->create(['name'=>'Make-up']);


        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Revisor',
            'email' => 'test@example.com',
            'password' => 'Presto@123',
            'is_revisor' => true
        ]);


         \App\Models\Announcement::factory()->create([
            'title'=>'Pallone Volley',
            'body'=>'MIKASA Pallone Volley Allenamento V330W, Unisex Adulto, Blu/Giallo, 5',
            'price'=>'45',
            'category_id'=>9,
            'user_id'=>1,
        ]);

        \App\Models\Announcement::factory()->create([
            'title'=>'Cuffia piscina',
            'body'=>'ARENA Cappello da Bagno Poliestere II, Nuoto Unisex Adulto',
            'price'=>'6',
            'category_id'=>9,
            'user_id' => 1,
        ]);

        \App\Models\Announcement::factory()->create([
            'title'=>'Pesi palestra',
            'body'=>'Athlyt - Set di manubri rivestiti in neoprene',
            'price'=>'40',
            'category_id'=>9,
            'user_id' => 1,
        ]);

        \App\Models\Announcement::factory()->create([
            'title'=>'Poltrona',
            'body'=>'Intex Beanless Bag - Poltrona a sacco, Grigio, 1.14 m x 1.14 m x 71 cm',
            'price'=>'40',
            'category_id'=>7,
            'user_id' => 1,
        ]);

        \App\Models\Announcement::factory()->create([
            'title'=>'Bracciale donna',
            'body'=>'Morellato Bracciale da donna, Collezione CERCHI, in acciaio, pietra - SAKM63',
            'price'=>'34',
            'category_id'=>7,
            'user_id' => 1,
        ]);

        \App\Models\Announcement::factory()->create([
            'title'=>'Collana donna',
            'body'=>'B.Catcher Collana con pendenti gemelli in zircone cubico ed argento 925',
            'price'=>'19',
            'category_id'=>7,
            'user_id' => 1,
        ]);

        \App\Models\Announcement::factory()->create([
            'title'=>'Orologio uomo',
            'body'=>'Tommy Hilfiger Analogue Quartz Watch for Men, Stainless Steel',
            'price'=>'170',
            'category_id'=>7,
            'user_id' => 1,
        ]);

        \App\Models\Announcement::factory()->create([
            'title'=>'Orecchini donna',
            'body'=>'Orecchini Argento Mari Del Sud Piccoli Giovanni Raspini',
            'price'=>'260',
            'category_id'=>7,
            'user_id' => 1,
        ]);

        \App\Models\Announcement::factory()->create([
            'title'=>'Correttore',
            'body'=>'Makeup Revolution Correttore e definitore C3, 4 ml',
            'price'=>'5',
            'category_id'=>10,
            'user_id' => 1,
        ]);



    }
}
