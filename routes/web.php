<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/index",function(){
    $index = DB::select("SELECT * FROM e_items");
    return view("index",[
      "index" => $e_items
    ]);
});

Route::get("/index/{id}",function($id){
    $index = DB::select("SELECT * FROM e_items where id = ?",[$id]);
    if(count($index) > 0){
        return view("item_detail",[
          "index" => $e_items[0]
        ]);
    }else{
        return abort(404);
    }
});

Route::get("/cart/list",function(){
    return view("cart_list");
});

Route::get("/cart/list",function(){
    $cartItems = session()->get("CART_ITEMS",[]);
    return view("cart_list", [
        "cartItems" => $cartItems
    ]);
});

Route::get("/cart/list",function(){
    // DBからデータを１つ取り出す。
    $index = DB::select("SELECT * FROM e_items where id = 1");
    // セッションからカートの情報を取り出す
    $cartItems = session()->get("CART_ITEMS",[]);
    // セッションにデータを追加して格納
    $cartItems[] = $index[0];
    session()->put("CART_ITEMS",$cartItems);

    return view("cart_list", [
        "cartItems" => $cartItems
    ]);
});

Route::post("/cart/add",function(){
    // フォームから IDを読み込みDBへ問い合わせる
    $id = request()->get("item_id");
    $index = DB::select("SELECT * FROM e_items where id = ?",[$id]);
    if(count($index) > 0){
        // セッションにデータを追加して格納
        $cartItems = session()->get("CART_ITEMS",[]);
        $cartItems[] = $e_items[0];
        session()->put("CART_ITEMS",$cartItems);
        return redirect("/cart/list");
    }else{
        return abort(404);
    }
});

Route::get("/cart/list",function(){
    // セッションからカートの情報を取り出す
    $cartItems = session()->get("CART_ITEMS",[]);

    return view("cart_list", [
        "cartItems" => $cartItems
    ]);
});

Route::get("/index",function(){
    $index = DB::select("SELECT * FROM e_items");
    return view("index",[
      "index" => $index
    ]);
});

Route::get("/orders",function(){
    return view("orders");
});
Route::get("/orders/thanks",function(){
    return view("thanks");
});

Route::post("/orders",function(){

    // ここで カートの中身をDBに保存する
    DB::insert("INSERT into orders (name,address,tel,email,orders) VALUES (?,?,?,?,?)",[
        request()->get("name"),
        request()->get("address"),
        request()->get("tel"),
        request()->get("email"),
        json_encode(session()->get("CART_ITEMS"))
    ]);

    session()->forget("CART_ITEMS"); // ここでカートを空に

    return redirect("/orders/thanks");
});


Route::post("/orders",function(){

    // ここで カートの中身をDBに保存する

    session()->forget("CART_ITEMS"); // ここでカートを空に

    return redirect("/orders/thanks");
});

Route::get("index",function(){
    $index = DB::select("SELECT * FROM e_items");
    return view("index",[
      "index" => $index
    ]);
  });
