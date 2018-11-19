<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="/assets/css/main.css" />
	<meta charset="utf-8" />
<p>Are you sure? 注文を押す前に買いたいもの再確認を！！</p>

<?php foreach($cartItems as $e_items): ?>

商品名：<?=$e_items->name?><br><br>
価格：<?=$e_items->price?><br><br>

<form action="/orders" method="post">
  <?= csrf_field()?>
  <input type="hidden" name="item_id" value= "<?=$e_items->id?>">
  <input type="submit" value="注文する">
</form>
<?php endforeach; ?>
