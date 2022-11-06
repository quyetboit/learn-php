<form action="?action=update" method="post">
    <input type="hidden" name="id" value="<?=$lop->get_ma()?>">
    <div>
        <label for="name">Tên</label>
        <input type="text" name="name" value="<?=$lop->get_ten()?>">
    </div>
    <input type="submit" value="Cập nhật">
</form>