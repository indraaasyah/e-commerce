<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

use App\Models\Category;
use Str;
use Session;

use App\Authorizable;


class CategoryController extends Controller
{
    use Authorizable;

    public function __construct()
    {
        parent::__construct(); //memanggil root controller untuk menunjukkan menu yang sedang aktif

        $this->data['currentAdminMenu'] = 'catalog'; //menunjukkan menu yang sedang aktif
        $this->data['currentAdminSubMenu'] = 'category';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['categories'] = Category::orderBy('id', 'ASC')->paginate(10);
        return view('admin.categories.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // MEMBUAT LEVEL KATEGORI
        $categories = Category::orderBy('name', 'asc')->get();

        $this->data['categories'] = $categories->toArray();
        $this->data['category'] = null;
        return view('admin.categories.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //MENYIMPAN KATEGORI/LEVEL KATEGORI KE DATABASE
        $params = $request->except('_token');
        $params['slug'] = Str::slug($params['name']);
        $params['parent_id'] = (int)$params['parent_id'];

        if (Category::create($params)) {
            Session::flash('success', 'Category has been saved');
        }
        return redirect ('admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::orderBy('name', 'asc')->get();

        $this->data['categories'] = $categories->toArray();
        $this->data['category'] = $category;
        return view('admin.categories.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        // MENGEDIT KATEGORI
        $params = $request->except('_token');
        $params['slug'] = Str::slug($params['name']);

        $category = Category::findOrFail($id);
        if ($category->update($params)) {
            Session::flash('success', 'Category has been saved');
        }
        return redirect ('admin/categories');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // MENGHAPUS KATEGORI
        $category = Category::FindOrFail($id);
        if ($category->delete()) {
            Session::flash('success', 'Category has been deleted');
        }
        return redirect ('admin/categories');
    }
}
