<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class SaleItems extends Model
{
    /**
     * The attributes included from the model's JSON form.
     *
     * @var array
     */
    protected $fillable = ['book_id', 'customer_name', 'item_price', 'quantity'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
