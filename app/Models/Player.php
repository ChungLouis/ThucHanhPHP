<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = 'player';

    //Tìm kiếm
    public function scopeSearch($query){
        if ($key = request()->key) {
            $query = $query -> WHERE ('name', 'like', '%'.$key.'%', 'AND', 'description', 'like', '%'.$key.'%');
        }
        return $query;
    }

    // thêm sản phẩm
    protected $fillable = ['name', 'image', 'description', 'status', 'created_at'];
}
