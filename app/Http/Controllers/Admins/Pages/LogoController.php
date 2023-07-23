<?php

namespace App\Http\Controllers\Admins\Pages;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Admins\Page\LogoUpdateRequest;
use App\Models\Image;
use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Page $page)
    {
        request()->session()->forget('success');
        request()->session()->forget('error');

        return view('admins.body.page.logo', ['page' => $page]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param LogoUpdateRequest $request
     * @param Page $page
     * @return void
     */
    public function update(LogoUpdateRequest $request, Page $page)
    {
        $data = $request->safe()->all();

        if (isset($data['file'])) {
            if ($data['file']) {
                $file = $data['file'];

                $path = Storage::putFileAs('public/uploads', $data['file'], $file->hashName());

                $image = Image::create([
                    'name' => $file->hashName(),
                    'alt' => $file->getClientOriginalName(),
                    'url' => $path,
                    'size' => $file->getSize(),
                ]);

                $page->update(['image_id' => $image->id]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
