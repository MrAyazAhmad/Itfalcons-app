<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = "portfolios";

    protected $fillable = ["name","info","type","image","category","client","project_date","project_url","description"];
}
