<?php

namespace App\Http\Controllers;

use App\Models\Ranking;
use App\Models\Club;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Ranking::orderBy('ten_clb', 'ASC')->search()->paginate(15);
        return view('admin.ranking.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $club = Club::orderBy('id', 'asc')->select('ten_clb')->get();
        return view('admin.ranking.create', compact('club'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        if (Ranking::create($request->only('id', 'ten_clb ', 'so_tran', 'thang', 'hoa', 'thua', 'hieu_so', 'diem'))) {
            return redirect()->route('ranking.index')->with('success', 'Thêm mới thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ranking $ranking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ranking $ranking)
    {
        return view('admin.ranking.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ranking $ranking)
    {
        $ranking->update($request->all());
        return redirect()->route('ranking.index')->with('success', 'Cập nhật lịch thi đấu thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ranking $ranking)
    {
        $ranking->delete();
        return redirect()->route('ranking.index')->with('success', 'Xóa thành công');
    }
}
