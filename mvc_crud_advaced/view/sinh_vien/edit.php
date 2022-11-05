<form action="?action=update&controller=<?=$controll?>" method="post">
    <input type="hidden" name="id" value="<?=$sinh_vien['id']?>">
    <div>
        <label for="name">Tên sinh viên</label>
        <input type="text" name="name" value="<?=$sinh_vien['ten']?>">
    </div>
    <div>
        <label for="name">Tuổi</label>
        <input type="text" name="age" value="<?=$sinh_vien['tuoi']?>">
    </div>
    <div>
        <label for="name">Lớp</label>
        <select name="ma_lop" value="<?=$sinh_vien['id_lop']?>">
            <?php foreach($lops as $lop) { ?>
                <option <?=($lop['id'] === $sinh_vien['id_lop']) ? 'selected' : ''?> value="<?=$lop['id']?>"><?=$lop['ten']?></option>
            <?php } ?>
        </select>
    </div>
    <input type="submit" value="Cập nhật">
</form>