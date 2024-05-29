<?php

namespace App\Http\Controllers\Images;

use App\Classes\CreateImage;
use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function image($size){
        $image = Image::orderBy('created_at', 'DESC')->first();
        $width = explode('x', $size)[0];
        $height = explode('x', $size)[1];
        return view('image', compact(['image', 'size', 'width', 'height']));
    }

    public function store(){
        $data = array_merge(\request()->all(), ["measures" => ["640x387","768x304","768x448","816x336","1088x448","1320x720"]]);
        $name = 'image-'.now()->timestamp.'.jpg';
        Storage::disk('images')->putFileAs('', $data['url'], $name);
        $data['url'] = $name;
        $image = Image::create($data);
        $img = new CreateImage();
        $img->generate($image);
        $urls = [];
        foreach($data['measures'] as $size){
            $urls[] = [$size => asset('img/results/' . $size . '.png')];
        }
        return response()->json(['message' => 'ok', 'imageUrls' => $urls]);
    }

    public function admin(){
        return view('admin');
    }

    public function test(){
        $image = array_merge(\request()->all(), ["measures" => ["640x387","768x304","768x448","816x336","1088x448","1320x720"]]);
        $size = "1320x720";
        $image['url'] = 'pasto.jpg';
        $image['phrase'] = "texto de prueba abber";
        $width = explode('x', $size)[0];
        $height = explode('x', $size)[1];

        return view('image', compact(['image', 'width', 'height','size']))->render();
    }

    public function getImage($size){
        if(!file_exists(public_path('img/results/' . $size . '.png'))){
            return json_encode([
                'code' => 400,
                'message' => 'not found'
            ]);
        }
        return json_encode([
            'code' => 200,
            'message' => [
                'img' => 'https://marias.prodooh.com/img/results/'.$size.'.png'
            ]
        ]);
    }
}
