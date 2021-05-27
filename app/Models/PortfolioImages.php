<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioImages extends Model
{
    use HasFactory;

    protected $table = "portfolio_images";

    protected $fillable = ["portfolio_img","portfolio_id"];

    public function portfolios()
    {
        return $this->hasOne('App\Models\Portfolio','id','portfolio_id');
    }
}
