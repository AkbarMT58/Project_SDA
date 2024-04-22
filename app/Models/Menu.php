<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Menu extends Model
 {
    
    public function Nama_menus()
    {
       
    
        return $this->belongsTo(Menu::class, 'sub_categorymenu','id');


    }


    

    
}
