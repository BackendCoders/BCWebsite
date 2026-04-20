<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SectionItem;
class Section extends Model
{
 
    protected $fillable = ['page_id','type','title','order'];

    public function items()
    {
        return $this->hasMany(SectionItem::class)->orderBy('order');
    }
}


