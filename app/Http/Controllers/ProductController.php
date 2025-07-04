<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::query();
        $search = $request->input('search');

        if ($search) {
            $query->where('no_transaksi', 'like', '%' . $search . '%')
                  ->orWhere('kode_barang', 'like', '%' . $search . '%')
                  ->orWhere('nama_barang', 'like', '%' . $search . '%')
                  ->orWhere('merk', 'like', '%' . $search . '%')
                  ->orWhere('type', 'like', '%' . $search . '%')
                  ->orWhere('keterangan', 'like', '%' . $search . '%');
        }

        $products = $query->latest('id')->paginate(10);
        // $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'no_transaksi' => 'required|string|max:255|unique:products',
            'kode_barang' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'merk' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:255',
            'harga_perolehan' => 'required|numeric|min:0',
            'mutasi_amal' => 'nullable|string|max:255',
            'mutasi_tujuan' => 'nullable|string|max:255',
            'tgl_pindah' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            // 'no_transaksi' => 'required|string|max:255|unique:products,no_transaksi,' . $product->id,
            'kode_barang' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'merk' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:255',
            'harga_perolehan' => 'required|numeric|min:0',
            'mutasi_amal' => 'nullable|string|max:255',
            'mutasi_tujuan' => 'nullable|string|max:255',
            'tgl_pindah' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
