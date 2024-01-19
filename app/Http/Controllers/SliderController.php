<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Services\SliderService;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;

class SliderController extends Controller
{
    protected $sliderService;

    public function __construct(SliderService $sliderService)
    {
        $this->sliderService = $sliderService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sliders = $this->sliderService->index($request);
        
        return view('backend.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('backend.slider.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request,Slider $slider)
    {
        try {
            // return $request->all();
            $this->sliderService->store($slider,$request);
            return redirect()->route('admin.slider.index')->with('success','Slider Added Successfully');
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('backend.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        try {
            $this->sliderService->update($slider,$request);

            return redirect()->route('admin.slider.index')->with('success','Slider Update Successfully');
        } catch (\Throwable $e) {
            return redirect()->route('admin.slider.index')->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $this->sliderService->delete($slider);
        return redirect()->route('admin.slider.index')->with('success','Slider Deleted Successfully');
    }
}