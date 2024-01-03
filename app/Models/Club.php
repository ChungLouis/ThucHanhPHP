<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $table = 'club';

    protected $fillable = ['ten_clb'];

    public function scopeSearch($query){
        if ($key = request()->key) {
            $query = $query -> WHERE ('giai_dau', 'like', '%'.$key.'%');
        }
        return $query;
    }

    public function ranking(){
        return $this->hasMany(Ranking::class, 'ten_clb', 'ten_clb');
    }
}
