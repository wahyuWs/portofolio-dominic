<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use App\Models\PortofolioModel;
use App\Models\ServiceModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $about = AboutModel::first();
        $services = ServiceModel::all();
        $portofolio = PortofolioModel::all();

        // return $portofolio;
        return view('main', [
            'about' => $about,
            'services' => $services,
            'portofolio' => $portofolio
        ]);
    }
}
