<?php

namespace App\Http\Controllers\Admins\Pages;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Admins\Page\SocialUpdateRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class SocialController extends BaseController
{
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
        return view('admins.body.page.social', ['social' => $page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SocialUpdateRequest $request
     * @param Page $page
     * @return redirect
     */
    public function update(SocialUpdateRequest $request, Page $page)
    {
        $data = $request->safe()->all();

        $page->update(['metadata' => $data['metadata']]);

        return redirect()->route('admin.pages.social.show', ['page' => $page->slug])->with('success', 'Cập nhật mạng xã hội thành công');
    }
}
