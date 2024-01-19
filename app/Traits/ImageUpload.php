<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

trait ImageUpload
{
    //image upload
    public function image($file, $path, $width, $height)
    {
        $manager = new ImageManager(Driver::class);
        if (! is_dir($path)) {
            mkdir($path, 0777, true);
        }
        // multiple image upload
        if (is_array($file)) {
            if (! empty($file)) {
                $gallery = [];
                $i = 1;
                foreach ($file as $item) {
                    $fileName = substr(md5(time()), 0, 20).$i.'.'.$item->getClientOriginalExtension();
                    $image = $manager->read($item);
                    $image = $image->resize($width, $height);
                    $image->toWebp(100)->save($path.$fileName);
                    $gallery[] = $path.$fileName;
                    $i++;
                }
                return json_encode($gallery);
            }
        }

        // single image upload
        if (! empty($file)) {
            $fileName = substr(md5(time()), 0, 20).'.'.$file->getClientOriginalExtension();
            $image = $manager->read($file);
            $image = $image->resize($width, $height);
            $image->toWebp(100)->save($path.$fileName);

            return $path.$fileName;
        }

    }

    public function fileUpload($file, $path)
    {
        if (! empty($file)) {
            $fileName = substr(md5(time()), 0, 20).'.'.$file->getClientOriginalExtension();
            $file->move($path, $fileName);

            return $path.$fileName;
        }

        return null;
    }

    public static function base64FileStore($file, $directory, $filename, $oldImage = null): string
    {
        self::fileDelete($oldImage);
        $image_name = $filename.'_'.Str::uuid();
        $base64Image = explode(';base64,', $file);
        $explodeImage = explode('image/', $base64Image[0]);
        $extension = $explodeImage[1];
        $image_base64 = base64_decode($base64Image[1]);

        $image = $directory.$image_name.'.'.$extension;
        if (! is_dir($directory)) {
            mkdir($directory, 0777, true);
        }
        file_put_contents($image, $image_base64);

        return $image;
    }

    public static function fileDelete($image)
    {
        if (File::exists($image)) {
            File::delete($image);
        }

        return null;
    }
}