<?php

use App\Models\Category;
use App\Models\PostMeta;
if (!function_exists('themeLocation')) {
    /**
     * Get the theme location from settings.
     *
     * @return string
     */
    function themeLocation()
    {
        return app('settings')['template_location'] ?? 'frontend.themes.maintheme';
    }
    
}
if (!function_exists('formateDate')) {
    /**
     * Get the theme location from settings.
     *
     * @return string
     */
    function formateDate($date)
    {
        return \Carbon\Carbon::parse($date)->format('d M Y');
    }
    
}
// app/Helpers/PostHelper.php

if (!function_exists('getCategoryTitleFromPostMeta')) {
    function getCategoryTitleFromPostMeta($id)
    {
        
        $categoryMeta = PostMeta::query()->where('post_id',$id)->where('meta_key', 'category_id')->first();

        if ($categoryMeta) {
            $category = Category::find($categoryMeta->meta_value);

            if ($category) {
                return $category->title;
            }
        }

        return 'Uncategories';
    }
}