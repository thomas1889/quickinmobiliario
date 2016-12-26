<?php

namespace QuickInmobiliario\Http\Controllers;

use Illuminate\Http\Request;
use QuickInmobiliario\Http\Requests\StorePricePlan;
use QuickInmobiliario\PricePlan;

class PricePlanController extends Controller
{
  /**
  * @return Response
  */
  public function index(){
    $price_plans = PricePlan::all();

    return view('price_plans.index', ['price_plans' => $price_plans]);
  }

  public function show($id){
    $price_plan = PricePlan::findOrFail($id);

    return view('price_plans.show', ['price_plan' => $price_plan]);
  }

  /**
  * @return Response
  */
  public function create(){
    return view('price_plans.create');
  }

  public function store(StorePricePlan $request){
    $price_plan = new PricePlan;
    $price_plan->name = $request->get('name');
    $price_plan->price = $request->get('price');;
    $price_plan->description = $request->get('description');
  }

  public function edit(){

  }

  public function update(){

  }

  public function destroy(){

  }
}
