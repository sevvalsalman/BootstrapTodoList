<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoListM extends Model
{
    use HasFactory;
    protected $table='TodoList';
    protected $primaryKey='id';
    protected $fillable=['baslik','created_at','updated_at'];
}
