<form action="/orders" methods="POST">
    <?=csrf?_fields()?>
    名前：<input type="text" value="" name="name">
    住所：<input type="text" value="" name="address">
    電話番号：<input type="text" value="" name="tel">
    Email：<input type="text" value="" name="email">
    <input type="submit" value="注文">
</form>
