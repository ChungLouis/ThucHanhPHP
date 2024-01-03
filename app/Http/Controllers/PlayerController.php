<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use App\Http\Requests\Player\StoreRequest;
use App\Http\Requests\Player\UpdateRequest;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Player::orderBy('id', 'asc')->search()->paginate(15);
        return view('admin.player.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.player.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        //dung has để kiểm tra các trường có chứa đúng csdl kh
        // if ($request->has('image')){
        //     $file = $request->image;
        //     $file_name = $file->getClientOriginalName();
        //     $file -> move(public_path('uploads'), $file_name);
        // }
        if(Player::create($request->all())){
            return redirect() -> route('player.index') -> with('success', 'Thêm mới thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        return view('admin.player.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Player $player)
    {
        $player->update($request->only('name', 'image', 'description', 'status', 'created_at'));
        return redirect() -> route('player.index') -> with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect() -> route('player.index') -> with('success', 'Xóa thành công!');
    }
}
