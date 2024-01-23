<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Services\SettingsService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;
use App\Http\Requests\StoreSettingsRequest;
use App\Http\Requests\UpdateSettingsRequest;

class SettingsController extends Controller
{
    protected $SettingService;

    public function __construct(SettingsService $SettingService)
    {
        $this->SettingService = $SettingService;
    }
    public function index()
    {
        return view('backend.settings.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSettingsRequest $request)
    {
        // return $request->all();
        $this->SettingService->store($request);
        try {
            // return $request->all();
            $this->SettingService->store($request);
            Cache::forget('settings');
            return redirect()->route('admin.settings.index')->with('success','Update Information Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.settings.index')->with('error',$th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingsRequest $request, Settings $settings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Settings $settings)
    {
        //
    }
}