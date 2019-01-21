<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="/assets/css/main.css" />
<meta charset="utf-8" />

<div class="box">
<h2>注文手続きフォーム</h2>



<form action="/order" method="post">
  <?=csrf_field()?>
   <div class="box">
    名前：<br><center><input type="text" name="name" placeholder="例)OICはな子" value="<?=$inputs["name"]??''?>" style="width:220px;height:50px"></center>
    住所：<br><center><input type="text" name="address"   placeholder="例)OIC市OIC町1-23-4" value="<?=$inputs["name"]??''?>" style="width:220px;height:50px"></center>
    電話番号：<br><center><input type="text" value=""  name="tel" placeholder="例)0004741555" 　style="width:200px;height:50px"></center>
    Email：<br><center><input type="text" value="" name="email" placeholder="例)hanako@oic.jp" style="width:200px;height:50px"></center>
    </div>
    <br>
    <br>
    <input type="submit"  value="注文" style="width:200px;height:50px">


</form>
