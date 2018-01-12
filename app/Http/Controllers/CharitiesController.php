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

        // return $fields;
        return view('charities.index', compact('fields'));
    }

    public function showField(Field $field)
    {
        $fieldName = $field->name;

        $charities_id = Charity_field::where('field_id', $field->id)->select('charity_id')->get();

        $idArray = [];

        foreach ($charities_id as $key => $charity) {
            $idArray[] = $charity->charity_id;

        }

        $charities = Charities::whereIn('id', $idArray)->get();

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
