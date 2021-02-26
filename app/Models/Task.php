<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate()
 */
class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}
