<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Club::orderBy('id', 'asc')->search()->paginate(15);
        return view('admin.club.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.club.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Club::create($request->all())){
            return redirect()->route('club.index')->with('success', 'Thêm mới thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Club $club)
    {
        return view('admin.club.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Club $club)
    {
        $club -> update($request->all());
        return redirect()->route('club.index')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Club $club)
    {
            // làm mẫu cho các mục sau
        if ($club->ranking->count() > 0) {
            return redirect() -> route('category.index') -> with('error', 'Không thể xóa!');
        } else {
            $club->delete();
            return redirect()->route('club.index')->with('success', 'Xóa thành công');
        }
    }
}
