<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedule';

    //Tìm kiếm
    public function scopeSearch($query){
        if ($key = request()->key) {
            $query = $query -> WHERE ('team1', 'like', '%'.$key.'%');
            
        }
        return $query;
    }

    // public function tournament(){
    //     return $this->hasMany(Tournament::class, 'id', 'giai_dau_id');
    // }

    // thêm sản phẩm
    protected $fillable = ['team1', 'team2', 'image1', 'image2', 'giai_dau_id', 'mo_ta', 'created_at'];
}
