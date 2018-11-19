
<?php foreach($items as $e_items): ?>

<div>
    <?=$item->name?>
    <img src="<?=$item->img?>"/>
    <?php endforeach; ?>
</div>


<form action="/cart/add" method="post">
  <?= csrf_field()?>
  <input type="hidden" name="item_id" value= "<?=$item->id?>">
  <input type="submit" value="カートに追加">
</form>
