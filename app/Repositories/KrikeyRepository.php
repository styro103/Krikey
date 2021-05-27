<?php


namespace App\Repositories;

use App\Models\Authors;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class KrikeyRepository
{
    public static function searchAuthors(array $filters) : array
    {
        if (array_key_exists("author_name", $filters)) {
            return DB::select( DB::raw(
                "SELECT authors.id , authors.name, SUM(sale_items.item_price*sale_items.quantity) AS sales_revenue ".
                "FROM sale_items ".
                "INNER JOIN books ".
                "ON sale_items.book_id = books.id ".
                "INNER JOIN authors ".
                "ON books.author_id = authors.id ".
                "WHERE authors.name= '".$filters['author_name']."' ".
                "GROUP BY authors.id, authors.name ".
                "ORDER BY SUM(sale_items.item_price*sale_items.quantity) DESC ".
                "LIMIT 10;"
            ) );
        } else {
            return DB::select( DB::raw(
                "SELECT authors.id , authors.name, SUM(sale_items.item_price*sale_items.quantity) AS sales_revenue ".
                "FROM sale_items ".
                "INNER JOIN books ".
                "ON sale_items.book_id = books.id ".
                "INNER JOIN authors ".
                "ON books.author_id = authors.id ".
                "GROUP BY authors.id, authors.name ".
                "ORDER BY SUM(sale_items.item_price*sale_items.quantity) DESC ".
                "LIMIT 10;"
            ) );
        }
    }
}
