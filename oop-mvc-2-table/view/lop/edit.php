<form action="?controller=<?=$_GET['controller']?>&action=update" method="post">
    <input type="hidden" name="id" value="<?=$currentLop->get_id()?>">
    <div>
        <label for="ten">Tên</label>
        <input type="text" name="ten" value="<?=$currentLop->get_ten()?>">
    </div>
    <input type="submit" value="Cập nhật">
</form>