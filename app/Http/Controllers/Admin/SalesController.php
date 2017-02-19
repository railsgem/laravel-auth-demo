<?php

namespace App\Http\Controllers\Admin;

use App\Sales;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;


class SalesController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // parent::__construct();
    }

    public function index(){

        $sales  = Sales::all();

        return view('sales.index', ['sales' => $sales]);
        // return response()->json($Saless);

    }

    /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function create(Request $request)
    {
        return view('sales.create');
    }

    /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'sales_person_name' => 'required|max:255'
        ]);
        $Sales = Sales::create($request->all());
        Session::flash('flash_message', 'Store successfully Added!');
        return redirect('/admin/sales');
    }

    /**
     * Destroy the given store.
     *
     * @param  Request  $request
     * @param  Store  $store
     * @return Response
     */
    public function delete($id)
    {
        if($id){
            $Sales  = Sales::find($id);
            $Sales->delete();
            Session::flash('flash_message', 'Store successfully Deleted!');
        }

        return redirect('/admin/sales');
    }
    // public function getSales($id){
    //
    //     $Sales  = Sales::find($id);
    //
    //     return response()->json($Sales);
    // }
    //
    // public function createSales(Request $request){
    //
    //     $Sales = Sales::create($request->all());
    //
    //     return $Sales;
    //     return response()->json($Sales);
    //
    // }
    //
    // public function deleteSales($id){
    //     $Sales  = Sales::find($id);
    //     $Sales->delete();
    //
    //     return response()->json('success');
    // }
    //
    // public function updateSales(Request $request,$id){
    //     $Sales  = Sales::find($id);
    //     $Sales->sales_person_name = $request->input('sales_person_name');
    //     $Sales->name_of_cafe = $request->input('name_of_cafe');
    //     $Sales->street = $request->input('street');
    //     $Sales->suburb = $request->input('suburb');
    //     $Sales->postcode = $request->input('postcode');
    //     $Sales->pos = $request->input('pos');
    //     $Sales->contact_person = $request->input('contact_person');
    //     $Sales->contact_number = $request->input('contact_number');
    //     $Sales->Email = $request->input('email');
    //     $Sales->Website = $request->input('website');
    //     $Sales->Comment = $request->input('comment');
    //     $Sales->Level_of_interes = $request->input('level_of_interest');
    //     $Sales->save();
    //
    //     return response()->json($Sales);
    // }

}
