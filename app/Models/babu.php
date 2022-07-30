<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class babu extends Model
{
    use HasFactory;
    protected $table='babus';
    protected $primarykey='id';
    protected $fillable=['name','username'];

}
