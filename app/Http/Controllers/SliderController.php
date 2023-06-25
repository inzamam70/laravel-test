<?php

namespace App\Http\Controllers;

use App\Models\Front_slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $slider;

    public function __construct(Front_slider $slider)
    {
        $this->slider = $slider;
    }

    public function index()
    {
        $sliders = $this->slider->latest()->paginate(5);
        return view('admin.slider.index2', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $this->slider->create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('slider.index2');
    }

    public function show($id)
    {
        $slider = Front_slider::find($id);
        
        return view('admin.slider.show', compact('slider'));
    }

    public function edit($id)
    {
        $slider = $this->slider->find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $this->slider->find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('slider.index2');
    }

    public function destroy($id)
    {
        $this->slider->find($id)->delete();
        return redirect()->route('slider.index2');
    }

}
