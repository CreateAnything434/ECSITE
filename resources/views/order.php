<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="/assets/css/main.css" />
<meta charset="utf-8" />
<h2>注文手続きフォーム</h2>
<form action="/order" method="POST">
    <?=csrf_field()?>
    名前：<input type="text" name="name" value="<?=$inputs["name"]??''?>">
    住所：<input type="text" name="address" value="<?=$inputs["name"]??''?>">
    電話番号：<input type="text" value="" name="tel">
    Email：<input type="text" value="" name="email">
    <input type="submit" value="注文">
    
</form>
