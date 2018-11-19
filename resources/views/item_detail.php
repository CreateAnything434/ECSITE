
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="/assets/css/main.css" />
	<meta charset="utf-8" />

<?php foreach($e_items as $index): ?>

商品名：<?=$e_items->name?><br><br>
価格：<?=$e_items->price?><br><br>


  <?= csrf_field()?>
  <form action="/cart/add" method="post">
  <input type="hidden" name="item_id" value="<?=$e_items->id?>">
  <input type="submit" value="カートに追加">
</form>

<?php endforeach; ?>
