<?php


namespace App\Classes;

use App\Models\Image as info;
use Knp\Snappy\Image;

class CreateImage
{

    public function generate(info $image)
    {
        foreach ($image->measures as $size) {
            $width = explode('x', $size)[0];
            $height = explode('x', $size)[1];
            $html = view('image', compact(['image', 'width', 'height','size']))->render();
            $snappy = new Image(config('snappy.image.binary'));
            $snappy->setOption('enable-local-file-access', true);
            $snappy->setOption('format', 'png');
            $snappy->setOption('width', $width);
            $snappy->setOption('height', $height);
            $snappy->setOption('quality', 50);
            if (file_exists(public_path('img/results/' . $size . '.png'))) {
                unlink(public_path('img/results/' . $size . '.png'));
            }
            $snappy->generateFromHtml($html, public_path('img/results/' . $size . '.png'));
        }
    }
}
