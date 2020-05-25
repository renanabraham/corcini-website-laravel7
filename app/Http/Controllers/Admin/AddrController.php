<?php

namespace App\Http\Controllers\Admin;

use App\Addr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use PHPUnit\Framework\StaticAnalysis\HappyPath\AssertNotInstanceOf\A;

class AddrController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check() === true) {
            return view('admin.addr.create');
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
                'photo' => 'filled|image|max:20000',
                'city' => 'required',
                'addr' => 'required',
                'whatsapp' => 'required',
                'phone' => 'required',
            ];

            $request->validate($rules);

            $addr = new Addr;

            if ($request->file('photo')) {
                $addr->photo = $request->file('photo')->store('public/addr');
                $image1 = Image::make(public_path('storage/' . $addr->image1))->fit(571,371);
                $image1->save();
            } else {
                $addr->photo = null;
            }
            $addr->city = $request->city;
            $addr->addr = $request->addr;
            $addr->whatsapp = $request->whatsapp;
            $addr->phone = $request->phone;
            $addr->save();

            return redirect('/admin');
        }

        return view('auth.login');

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
            $addr = Addr::where('id', $id)->first();
            if (isset($addr)) {
                return view('admin.addr.edit', [
                    'addr' => $addr
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
                'photo' => 'filled|image|max:20000',
                'city' => 'required',
                'addr' => 'required',
                'whatsapp' => 'required',
                'phone' => 'required',
            ];

            $request->validate($rules);


            $addr = Addr::find($id);
            if ($request->file('photo')) {
                $addr->photo = $request->file('photo')->store('public/addr');
                $image1 = Image::make(public_path('storage/' . $addr->image1))->fit(571,371);
                $image1->save();
            } else {
                $addr->photo = $addr->photo;
            }
            $addr->city = $request->city;
            $addr->addr = $request->addr;
            $addr->whatsapp = $request->whatsapp;
            $addr->phone = $request->phone;
            $addr->save();

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
            $addr = Addr::find($id);

            if ($addr ) {
                $addr->delete();
                return redirect('/admin');
            } else {
                return redirect('/admin');
            }
        }

        return view('auth.login');
    }
}
