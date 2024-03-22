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
        \App\Models\Category::factory()->create([
            'name_it'=>'Tecnologia',
            'name_es'=>'Tecnología',
            'name_en'=>'Technology']);
            
        \App\Models\Category::factory()->create([
                'name_it'=>'Auto',
                'name_es'=>'Auto',
                'name_en'=>'Car']);
                
        \App\Models\Category::factory()->create([
                    'name_it'=>'Arredamento',
                    'name_es'=>'Muebles',
                    'name_en'=>'Furniture']);
        \App\Models\Category::factory()->create([
                        'name_it'=>'Lavoro',
                        'name_es'=>'Trabajar',
                        'name_en'=>'Work']);

         \App\Models\Category::factory()->create([
                            'name_it'=>'Immobili',
                            'name_es'=>'Propiedades',
                            'name_en'=>'Properties']);

                            \App\Models\Category::factory()->create([
                                'name_it'=>'Musica',
                                'name_es'=>'Música',
                                'name_en'=>'Music']);

                                \App\Models\Category::factory()->create([
                                    'name_it'=>'Accessori',
                                    'name_es'=>'Accesorios',
                                    'name_en'=>'Accessories']);

                                    \App\Models\Category::factory()->create([
                                        'name_it'=>'Da collezione',
                                        'name_es'=>'Coleccionable',
                                        'name_en'=>'Collectible']);

                                        \App\Models\Category::factory()->create([
                                            'name_it'=>'Sport',
                                            'name_es'=>'Deporte',
                                            'name_en'=>'Sport']);

                                            \App\Models\Category::factory()->create([
                                                'name_it'=>'Make-up',
                                                'name_es'=>'Constituir',
                                                'name_en'=>'Make-up']);
            
                        
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
                