<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\ViewModels\ICategoryModel;
use App\ViewModels\EditCategoryModel;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $_categoryModel;
    private $_eCategoryModel;

    public function __construct(ICategoryModel $categoryModel)
    {
        $this->_categoryModel = $categoryModel;
        $this->_eCategoryModel =  resolve('App\ViewModels\EditCategoryModel');

    }


    public function index()
    {
        $categories = $this->_categoryModel->getAll();
        return view('admin.list-category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.add-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_categoryModel->addCategory($request);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->_categoryModel->get($id);
        return view('admin.edit-category',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->_eCategoryModel->update($id);
        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->_categoryModel->delete($id);
    }
}
