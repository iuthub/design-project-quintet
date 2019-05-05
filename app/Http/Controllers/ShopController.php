<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pagination=16;
        //$products = Product::inRandomOrder()->take(50)->paginate(16);

    if (request()->category) {
        if(request()->category=='Others')
        {
            $products = Product::where('in_category', 'Socks')->orWhere('in_category', 'Scarfs')->orWhere('in_category', 'Hats')->orWhere('in_category', 'Balls');
        }
        else
        {
            if(request()->category=='T-Shirts&Tops')
                $products = Product::where('in_category', 'Polo')->orWhere('in_category', 'T-Shirts&Tops');
            else
                $products = Product::where('in_category', request()->category);
        }
        
        
       // $categoryName = optional($categories->where('slug', request()->category)->first())->name;
    } else {
        $products = Product::inRandomOrder()->take(50);
       // $categoryName = 'Featured';
    }

          if (request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        } else {
            $products = $products->paginate($pagination);
        }

        return view('shop')->with([
            'products' => $products,
            //'categories' => $categories,
            //'categoryName' => $categoryName,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product= Product::where('slug',$slug)->firstOrFail();
         return view('product')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
