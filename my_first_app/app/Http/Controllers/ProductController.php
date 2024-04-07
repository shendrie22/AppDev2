<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products = [
        [
            'id' => 1,
            'name' => 'Product 1',
            'price' => 10.99,
            'description' => 'This is product 1 description.'
        ],
        [
            'id' => 2,
            'name' => 'Product 2',
            'price' => 19.99,
            'description' => 'This is product 2 description.'
        ],
        [
            'id' => 3,
            'name' => 'Product 3',
            'price' => 29.99,
            'description' => 'This is product 3 description.'
        ],
        [
            'id' => 4,
            'name' => 'Product 4',
            'price' => 39.99,
            'description' => 'This is product 4 description.'
        ]
    ];


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json(["message" => "Product created sucessfully"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "message" => "Display product with ID:" . $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json ([
            "message" => "Product wit ID: " . $id ."updated sucessfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id ."deleted sucessfully"
        ]);
    }
}
