<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    public $timestamp = false;


    public function permission()
    {

        return $this->belongsToMany('App\Permission');
    }

    public function givePermissionTo(Permission $permission)
    {
        $this->permission()->save($permission);
    }

}
