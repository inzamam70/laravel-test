<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    protected $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    public function index()
    {
        $categories = $this->category->latest()->paginate(5);
        return view('admin.category.index', compact('categories'));
    }   
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        $this->category->create([
            'name' => $request->name,
        ]);
        return redirect()->route('category.index');
    }
    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.category.show', compact('category'));
    }
    public function edit($id)
    {
        $category = $this->category->find($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $this->category->find($id)->update([
            'name' => $request->name,
        ]);
        return redirect()->route('category.index');
    }
    public function destroy($id)
    {
        $this->category->find($id)->delete();
        return redirect()->route('category.index');
    }
    

}
