<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rols extends Model
{
    use HasFactory;

    protected $table = 'rols';

    protected $primaryKey = 'id';


    protected $fillable = [
        'name',
        'description',
    ];

    public function users(){
        return $this->hasOne(User::class);
    }
}
