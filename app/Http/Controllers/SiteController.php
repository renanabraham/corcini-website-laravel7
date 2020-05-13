<?php

namespace App\Http\Controllers;

use App\Addr;
use App\Profile;
use App\Service;
use CoffeeCode\Optimizer\Optimizer;
use Illuminate\Http\Request;
use App\Category;

class SiteController extends Controller
{
    public function home()
    {
        //CLASSE SEO
        $op = new Optimizer();
        $seo = $op->openGraph(env('APP_NAME'), 'pt_BR', 'article')
            ->optimize('Clínica Corcini - Home',
                '',
                url('/'),
                asset(''))
            ->render();

        //LISTAGEM DE CATEGORIAS
        $categories = Category::all();
        $bossCategory = Category::where('parent', null)->orderBy('order', 'ASC')->get();
        $subCategories = Category::where('parent', '!=', null)->get();

        //LISTAGEM DE ENDEREÇO DE ATENDIMENTO
        $addrs = Addr::all();

        return view('home', [
            'seo' => $seo,
            'addrs' => $addrs,
            'categories' => $categories,
            'bossCategory' => $bossCategory,
            'subCategories' => $subCategories
        ]);
    }

    public function services($slug, $id)
    {
        //DEPENDENDCIAS
        $categories = Category::all();
        $subCategories = Category::where('parent', '!=', null)->get();

        //Services
        $category = Category::where('id', $id)->first();
        $subCats = Category::find($id)->subCategories;

        $services = Service::all();

        $categoriesMenu = Category::where('id', '!=', $id)->where('parent', null)->get();

        $serviceByCatId = Category::find($id)->services;


        return view('services', [
            'categories' => $categories,
            'subCategories' => $subCategories,
            'category' => $category,
            'subCats' => $subCats,
            'services' => $services,
            'categoriesMenu' => $categoriesMenu,
            'serviceByCatId' => $serviceByCatId
        ]);
    }

    public function service($slug)
    {
        //DEPENDENDCIAS
        $categories = Category::all();
        $subCategories = Category::where('parent', '!=', null)->get();

        $service = Service::where('slug', $slug)->first();
        $categoriesMenu = Category::where('parent', null)->get();
        $category = Category::where('id', $service->category_id)->first();
        $superCat = Category::where('id', $category->parent)->first();


        return view('service', [
            'categories' => $categories,
            'subCategories' => $subCategories,

            'service' => $service,
            'categoriesMenu' => $categoriesMenu,
            'category' => $category,
            'superCat' => $superCat
        ]);
    }

    public function profile()
    {
        //LISTAGEM DE CATEGORIAS
        $categories = Category::all();
        $subCategories = Category::where('parent', '!=', null)->get();

        //LISTAGEM DE ENDEREÇO DE ATENDIMENTO
        $addrs = Addr::all();


        $profile = Profile::where('id', 1)->first();
        return view('profile', [
            'categories' => $categories,
            'subCategories' => $subCategories,
            'addrs' => $addrs,
            'profile' => $profile
        ]);
    }


    public function nav($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $subCategories = Category::where('parent', '!=', null)->get();
        $categories = Category::all();

        //RELACIONAMENTO
        $services = $category->services()->take(1)->get();

        //LISTA TODOS OS SERVIÇOS
        $servicesAll = Service::all();

        if ($category) {
            return view('pages.category', [
                'category' => $category,
                'categories' => $categories,
                'subCategories' => $subCategories,
                'servicesAll' => $servicesAll,
                'services' => $services
            ]);
        } else {
            echo "a categoria " . $slug . " não existe";
        }
    }


    public function testes()
    {
        $category = Category::all();
        $posts = Service::all();


        foreach ($category as $subCat) {
            if ($subCat->parent != null) {
                echo "<p><b>" . $subCat->title . "</b></p>";
                $services = Category::find($subCat->id)->services;
                foreach ($services as $service) {
                    echo "<p>- " . $service->title . "</p>";
                }
            }
        }
        echo "<hr>";
        $sub = Category::find(3)->subCategories;
        foreach ($sub as $item) {
            echo "<h1>- " . $item->title . "</h1>";
            echo "<p>- " . $item->title . "</p>";
        }

    }
}
