<?php

namespace App\Services;

use App\Models\Settings;
use App\Traits\ImageUpload;

class SettingsService
{
    use ImageUpload;


    public function store($request)
    {
        $requestData = $request->all();

        foreach ($requestData as $metaKey => $metaValue) {
            // Handle special case for 'site' meta key
            if ($metaKey == 'site_default_logo') {
                $metaValue = $this->image($metaValue, 'public/images/', 373, 108);
            }
            if ($metaKey == 'site_light_logo') {
                $metaValue = $this->image($metaValue, 'public/images/', 373, 108);
            }
            if ($metaKey == 'site_fav_icon') {
                $metaValue = $this->image($metaValue, 'public/images/', 180, 180);
            }
            if ($metaKey == 'about_image') {
                $metaValue = $this->image($metaValue, 'public/images/', 600, 400);
            }
            // Use updateOrcreate to update existing record or create a new one if not exists
            Settings::updateOrCreate(
                ['meta_key' => $metaKey],
                ['meta_value' => $metaValue]
            );
        }
    }

}
