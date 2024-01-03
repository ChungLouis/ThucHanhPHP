<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $table = 'tournament';

    public function scopeSearch($query){
        if ($key = request()->key) {
            $query = $query -> WHERE ('giai_dau', 'like', '%'.$key.'%');
        }
        return $query;
    }

    // public function schedule(){
    //     return $this->hasMany(Schedule::class, 'giai_dau_id', 'id');
    // }

    // thêm sản phẩm
    protected $fillable = ['giai_dau', 'so_luong_doi', 'ngay_to_chuc', 'ngay_ket_thuc'];
}
