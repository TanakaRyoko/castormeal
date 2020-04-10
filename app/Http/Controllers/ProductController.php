<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    
    public function add(){
        return view('product.create');
    }
    
    
        
        public function create(Request $request)
        {
            // dd($request);
            $this->validate($request,Product::$rules);
            $product=new Product;
            
            // dd($product);
            $form=$request->all();
            $product->fill($form)->save();
            
            
            
            return redirect('product/index');//リダイレクトはURLのみ指定できる
            }
            
            public function index()
        {
            $posts = Product::all();
            // \Debugbar::info($posts);
            // dd($posts);
            return view('product.index',['posts' => $posts]);
            
            
        }
        
         public function delete(Request $request)
    
        {    
            // dd($request);
            //該当するNews Modelを取得
            $products =Product::find($request->id);
            // dd($products);
            //削除する
            $products->delete();
            return redirect('product/index');
        }
            
}
