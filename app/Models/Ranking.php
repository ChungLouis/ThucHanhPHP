<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    use HasFactory;

    protected $table = 'ranking';

    //Tìm kiếm
    public function scopeSearch($query){
        if ($key = request()->key) {
            $query = $query -> WHERE ('ten_clb ', 'like', '%'.$key.'%');
        }
        return $query;
    }

    public function club(){
        return $this->hasOne(Club::class, 'ten_clb', 'ten_clb');
    }

    // thêm sản phẩm
    protected $fillable = ['id','ten_clb ', 'so_tran', 'thang', 'hoa', 'thua', 'hieu_so', 'diem'];
}
