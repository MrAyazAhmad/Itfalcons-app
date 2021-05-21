<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutVideo extends Model
{
    use HasFactory;

    protected $table = "about_videos";

    protected $fillable = ["video","heading","des","sudes1","sudes2","sudes3","sudes4","des2"];
}
