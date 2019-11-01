<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\IProductService;
use App\Services\ProductService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, IProductService $productService)
    {
        $productService->Add();
        return view('home');
    }
}
