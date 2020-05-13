<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit($id)
    {
        $profile = Profile::where('id', $id)->first();
        if (isset($profile)) {
            return view('admin.profile.edit', [
                'profile' => $profile
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'required',
            'subtitle' => 'required',
            'headline' => 'required',
            'p1' => 'required',
            'p4' => 'required'
        ];

        $request->validate($rules);

        $profile = Profile::find($id);

        $profile->title = $request->title;
        $profile->subtitle = $request->subtitle;
        $profile->headline = $request->headline;
        $profile->p1 = $request->p1;
        $profile->p2 = $request->p2;
        $profile->p3 = $request->p3;
        $profile->p4 = $request->p4;

        $profile->save();

        return redirect('/admin');
    }

}
