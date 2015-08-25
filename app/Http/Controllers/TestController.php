<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    private $categories;
    public function __construct(Category $category)
    {
      $this->categories = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    public function exemplo()
    {
      $categories = $this->categories->all();

      return view ('exemplo', compact('categories'));
    }
}
