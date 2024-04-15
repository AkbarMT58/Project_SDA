<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module_permission extends Model
{
    use HasFactory;

  
    protected $table      = 'module_permissions';
    protected $primaryKey = 'id';
    protected $fillable   = [ 'id','role_id', 'module_permission', 'view', 'create', 'edit', 'delete'];
  
}
