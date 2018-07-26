<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ["title", "permissions"];

    public function users() {
        return $this->hasMany("App\User", "group_id");
    }
}
