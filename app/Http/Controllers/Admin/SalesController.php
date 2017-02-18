<?php

namespace App\Http\Controllers;

use App\Sales;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SalesController extends Controller{


    public function index(){

        $Saless  = Sales::all();

        return "sss";//response()->json($Saless);

    }

    public function getSales($id){

        $Sales  = Sales::find($id);

        return response()->json($Sales);
    }

    public function createSales(Request $request){

        $Sales = Sales::create($request->all());

        return $Sales;
        return response()->json($Sales);

    }

    public function deleteSales($id){
        $Sales  = Sales::find($id);
        $Sales->delete();

        return response()->json('success');
    }

    public function updateSales(Request $request,$id){
        $Sales  = Sales::find($id);
        $Sales->sales_person_name = $request->input('sales_person_name');
        $Sales->name_of_cafe = $request->input('name_of_cafe');
        $Sales->street = $request->input('street');
        $Sales->suburb = $request->input('suburb');
        $Sales->postcode = $request->input('postcode');
        $Sales->pos = $request->input('pos');
        $Sales->contact_person = $request->input('contact_person');
        $Sales->contact_number = $request->input('contact_number');
        $Sales->Email = $request->input('email');
        $Sales->Website = $request->input('website');
        $Sales->Comment = $request->input('comment');
        $Sales->Level_of_interes = $request->input('level_of_interest');
        $Sales->save();

        return response()->json($Sales);
    }

}
