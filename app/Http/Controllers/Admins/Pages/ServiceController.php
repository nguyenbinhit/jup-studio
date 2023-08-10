<?php

namespace App\Http\Controllers\Admins\Pages;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Admins\Page\ServiceUpdateRequest;
use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ServiceController extends BaseController
{
    /**
     * Display the specified resource.
     *
     * @param Page $page
     * @return View
     */
    public function show(Page $page): View
    {
        return view('admins.body.page.service', ['services' => $page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServiceUpdateRequest $request
     * @param Page $page
     * @return redirect
     */
    public function update(ServiceUpdateRequest $request, Page $page)
    {
        $data = $request->safe()->all();

        $page->update(['metadata' => $data['metadata']]);

        return redirect()->route('admin.pages.service.show', ['page' => 'service'])->with('success', 'Cập nhật các dịch vụ thành công');
    }
}
