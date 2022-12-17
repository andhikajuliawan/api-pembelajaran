<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'date', 'status', 'category'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category');
    }
    public function status()
    {
        return $this->belongsTo('App\Models\Status', 'status');
    }
}
