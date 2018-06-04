<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $table = "reminder";
    public $timestamps = true;

    public function type(){
        return $this->$table;
    }
}
