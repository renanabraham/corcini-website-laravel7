<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
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
            $categories = Category::where('parent', '!=', null)->get();
            return view('admin.service.create', ['categories' => $categories]);
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
                'category_id' => 'filled',
                'title' => 'required',
                'subtitle' => 'required',
                'image1' => 'image|max:20000',
                'image2' => 'image|max:20000'
            ];

            $request->validate($rules);
            $slug = Str::slug($request->title);
            $service = new Service();

            $service->category_id = $request->category_id;
            $service->slug = $slug;
            $service->title = $request->title;
            $service->subtitle = $request->subtitle;
            $service->menu_name = $request->menu_name;
            $service->headline = $request->headline;
            $service->p1 = $request->p1;
            if ($request->file('image1')) {
                $service->image1 = $request->file('image1')->store('public/service');
                $image1 = Image::make(public_path('storage/' . $service->image1))->fit(571,371);
                $image1->save();
            } else {
                $service->image1 = null;
            }
            $service->image1desc = $request->image1desc;
            $service->p2 = $request->p2;
            if ($request->file('image2')) {
                $service->image2 = $request->file('image2')->store('public/service');
                $image2 = Image::make(public_path('storage/' . $service->image2))->fit(571,371);
                $image2->save();
            } else {
                $service->image2 = null;
            }
            $service->image2desc = $request->image2desc;
            $service->p3 = $request->p3;
            $service->p4 = $request->p4;
            $service->video_url = $request->video_url;
            $service->video_desc = $request->video_desc;
            $service->step1_title = $request->step1_title;
            $service->step1_content = $request->step1_content;
            $service->step2_title = $request->step2_title;
            $service->step2_content = $request->step2_content;
            $service->step3_title = $request->step3_title;
            $service->step3_content = $request->step3_content;
            $service->step4_title = $request->step4_title;
            $service->step4_content = $request->step4_content;
            $service->step5_title = $request->step4_title;
            $service->step5_content = $request->step4_content;
            $service->step6_title = $request->step4_title;
            $service->step6_content = $request->step4_content;
            $service->step7_title = $request->step4_title;
            $service->step7_content = $request->step4_content;
            $service->save();

            return redirect('/admin');
        }

        redirect(view('auth.login'));

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
            $categories = Category::where('parent', '!=', null)->get();
            $service = Service::where('id', $id)->first();
            if (isset($service)) {
                return view('admin.service.edit', [
                    'service' => $service,
                    'categories' => $categories
                ]);
            }

            return redirect('/admin');
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
                'category_id' => 'filled',
                'title' => 'required',
                'subtitle' => 'required',
                'image1' => 'image|max:20000',
                'image2' => 'image|max:20000'
            ];

            $request->validate($rules);

            $service = Service::find($id);
            $slug = Str::slug($request->title);
            $service->category_id = $request->category_id;
            $service->slug = $slug;
            $service->title = $request->title;
            $service->menu_name = $request->menu_name;
            $service->subtitle = $request->subtitle;
            $service->headline = $request->headline;
            $service->p1 = $request->p1;

            if ($request->file('image1')) {
                $service->image1 = $request->file('image1')->store('public/service');
                $image1 = Image::make(public_path('storage/' . $service->image1))->fit(571,371);
                $image1->save();
            } else {
                $service->image1 = $service->image1;
            }
            $service->image1desc = $request->image1desc;
            $service->p2 = $request->p2;

            if ($request->file('image2')) {
                $service->image2 = $request->file('image2')->store('public/service');
                $image2 = Image::make(public_path('storage/' . $service->image2))->fit(571,371);
                $image2->save();
            } else {
                $service->image2 = $service->image2;
            }

            $service->image2desc = $request->image2desc;
            $service->p3 = $request->p3;
            $service->p4 = $request->p4;
            $service->video_url = $request->video_url;
            $service->video_desc = $request->video_desc;
            $service->step1_title = $request->step1_title;
            $service->step1_content = $request->step1_content;
            $service->step2_title = $request->step2_title;
            $service->step2_content = $request->step2_content;
            $service->step3_title = $request->step3_title;
            $service->step3_content = $request->step3_content;
            $service->step4_title = $request->step4_title;
            $service->step4_content = $request->step4_content;
            $service->step5_title = $request->step4_title;
            $service->step5_content = $request->step4_content;
            $service->step6_title = $request->step4_title;
            $service->step6_content = $request->step4_content;
            $service->step7_title = $request->step4_title;
            $service->step7_content = $request->step4_content;
            $service->save();

            return redirect('/admin');
        }

        redirect(view('auth.login'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        if ($service) {
            $service->delete();
        }

        return redirect('/admin');
    }
}
