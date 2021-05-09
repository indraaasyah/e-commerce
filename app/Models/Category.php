<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Membuat manajemen kagtegori
    protected $fillable = ['name', 'slug', 'parent_id'];

    //Membuat multi level kategori
    public function childs()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }
}
