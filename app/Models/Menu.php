<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['app_id', 'menu_code', 'menu_title', 'description','parent_id','menu_icon','menu_route','sort_order','is_active'];

    public function submenus()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id')->orderBy('sort_order');
    }
}
