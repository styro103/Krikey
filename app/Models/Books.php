<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    /**
     * The attributes included from the model's JSON form.
     *
     * @var array
     */
    protected $fillable = ['author_id', 'isbn'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
