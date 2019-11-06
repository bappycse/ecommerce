<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\IProductService;
use App\Services\ProductService;
use App\Services\ICartService;
use App\Services\CartService;
use App\Services\ICategoryService;
use App\Services\CategoryService;
use App\Services\IDiscountService;
use App\Services\DiscountService;

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
    }

    public function category(Request $request, ICategoryService $categoryService)
    {
        $categoryService->addCat();
    }

    public function cartTotal(Request $request, ICartService $cartservice)
    {
        $cartservice->getTotal();
    }

    public function totalDiscount(Request $request, IDiscountService $disount)
    {
        $disount->discount();
     }
}