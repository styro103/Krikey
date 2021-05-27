<?php


namespace App\Http\Controllers;


use App\Managers\KrikeyService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class KrikeyController extends Controller
{

    public function searchAuthors(Request $request): JsonResponse
    {
        $filters = [];

        if (!is_null($request->input('author_name'))) {
            $filters['author_name'] = $request->input('author_name');
        }

        $results = KrikeyService::searchAuthors($filters);

        if (array_key_exists("author_name", $filters) && empty($results)) {
            abort(404, "Author not found with given name.");
        } else {
            return response()->json($results)->withCallback($request->input('callback'));
        }
    }
}
