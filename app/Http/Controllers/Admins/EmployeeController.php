<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Admins\Employee\UpdateRequest;
use App\Models\Employee;
use App\Models\Image;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends BaseController
{
    private $image;

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
    public function create(): View
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        logger($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param Employee $employee
     * @return View
     */
    public function show(Employee $employee): View
    {
        return view('admins.body.extras-profile', ['employee' => $employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * TODO: Remove
     */
    // public function edit(Employee $employee): View
    // {
    //     return view();
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param Employee $employee
     * @return View
     */
    public function update(UpdateRequest $request, Employee $employee): View
    {
        $data = $request->safe()->all();

        logger($data);

        if (isset($data['file'])) {
            if ($data['file']) {
                $file = $data['file'];

                $path = Storage::putFileAs('public/uploads', $data['file'], $file->hashName());

                $this->image = Image::create([
                    'name' => $file->hashName(),
                    'alt' => $file->getClientOriginalName(),
                    'url' => $path,
                    'size' => $file->getSize(),
                ]);

                $data['image_id'] = $this->image?->id;
            }

            unset($data['file']);
        }

        $employee->update($data);

        return view('admins.body.extras-profile', ['employee' => $employee]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
