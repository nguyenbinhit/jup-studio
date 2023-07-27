<?php

namespace App\Http\Controllers\Admins\Pages;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\Page\UpdateRequest;
use App\Models\Page;
use App\Models\Image;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends BaseController
{
    private $image;
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
        return view('admins.body.page.about', ['page' => $page]);
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
     * @param \App\Http\Requests\Admins\Page\UpdateRequest $request
     * @param \App\Models\Page $page
     * @return redirect
     */
    public function update(UpdateRequest $request, Page $page)
    {
        $data = $request->safe()->all();

        if (isset($data['file'])) {
            if ($data['file']) {
                $file = $data['file'];

                $path = Storage::putFileAs('public/uploads/page_images', $data['file'], $file->hashName());

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

        $page->update($data);

        return redirect()->route('admin.pages.about.show', ['page' => $page->slug])->with('success', 'Cập nhật thành công trang giới thiệu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
