<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class MultipleChoice extends Model
{
    use HasFactory;

    protected $table = 'mc';
}
