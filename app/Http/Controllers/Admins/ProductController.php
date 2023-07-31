<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Admins\Product\StoreRequest;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $limit = $request->input('limit', $this->count);
        $sortBy = $request->input('sortBy', $this->sortBy);
        $search = $request->input('s');

        $products = Product::orderBy($sortBy, 'asc')->paginate($limit)->withQueryString();

        return view('admins.body.product.index', compact('products'));
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
     *
     * @param StoreRequest $request
     * @return redirect
     */
    public function store(StoreRequest $request)
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

                $data['image_id'] = $image->id;
            }
            unset($data['file']);
        }

        Product::create($data);

        return redirect()->route('admin.pages.product.index')->with('success', 'Tải lên hình ảnh sản phẩm mới thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
