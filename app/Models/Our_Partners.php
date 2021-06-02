<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Our_Partners extends Model
{
    use HasFactory;
    protected $table = "Our_Partners";

    protected $fillable = ["company_logo","partner_name"];
}
