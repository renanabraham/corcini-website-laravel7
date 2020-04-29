<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CATEGORIAS PRINCIPAIS

        $title1 = 'Intradermoterapia capilar e transplante FUE';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'title' => $title1,
            'slug' => Str::slug($title1),
            'subtitle' => 'Tratamentos capilares totalmente indolores e sem cicatrizes',
            'order' => 1
        ]);

        $title2 = 'Bioplastia: plástica sem cortes para realçar a beleza';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'title' => $title2,
            'slug' => Str::slug($title2),
            'subtitle' => 'Harmonização facial e corporal definitiva e minimamente invasiva',
            'order' => 2
        ]);

        $title3 = 'Medicina estética: saúde, beleza e rejuvenescimento';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'title' => $title3,
            'slug' => Str::slug($title3),
            'subtitle' => 'Tratamentos faciais e corporais para sua pele',
            'order' => 3
        ]);

        //SUBCATEGORIES
        $title4 = 'Transplante FUE';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'parent' => 1,
            'title' => $title4,
            'slug' => Str::slug($title4),
            'subtitle' => ''
        ]);

        $title5 = 'Intradermoterapia Capilar';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'parent' => 1,
            'title' => $title5,
            'slug' => Str::slug($title5),
            'subtitle' => ''
        ]);

        $title6 = 'Bioplastia Facial';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'parent' => 2,
            'title' => $title6,
            'slug' => Str::slug($title6),
            'subtitle' => ''
        ]);

        $title7 = 'Bioplastia Corporal';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'parent' => 2,
            'title' => $title7,
            'slug' => Str::slug($title7),
            'subtitle' => ''
        ]);

        $title8 = 'Harmonização Facial';
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'parent' => 3,
            'title' => $title8,
            'slug' => Str::slug($title8),
            'subtitle' => '',
        ]);
    }
}
