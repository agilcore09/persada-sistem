<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tunggakan extends Model
{
    use HasFactory;
    protected $table = "tunggakan";
    protected $guarded = ["id"];
}
