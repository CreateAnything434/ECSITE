<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="/assets/css/main.css" />
<meta charset="utf-8" />
<p><h2>Are you sure?</h2><br><br> 注文を押す前に買いたいもの再確認を！！</p>

<div class="box">
<?php foreach($e_items as $index): ?>

商品名：<?=$index->name?><br><br>
価格：<?=$index->price?><br><br>
<?php endforeach; ?>


<form action="/order" method="post">
  <?= csrf_field()?>
  <input type="hidden" name="item_id" value= "<?=$index->id?>">
  <input type="submit" value="注文"  style="width:120px;height:50px">
</form>
<form action="/cart/clear" method="post">
  <?= csrf_field()?>
  <input type="hidden" name="item_id" value= "<?=$index->id?>">
  <input type="submit" value="カートを空にする"  style="width:200px;height:50px">
</form>
<form action="/index" method="post">
  <?= csrf_field()?>
  <input type="hidden" name="item_id" value= "<?=$index->id?>">
  <input type="submit" value="注文を続ける"  style="width:180px;height:50px">
</form>
</div>
