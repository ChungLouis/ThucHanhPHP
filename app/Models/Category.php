<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // liên kết đến bảng category
    protected $table = 'category';

    // dùng scope để rút gọn phần tìm kiếm ở Category.php từ dòng 19-21
    public function scopeSearch($query){
        if ($key = request()->key) {
            $query = $query -> WHERE ('name', 'like', '%'.$key.'%');
        } 
        return $query;
    }

    // thêm sản phẩm
    protected $fillable = ['name', 'status', 'priority'];
}
