<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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
                'title' => 'required',
                'subtitle' => 'required',
                'menu_name' => 'required',
                'image1' => 'image|max:20000',
                'image2' => 'image|max:20000'
            ];

            $request->validate($rules);
            $categorySlug = $this->setSlug($request->title);
            $category = new Category();
            $category->parent = $request->parent;
            $category->slug = $categorySlug;
            $category->title = $request->title;
            $category->subtitle = $request->subtitle;
            $category->order = $request->order;

            $category->menu_name = $request->menu_name;

            $category->headline = $request->headline;
            $category->p1 = $request->p1;
            if ($request->file('image1')) {
                $category->image1 = $request->file('image1')->store('public/category');
                $image1 = Image::make(storage_path('/app/public/' . $category->image1))->fit(571, 371);
                $image1->save();
            } else {
                $category->image1 = null;
            }
            $category->image1desc = $request->image1desc;
            $category->p2 = $request->p2;
            if ($request->file('image2')) {
                $category->image2 = $request->file('image2')->store('public/category');
                $image2 = Image::make(storage_path('/app/public/' . $category->image2))->fit(571, 371);
                $image2->save();
            } else {
                $category->image2 = null;
            }
            $category->image2desc = $request->image2desc;
            $category->p3 = $request->p3;
            $category->video_url = $request->video_url;
            $category->video_desc = $request->video_desc;
            $category->step1_title = $request->step1_title;
            $category->step1_content = $request->step1_content;
            $category->step2_title = $request->step2_title;
            $category->step2_content = $request->step2_content;
            $category->step3_title = $request->step3_title;
            $category->step3_content = $request->step3_content;
            $category->step4_title = $request->step4_title;
            $category->step4_content = $request->step4_content;
            $category->step5_title = $request->step4_title;
            $category->step5_content = $request->step4_content;
            $category->step6_title = $request->step4_title;
            $category->step6_content = $request->step4_content;
            $category->step7_title = $request->step4_title;
            $category->step7_content = $request->step4_content;


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
            $subCats = Category::where('parent', null)->where('id', '!=', $id)->get();
            $category = Category::where('id', $id)->first();

            $verify = Category::where('parent', $id)->get();

            if (isset($category)) {
                return view('admin.category.edit', [
                    'subCats' => $subCats,
                    'category' => $category,
                    'verify' => $verify
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
                'title' => 'required',
                'subtitle' => 'required',
                'menu_name' => 'required',
                'image1' => 'image|max:20000',
                'image2' => 'image|max:20000'
            ];

            $request->validate($rules);

            $category = Category::find($id);

            $categorySlug = $this->setSlug($request->title);
            $category->parent = $request->parent;
            $category->slug = $categorySlug;
            $category->title = $request->title;
            $category->subtitle = $request->subtitle;
            $category->order = $request->order;

            $category->menu_name = $request->menu_name;

            $category->headline = $request->headline;
            $category->p1 = $request->p1;

            if ($request->file('image1')) {
                $category->image1 = $request->file('image1')->store('public/category');
                $image1 = Image::make(storage_path('/app/public/' . $category->image1))->fit(571, 371);
                $image1->save();

            } else {
                $category->image1 = $category->image1;
            }

            $category->image1desc = $request->image1desc;
            $category->p2 = $request->p2;

            if ($request->file('image2')) {
                $category->image2 = $request->file('image2')->store('public/category');
                $image2 = Image::make(storage_path('/app/public/' . $category->image2))->fit(571, 371);
                $image2->save();
            } else {
                $category->image2 = $category->image2;
            }

            $category->image2desc = $request->image2desc;
            $category->p3 = $request->p3;
            $category->video_url = $request->video_url;
            $category->video_desc = $request->video_desc;
            $category->step1_title = $request->step1_title;
            $category->step1_content = $request->step1_content;
            $category->step2_title = $request->step2_title;
            $category->step2_content = $request->step2_content;
            $category->step3_title = $request->step3_title;
            $category->step3_content = $request->step3_content;
            $category->step4_title = $request->step4_title;
            $category->step4_content = $request->step4_content;
            $category->step5_title = $request->step4_title;
            $category->step5_content = $request->step4_content;
            $category->step6_title = $request->step4_title;
            $category->step6_content = $request->step4_content;
            $category->step7_title = $request->step4_title;
            $category->step7_content = $request->step4_content;
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
        if (Auth::check() === true) {
            $category = Category::find($id);

            $verifyServices = Service::where('category_id', $id)->get();
            $verifySubCats = Category::where('parent', $id)->get();
            if ($verifyServices->count() >= 1 || $verifySubCats->count() >= 1) {
                return view('admin.errors', ['erro' => 'Você <b>NÃO</b> pode deletar uma categoria que possui serviços registrados ou outras categorias registrada. Essa ação pode comprometer todo o funcionamento do site! ta ok?',
                    'route' => '/admin']);
            } else {
                $category->delete();
                return redirect('/admin');
            }
        }

        return view('auth.login');

    }

    public function deleteImage1($id)
    {
        if (Auth::check() === true) {

            $category = Category::find($id);

            Storage::delete($category->image1);
            $category->image1 = null;
            $category->save();

            return redirect('admin/category/edit/' . $category->id);

        }
    }

    public function deleteImage2($id)
    {
        if (Auth::check() === true) {

            $category = Category::find($id);

            Storage::delete($category->image2);
            $category->image2 = null;
            $category->save();

            return redirect('admin/category/edit/' . $category->id);

        }
    }
}
