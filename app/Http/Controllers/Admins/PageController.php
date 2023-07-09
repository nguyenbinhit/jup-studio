<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Admins\Page\UpdateRequest;
use App\Models\Image;
use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends BaseController
{
    private $image;

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request): View
    {
        $sort = $request->input('sort', $this->sort);
        $limit = $request->input('limit', $this->count);
        $sortBy = $request->input('sortBy', $this->sortBy);
        $search = $request->input('s');

        $pages = Page::with('image')->orderBy($sortBy, $sort)->paginate($limit)->withQueryString();

        return view('admins.body.page.index', compact('pages'));
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
     *
     * @param \App\Models\Page $page
     * @return \Illuminate\Contracts\View\View
     */
    // public function show(Page $page): View
    // {
    //     return view();
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page): View
    {
        return view('admins.body.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
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

        return redirect()->route('admin.pages.edit', ['page' => $page->uuid])->with('success', 'Cập nhật thành công trang tĩnh (' . $page->name . ')');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
