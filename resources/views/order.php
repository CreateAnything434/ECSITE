<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="/assets/css/main.css" />
<meta charset="utf-8" />

<div class="box">
<h2>注文手続きフォーム</h2>



<form action="/order" method="post">
    <?=csrf_field()?>
   <div class="box">
    名前：<input type="text" name="name" value="<?=$inputs["name"]??''?>" style="width:220px;height:50px">
    住所：<input type="text" name="address" value="<?=$inputs["name"]??''?>" style="width:220px;height:50px">
    電話番号：<input type="text" value="" name="tel" style="width:200px;height:50px">
    Email：<input type="text" value="" name="email" style="width:200px;height:50px">
    </div>
    <br>
    <br>
    <input type="submit"  value="注文" style="width:200px;height:50px">


</form>
