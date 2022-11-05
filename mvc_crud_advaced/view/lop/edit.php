<form action="?action=update&controller=<?=$controll?>" method="post">
    <input type="hidden" name="id" value="<?=$lop['id']?>">
    <div>
        <label for="name">Tên lớp</label>
        <input type="text" name="name" value="<?=$lop['ten']?>">
    </div>
    <input type="submit" value="Cập nhật">
</form>