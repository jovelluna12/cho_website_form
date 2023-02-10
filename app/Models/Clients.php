<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clients extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $primaryKey='client_id';
    protected $dates = ['deleted_at'];
    
    public function tests(){
        return $this->hasMany(tests::class);
    }
}
