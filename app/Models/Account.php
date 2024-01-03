<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Account extends Model
{
    use HasFactory;

    protected $table = 'account';

    public function scopeSearch($query){
        if ($key = request()->key) {
            $query = $query -> WHERE ('name ', 'like', '%'.$key.'%');
        }
        return $query;
    }
    
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
    public function getPasswordAttribute()
    {
        return '********'; // Thay thế bằng giá trị thích hợp hoặc không trả về mật khẩu trong giao diện người dùng
    }

    // thêm sản phẩm
    protected $fillable = ['name','password ', 'email', 'phone', 'address', 'role'];
}
