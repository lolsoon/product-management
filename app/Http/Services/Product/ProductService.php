<?php

namespace App\Http\Services\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ProductService
{

    public function getParent()
    {
        return Product::where('menu_id', 0)->get();
    }

    public function getAll()
    {
        return Product::orderByDesc('id')->paginate(20);
    }

    public function create($request)
    {
        try {
            Product::create([
                'name' => (string) $request->input('name'),
                'menu_id' => (int) $request->input('menu_id'),
                'price' => (int) $request->input('price'),
                'sale_price' => (int) $request->input('sale_price'),
                'description' => (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'thumbnail' => (string) $request->input('thumbnail'),
                'active' => (string) $request->input('active')
            ]);

            Session::flash('success', 'Tạo danh mục sản phẩm thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }
}
