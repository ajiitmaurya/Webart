<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function fetchCountry(){
        $path=public_path('country.json');

        $data = json_decode(file_get_contents($path), true);

        return ['code'=>'success','data'=>$data];
    }

    function getImage($img)
    {
        $path = storage_path('app/images/' . $img);
        if (!\File::exists($path)) {
            abort(404);
        }
        $file = \File::get($path);
        $type = \File::mimeType($path);
        $response = \Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }
}
