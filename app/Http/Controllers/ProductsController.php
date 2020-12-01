<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductsController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);
        $product->load('deliveries'); //ielādē vienreiz lai izmantotu vairākkārt

        return view('products.show', [
            'product' => $product
        ]);
    }

    public function index()
    {
        $products = Product::all();
        $products->load('deliveries');

        return view('products.index', [
            'products' => $products
        ]);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/products');
    }

    public function create()
    {
        Product::create([
            'name' => $_POST['name'],
            'size' => $_POST['size'],
            'price' => $_POST['price'],
            'weight' => $_POST['weight']
        ]);

        return redirect('/products');
    }

    public function update($id)
    {
        $product = Product::find($id);

        $product->name = $_POST['name'];
        $product->size = $_POST['size'];
        $product->price = $_POST['price'];
        $product->weight = $_POST['weight'];

        $product->save();

        return redirect('/products');
    }
}
