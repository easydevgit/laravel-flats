<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\FlatResource;
use App\Models\Flat;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


class FlatController extends Controller
{
    /**
     * get all flats or by params
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $request->validate([
            'name' => ['string', 'max:255'],
            'min_price' => ['integer', 'max:99999999999999'],
            'max_price' => ['integer', 'max:99999999999999'],
            'bedroom' => ['integer', 'max:1000'],
            'bathroom' => ['integer', 'max:1000'],
            'storey' => ['integer', 'max:1000'],
            'garage' => ['integer', 'max:1000'],
        ]);

        return FlatResource::collection(Flat::filterBy(request()->all())->get());
    }
}
