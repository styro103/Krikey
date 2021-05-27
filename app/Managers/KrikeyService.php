<?php


namespace App\Managers;

use App\Models\Authors;
use App\Repositories\KrikeyRepository;
use Illuminate\Database\Eloquent\Collection;
use Mockery;

class KrikeyService
{

    public static function searchAuthors(array $filters): array
    {
        return KrikeyRepository::searchAuthors($filters);
    }
}
