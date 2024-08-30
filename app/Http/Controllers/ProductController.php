<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        // $product = new Product(
        //     [
        //         'name' => $request->get('name'),
        //         'image' => $request->get('image'),
        //         'description' => $request->get('description'),
        //     ]
        // );
        // $product->name = $request->get('name');
        // $product->image = $request->get('image');
        // $product->description = $request->get('description');
        // $product->save();
        Product::create([
            'name' => $request->get('name'),
            'image' => $request->get('image'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('dashboard');
    }

    
    public function delete(Request $request, $id) {
        $product = Product::find($id);

        $product->delete();
        
        return redirect()->route('dashboard');
        

    }
    
    public function update(Request $request, $id) {
        $product = Product::find($id);
    
            $product->update([
                'name' => $request->get('name'),
                'image' => $request->get('image'),
                'description' => $request->get('description'),
            ]);
    
        return redirect()->route('dashboard');
        
    }
}
