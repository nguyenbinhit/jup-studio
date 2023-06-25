<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\BaseController;
use App\Models\Employee;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EmployeeController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admins.body.employee', [
            'employees' => Employee::with('image')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
