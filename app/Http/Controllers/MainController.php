<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function parse(Request $rq)
    {
        $handle = fopen($_FILES['file']['tmp_name'], 'r');

        $header = true;

        while ($csvLine = fgetcsv($handle, 1000, ",")) {

            if ($header) {
                $header = false;
            } else {
                Property::create([
                    'name' => $csvLine[0],
                    'bedrooms' => $csvLine[1],
                    'bathrooms' => $csvLine[2],
                    'storeys' => $csvLine[3],
                    'garages' => $csvLine[4],
                ]);
            }
        }
    }

    public function table()
    {
        return response()->json(Property::all());
    }
}
