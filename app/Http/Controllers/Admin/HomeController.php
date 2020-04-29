<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;
use App\Addr;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() === true) {
            //LISTAGEM DE CATEGORIAS
            $categories = Category::all();
            $subCategories = Category::where('parent', '!=', null)->get();

            //LISTAGEM DE ENDEREÇO DE ATENDIMENTO
            $addrs = Addr::all();

            //Listagem de serviços
            $servicesAll = Service::all();

            //Retorno de view
            return view('admin.home', [
                'addrs' => $addrs,
                'categories' => $categories,
                'subCategories' => $subCategories,
                'servicesAll' => $servicesAll
            ]);
        }
        return view('auth.login');
    }

}
