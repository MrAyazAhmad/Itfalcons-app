<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTech extends Model
{
    use HasFactory;

    protected $table = "service_teches";

    protected $fillable = ["technology","service_id"];

    public function portfolios()
    {
        return $this->hasOne('App\Models\Service','id','service_id');
    }
}
