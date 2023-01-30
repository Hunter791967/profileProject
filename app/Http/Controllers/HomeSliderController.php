<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showData = HomeSlider::all();
        return view('AdminPanel.HomeSlider.show', compact('showData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.HomeSlider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->title);
        // dd($request->file('panner'));
        $request->validate([
            'title' => 'min:8|max:50',
            'sub_title' => 'min:8|max:50',
            'title_desc' => 'min:20|max:80',
            'btn_text' => 'required|min:3|max:20',
            'panner' => 'image|mimes:png,jpg,jpeg,tiff,svg,webb|max:3048',
            'scetion_video' => 'video|mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv |max:9000000',
        ]);

        if ($request->file('panner')) {
            $pannerName = uniqid() . 'Panner' . '.' . $request->file('panner')->extension();

            Image::make($request->file('panner'))->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/homeSlider/' . $pannerName));
        }

        $homeSlider = HomeSlider::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'title_desc' => $request->title_desc,
            'btn_text' => $request->btn_text,
            'panner' => $pannerName,
        ]);
        // dd($homeSlider);
        toast('New HomeSlider Has Been Added Successfully!', 'success');
        return redirect()->route('HomeSlider.index', get_defined_vars());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function show(HomeSlider $homeSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeSlider $homeSlider)
    {
        dd($homeSlider);
        return view('AdminPanel.HomeSlider.update', compact('homeSlider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeSlider $homeSlider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeSlider $homeSlider)
    {
        //
    }
}
