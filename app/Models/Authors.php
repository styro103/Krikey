<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    /**
     * The attributes included from the model's JSON form.
     *
     * @var array
     */
    protected $fillable = ['name', 'date_of_birth'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
