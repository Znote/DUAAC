<?php
/**
 * Developer: Daniel
 * Date: 2/14/14
 * Time: 1:33 AM
 */
namespace App\models;

class Account extends \Illuminate\Database\Eloquent\Model {

    public $timestamps = false;

    public function players()
    {
        return $this->hasMany('Player');
    }
}
