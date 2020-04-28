<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check() === true) {
            $categories = Category::where('parent', null)->get();
            return view('admin.category.create', [
                'categories' => $categories
            ]);
        }

        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check() === true) {
            $rules = [
                'title' => 'filled',
                'subtitle' => 'required'
            ];

            $request->validate($rules);

            $categorySlug = $this->setSlug($request->title);
            $category = new Category();
            $category->parent = $request->parent;
            $category->slug = $categorySlug;
            $category->title = $request->title;
            $category->subtitle = $request->subtitle;
            $category->order = $request->order;
            $category->save();

            return redirect('/admin');
        }

        return view('auth.login');
    }

    private function setSlug($title)
    {
        $categorySlug = Str::slug($title);

        $categories = Category::all();
        $t = 0;
        foreach ($categories as $category) {
            if (Str::slug($category->title) === $categorySlug) {
                $t++;
            }
        }

        if ($t > 0) {
            $categorySlug = $categorySlug . '-' . $t;
        }

        return $categorySlug;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check() === true) {
            $subCats = Category::where('parent', null)->get();
            $category = Category::where('id', $id)->first();
            if (isset($category)) {
                return view('admin.category.edit', [
                    'subCats' => $subCats,
                    'category' => $category,
                ]);
            }
        }

        return view('auth.login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::check() === true) {
            $rules = [
                'title' => 'filled',
                'subtitle' => 'required'
            ];

            $request->validate($rules);
            $category = Category::find($id);
            $categorySlug = $this->setSlug($request->title);

            $category->parent = $request->parent;
            $category->slug = $categorySlug;
            $category->title = $request->title;
            $category->subtitle = $request->subtitle;
            $category->order = $request->order;
            $category->save();

            return redirect('/admin');
        }

        return view('auth.login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::check()===true) {
            $category = Category::find($id);

            if ($category) {
                $category->delete();
                return redirect('/admin');
            } else {
                return redirect('/admin');
            }
        }

        return view('auth.login');

    }
}
