<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Http\Requests\Schedule\StoreRequest;
use App\Http\Requests\Schedule\UpdateRequest;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Schedule::orderBy('id', 'asc')->search()->paginate(15);
        return view('admin.schedule.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tour = Tournament::orderBy('giai_dau', 'asc')->select('id', 'giai_dau')->get();
        return view('admin.schedule.create', compact('tour'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        
        if($request->has('image1', 'image2')) {
            $file1 = $request->image1;
            $file2 = $request->image2;
            $file_name = $file1->getClientOriginalName();
            $file_name = $file2->getClientOriginalName();
            $file1 -> move(public_path('uploads'), $file_name);
            $file2 -> move(public_path('uploads'), $file_name);
        }
        // dd($request->all());
        if(Schedule::create($request->all())){
            return redirect()->route('schedule.index')->with('success', 'Thêm mới thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        $tour = Tournament::orderBy('giai_dau', 'asc')->select('id', 'giai_dau')->get();
        return view('admin.schedule.edit', compact('schedule', 'tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Schedule $schedule)
    {
        $schedule->update($request->only('team1', 'team2', 'image1', 'image2', 'giai_dau_id', 'mo_ta', 'created_at'));
        return redirect()->route('schedule.index')->with('success', 'Cập nhật lịch thi đấu thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        // dd($schedule);
        $schedule->delete();
        return redirect()->route('schedule.index')->with('success', 'Xóa thành công');
    }
}
