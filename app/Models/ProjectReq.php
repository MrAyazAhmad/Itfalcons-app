<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectReq extends Model
{
    use HasFactory;
    
    protected $table = "project_reqs";

    protected $fillable = ["name","email","technology","requirement","budget","deadline","contact"];
}
