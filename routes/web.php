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
      "e_items" => $index
    ]);
});

Route::get("/order/thanks",function(){
    return view("thanks");
});

Route::post("/index",function(){
    $index = DB::select("SELECT * FROM e_items");
    return view("index",[
      "e_items" => $index
    ]);
});

Route::get("/index/{id}",function($id){
    $index = DB::select("SELECT * FROM e_items where id = ?",[$id]);
    if(count($index) > 0){
        return view("item_detail",[
          "e_items" => $index[0]
        ]);
    }else{
        return abort(404);
    }
});
Route::post("/index/{id}",function($id){
    $index = DB::select("SELECT * FROM e_items where id = ?",[$id]);
    if(count($index) > 0){
        return view("item_detail",[
          "e_items" => $index[0]
        ]);
    }else{
        return abort(404);
    }
});

Route::post("/cart/list",function(){
    // DBからデータを１つ取り出す。
    $index = DB::select("SELECT * FROM e_items where id = 1");
    // セッションからカートの情報を取り出す
    $cartItems = session()->get("CART_ITEMS",[]);
    // セッションにデータを追加して格納
    $cartItems[] = $index[0];
    session()->put("CART_ITEMS",$cartItems);

    return view("cart_list", [
        "e_items" => $cartItems
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
        "e_items" => $cartItems
    ]);
});
Route::get("/cart/clear",function(){
    // DBからデータを１つ取り出す。
    $index = DB::select("SELECT * FROM e_items where id = 1");
    // セッションからカートの情報を取り出す
    $cartItems = session()->get("CART_ITEMS",[]);
    // セッションにデータを追加して格納
    $cartItems[] = $index[0];
    session()->forget("CART_ITEMS",$cartItems);

    return view("cart_list", [
        "e_items" => $cartItems
    ]);
});
Route::post("/cart/clear",function(){
    // DBからデータを１つ取り出す。
    $index = DB::select("SELECT * FROM e_items where id = 1");
    // セッションからカートの情報を取り出す
    $cartItems = session()->get("CART_ITEMS",[]);
    // セッションにデータを追加して格納
    $cartItems[] = $index[0];
    session()->forget("CART_ITEMS",$cartItems);

    return view("cart_list", [
        "e_items" => $cartItems
    ]);
});
Route::post("/cart/add",function(){
    // フォームから IDを読み込みDBへ問い合わせる
    $id = request()->get("item_id");
    $index = DB::select("SELECT * FROM e_items where id = ?",[$id]);
    if(count($index) > 0){
        // セッションにデータを追加して格納
        $cartItems = session()->get("CART_ITEMS",[]);
        $cartItems[] = $index[0];
        session()->put("CART_ITEMS",$cartItems);
        return redirect("/cart/list");
    }else{
        return abort(404);
    }
});
Route::post("/order",function(){

    // ここで カートの中身をDBに保存する

    session()->forget("CART_ITEMS"); // ここでカートを空に

    return redirect("/order/thanks");
});
Route::post("/order",function(){

    if(request()->get("name") == ""){
        return redirect("/order");
    }
    if(request()->get("address") == ""){
        return redirect("/order");
    }

    // ここで カートの中身をDBに保存する
    DB::insert("INSERT into orders (name,address,tel,email,orders) VALUES (?,?,?,?,?)",[
        request()->get("name"),
        request()->get("address"),
        request()->get("tel"),
        request()->get("email"),
        json_encode(session()->get("CART_ITEMS"))
    ]);

    session()->forget("CART_ITEMS"); // ここでカートを空に

    return redirect("/order/thanks");
});

  Route::get("/order",function(){

      // ここで カートの中身をDBに保存する
      DB::insert("INSERT into orders (name,address,tel,email,orders) VALUES (?,?,?,?,?)",[
          request()->get("name"),
          request()->get("address"),
          request()->get("tel"),
          request()->get("email"),
          json_encode(session()->get("CART_ITEMS"))
      ]);

      session()->forget("CART_ITEMS"); // ここでカートを空に

      return redirect("/order/thanks");
  });

  Route::post("/order",function(){

      // ここで カートの中身をDBに保存する
      DB::insert("INSERT into orders (name,address,tel,email,orders) VALUES (?,?,?,?,?)",[
          request()->get("name"),
          request()->get("address"),
          request()->get("tel"),
          request()->get("email"),
          json_encode(session()->get("CART_ITEMS"))
      ]);

      session()->forget("CART_ITEMS"); // ここでカートを空に

      return redirect("/order/thanks");
  });
  Route::get("/order",function(){

    $error = false; //フォームにエラーが有るかどうか
    $errorMessage = []; // エラーメッセージ

    if(request()->get("name") == ""){
        $error = true;
        $errorMessage[] = "名前を入力してください";
    }
    if(request()->get("address") == ""){
        $error = true;
        $errorMessage[] = "住所を入力してください";
    }

    if($error){
        session()->put("FORM_MESSAGES",$errorMessage);
        session()->put("OLD_FORM",request()->all());
        return redirect("/order");
    }

      session()->forget("CART_ITEMS"); // ここでカートを空に

    return redirect("/order/thanks");
});


Route::get("/order",function(){
  $errors = session()->get("ERRRO_MESSAGES",[]);
  $inputs = session()->get("OLD_FORM",[]);
  session()->get("ERROR_MESSAGES");
  session()->get("OLD_FORM");
  return view("order",[
      "inputs" => $inputs,
      "errors" => $errors
  ]);
});
