<?php

namespace App\Http\Controllers;


use App\ViewModels\DataTablesModel;
use Illuminate\Http\Request;
use App\ViewModels\IProductModel;
use App\ViewModels\EditProductModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $_productModel;
    private $_iproductModel;

    public function __construct(EditProductModel $productModel)
    {
        $this->_productModel = $productModel;
        $this->_iproductModel = resolve('App\ViewModels\IProductModel');
    }

    public function index()
    {
        $products = $this->_iproductModel->getAll();

        return view('admin.list-product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-product');
        return redirect('products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( $request->hasFile('image')) {
            $storename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->merge(["image"=>$storename]);
        }



        $this->_productModel->store($request);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->_iproductModel->get($id);
        return view('admin.edit-product',compact('product'));
        //return redirect('products');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->_productModel->updateProduct($id);
        return redirect('products');
    }

    public function getProductsJson(Request $request, DataTablesModel $dataTablesModel){
        $model = resolve('App\ViewModels\ViewProductModel');
        return response()->json($model->getProductsJsonData($dataTablesModel));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $this->_productModel->delete($id);
       return redirect('products');
    }
}
