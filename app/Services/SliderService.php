<?php

namespace App\Services;

use App\Models\Slider;
use App\Traits\ImageUpload;
use Illuminate\Support\Arr;

class SliderService
{
    use ImageUpload;

    public function index($request)
    {
        $slider = Slider::query()
        ->when(request()->get('active'), function ($query) {
            return $query->active();
        })
        ->when(request()->get('search'), function ($query) {
            return $query->search(request()->get('search'));
        })
        ->latest();
        if ($request->has('paginate')) {
            return $slider->select(['id', 'name'])->get();
        } else {
            return $slider->paginate(request()->get('per_page', 10));
        }
    }
    public function store($slider , $request)
    {

        $requestedData = $request->all();
        $feature_image = $request->file('feature_image');
        if ($feature_image) {
            $requestedData['feature_image'] = $this->image($feature_image, 'public/images/slider/', 1080,720);
        }
        $slider->fill($requestedData)->save();

        return $slider;
    }

    public function update($slider, $request)
    {
        $requestedData = $request->all();
        $feature_image = $request->file('feature_image');

        if ($feature_image) {
            if (file_exists($slider->feature_image)) {
                unlink($slider->feature_image);
            }
            $requestedData['feature_image'] = $this->image($feature_image, 'public/images/slider/', 1080,720,);
        }

        $requestedData = Arr::except($requestedData, ['feature_image']);

        $slider->update($requestedData);

        return $slider;
    }

    public function delete($slider)
    {
        if (file_exists($slider->feature_image)) {
            unlink($slider->feature_image);
        }
        $slider->delete();
    }
}
