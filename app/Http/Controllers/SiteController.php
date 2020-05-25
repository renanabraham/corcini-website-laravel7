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

        //LISTAGEM DE TODOS OS SERVIÇOS
        $services = Service::all();

        //LISTAGEM DE ENDEREÇO DE ATENDIMENTO
        $addrs = Addr::all();

        return view('home', [
            'seo' => $seo,
            'addrs' => $addrs,
            'categories' => $categories,
            'bossCategory' => $bossCategory,
            'subCategories' => $subCategories,
            'services' => $services
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
        $services = Service::all();

        $categoriesMenu = Category::where('parent', null)->get();

        $service = Service::where('slug', $slug)->first();
        $anotherServices = Service::all();

        $category = Category::where('id', $service->category_id)->first();
        $superCat = Category::where('id', $category->parent)->first();

        return view('service', [
            'categories' => $categories,
            'subCategories' => $subCategories,

            'service' => $service,
            'categoriesMenu' => $categoriesMenu,
            'category' => $category,
            'superCat' => $superCat,
            'anotherServices' => $anotherServices,
            'services' => $services
        ]);
    }

    public function profile()
    {
        //LISTAGEM DE CATEGORIAS
        $categories = Category::all();
        $subCategories = Category::where('parent', '!=', null)->get();

        //LISTAGEM DE ENDEREÇO DE ATENDIMENTO
        $addrs = Addr::all();

        $services = Service::all();


        $profile = Profile::where('id', 1)->first();
        return view('profile', [
            'categories' => $categories,
            'subCategories' => $subCategories,
            'addrs' => $addrs,
            'profile' => $profile,
            'services' => $services
        ]);
    }

    public function contact()
    {
        //LISTAGEM DE CATEGORIAS
        $categories = Category::all();
        $bossCategory = Category::where('parent', null)->orderBy('order', 'ASC')->get();
        $subCategories = Category::where('parent', '!=', null)->get();

        //LISTAGEM DE TODOS OS SERVIÇOS
        $services = Service::all();

        //LISTAGEM DE ENDEREÇO DE ATENDIMENTO
        $addrs = Addr::all();

        return view('contact', [
            'categories' => $categories,
            'bossCategory' => $bossCategory,
            'subCategories' => $subCategories,
            'services' => $services,
            'addrs' => $addrs
        ]);
    }

}
