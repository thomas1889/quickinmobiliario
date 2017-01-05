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
    return view('price_plans.index', ['price_plans' => PricePlan::all()]);
  }

  public function show($id){
    return view('price_plans.show', ['price_plan' => $this->getPricePlan($id)]);
  }

  /**
  * @return Response
  */
  public function create(){
    return view('price_plans.create');
  }

  /**
  * @param StorePricePlan $request
  * @return Response
  */
  public function store(StorePricePlan $request){
    $price_plan = PricePlan::create($request->all());

    return redirect()->route('price_plan_show_path', $price_plan->id);
  }

  /**
  * @param Integer $id
  * @return Response
  */
  public function edit($id){
    return view('price_plans.edit', ['price_plan' => $this->getPricePlan($id)]);
  }

  /**
  * @param Integer $id
  * @param StorePricePlan $request
  */
  public function update($id, StorePricePlan $request){
    $price_plan = $this->getPricePlan($id)->update($request->all());

    return redirect()->route('price_plan_edit_path', $id);
  }

  /**
  * @param Integer $id
  */
  public function destroy($id){
    $price_plan = $this->getPricePlan($id)->delete();

    return redirect()->route('price_plans_path');
  }

  /**
  * @param Integer $id
  * @return PricePlan
  */
  private function getPricePlan($id){
    return PricePlan::findOrFail($id);
  }
}
