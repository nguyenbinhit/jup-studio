<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\Plan\StoreRequest;
use App\Http\Requests\Admins\Plan\UpdateRequest;
use App\Models\Plan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PlanController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admins.body.extras-pricing',
        ['prices'=> Plan::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admins.body.plan.create-pricing');
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreRequest $request
     * @return View
     */
    public function store(StoreRequest $request): View
    {
        logger($request);
        $data = $request->safe()->all();
        $plan = Plan::create($data);
        return view('admins.body.plan.update-pricing',['plan' => $plan]);
    }

    /**
     * Display the specified resource.
     *
     * @param Plan $plan
     * @return View
     */
    public function show(Plan $plan)
    {
        return view('admins.body.plan.update-pricing', ['plan' => $plan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plan $plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param UpdateRequest $request
     * @param Plan $plan
     * @return View
     */
    public function update(UpdateRequest $request, Plan $plan): View
    {
       logger( $plan);
       $data = $request->safe()->all();
       $plan->update($data);

       return view('admins.body.plan.update-pricing',['plan' => $plan]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
