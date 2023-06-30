<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Admins\Employee\StoreRequest;
use App\Http\Requests\Admins\Employee\UpdateRequest;
use App\Models\Employee;
use App\Models\Image;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends BaseController
{
    private $image;

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request)
    {
        $sort = $request->input('sort', $this->sort);
        $limit = $request->input('limit', $this->count);
        $sortBy = $request->input('sortBy', $this->sortBy);
        $search = $request->input('s');

        // if ($limit > 100) {
        //     return $this->error('Too many cliparts', 413);
        // }

        $employees = Employee::with('image')->orderBy($sortBy, $sort)->paginate($limit)->withQueryString();


        return view('admins.body.employee', compact('employees'));
    }

    /**
     * Search employee
     *
     * @param Request $request
     * @return void
     */
    public function search(Request $request)
    {
        $sort = $request->input('sort', $this->sort);
        $limit = $request->input('limit', $this->count);
        $sortBy = $request->input('sortBy', $this->sortBy);
        $search = $request->input('s');

        $employees = Employee::with('image')
            ->where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orderBy($sortBy, $sort)
            ->paginate($limit)
            ->withQueryString();

        return response()->json($employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admins.body.employee.create-employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return View
     */
    public function store(StoreRequest $request): View
    {
        $data = $request->safe()->all();

        logger($data);

        if (isset($data['file'])) {
            if ($data['file']) {
                $file = $data['file'];

                $path = Storage::putFileAs('uploads', $data['file'], $file->hashName());

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

        $employee = Employee::create($data);

        return view('admins.body.extras-profile', ['employee' => $employee]);
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
