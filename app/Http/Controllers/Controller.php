<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function consultar()
    {
        try {
            $glosarios = News::all();
            return $glosarios;

        } catch(\Exception $e){

            return json_encode($e->getCode());
        }
    }
}
