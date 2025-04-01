<?php

namespace App\Http\Controllers\V1;

use App\Models\Link;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class LinkController extends Controller
{
    // Example | This is used in web.php route
    public function index()
    {
        $link = Link::all();

        $link = [
            'test' => 'one',
        ];

        return response()->json([
            $link,
        ]);
    }
}
