<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina1 extends Model
{
    public $table = 'disciplina';

    public function disciplinas1() {
        return $this->hasMany('App\Event');
    }
}
