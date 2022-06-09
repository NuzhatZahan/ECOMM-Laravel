<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Users extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = "users";
    protected $primaryKey = "user_id";
}
