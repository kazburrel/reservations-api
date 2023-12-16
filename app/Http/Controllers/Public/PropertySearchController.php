<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertySearchController extends Controller
{
    public function __invoke(Request $request)
    {
        // $prop = Property::with('city', 'apartments.apartment_type')->get();
        // dd($prop);
        return Property::query()
        ->with(['city', 'apartments.apartment_type', 'apartments.rooms.beds.bed_type'])
            ->when($request->has('city'), function ($query) use ($request) {
                $query->where('city_id', $request->city);
            })
            ->when($request->country, function ($query) use ($request) {
                $query->whereHas('city', fn ($q) => $q->where('country_id', $request->country));
            })
            ->when($request->adults && $request->children, function ($query) use ($request) {
                $query->withWhereHas('apartments', function ($query) use ($request) {
                    $query->where('capacity_adults', '>=', $request->adults)
                        ->where('capacity_children', '>=', $request->children);
                });
            })
            ->get();
    }
}
