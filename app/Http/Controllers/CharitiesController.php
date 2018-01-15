<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charities;
use App\Field;
use App\Charity_field;

class CharitiesController extends Controller
{
    public function index()
    {
        $fields= Field::all();

        return view('charities.index', compact('fields'));
    }

    public function showField(Field $field)
    {
        $fieldName = $field->name;

        $charities = $field->charities;

        return view('charities.show-field', compact('charities', 'fieldName'));
    
    }

    public function showCharity(Charities $charities)
    {

        // Kod som hämtar annonser i en specifik organisation
        return view('ads.show', compact('ads'));
    
    }

    public function showAdsInField(Field $field)
    {


        // Kod som hämtar alla annonser som är kopplade till angivet field-id

        return view('ads.show', compact('ads'));
    
    }
    
}
