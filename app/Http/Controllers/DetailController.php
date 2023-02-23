<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id)
    {
        $product = Product::with('galleries', 'user')->where('slug', $id)->firstOrFail();
        $datas = Product::paginate($request->input('limit', 12));

        return view('pages.detail',[
            'product' => $product,
            'datas' => $datas
            
        ]);
    }

    public function add(Request $request, $id){
        $data = [
            'products_id' => $id,
            'users_id' => Auth::user()->id
        ];

        Cart::create($data);

        return redirect()->route('cart');

    }
}