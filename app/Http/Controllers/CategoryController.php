<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
// dùng request để lấy yêu cầu trên form
use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dùng priority để xắp sếp các dang mục mới lên đầu tiên
        // hàm search() nằm ở Models\Category.php
        $data = Category::orderBy('priority', 'ASC')->search()->paginate(15);

        // if ($key = request()->key) {
        //     $data = Category::orderBy('created_at', 'DESC') -> WHERE ('name', 'like', '%'.$key.'%') -> paginate(15);
        // }
        return view('admin.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // thay vì dùng ...store(Request $request) như hàm tạo bth
    public function store(StoreRequest $request)
    {
        // $request->validate(
        //     [
        //         gọi hàm function roles() bên StoreRequest.php
        //     ],
        //     [
        //         gọi hàm function messages() bên StoreRequest.php
        //     ]
        // );
        
        if(Category::create($request->all())){
            return redirect() -> route('category.index') -> with('success', 'Thêm mới thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
     // thay vì dùng ...store(Request $request) như hàm tạo bth
    public function update(UpdateRequest $request, Category $category)
    {
        $category->update($request->only('name', 'priority', 'status'));
        return redirect() -> route('category.index') -> with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
            // làm mẫu cho các mục sau
        // if ($category->player->count() > 0) {
        //     return redirect() -> route('category.index') -> with('error', 'Không thể xóa!');
        // } else {
        //     $category->delete();
        //     return redirect() -> route('category.index') -> with('success', 'Xóa thành công!');
        // }

        $category->delete();
        return redirect() -> route('category.index') -> with('success', 'Xóa thành công!');

    }
}
