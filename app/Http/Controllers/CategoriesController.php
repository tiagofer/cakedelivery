<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    private $categoryModel;

    public function __construct(Category $categoryModel)
    {
      $this->categoryModel = $categoryModel;
    }

    public function index()
    {
      //Listagem de todas as categorias
      $categoryModel = $this->categoryModel->all();
      return view('categories.index', compact('categoryModel'));
    }

    public function create()
    {
      return view('categories.create');
    }

    public function store(Requests\CategoryRequest $request)
    {
        $input = $request->all();

        $category = $this->categoryModel->fill($input);

        $category->save();

      return redirect(route('listcategories'));
    }
}
