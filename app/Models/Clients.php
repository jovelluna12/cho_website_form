<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $primaryKey='client_id';
    
    public function tests(){
        return $this->hasMany(tests::class);
    }
}
