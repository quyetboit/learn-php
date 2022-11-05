<form action="?action=store&controller=<?=$controll?>" method="post">
    <div>
        <label for="name">Tên sinh viên</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="name">Tuổi</label>
        <input type="text" name="age">
    </div>
    <div>
        <label for="name">Lớp</label>
        <select name="ma_lop" id="">
            <?php foreach($lops as $lop) { ?>
                <option value="<?=$lop['id']?>"><?=$lop['ten']?></option>
            <?php } ?>
        </select>
    </div>
    <input type="submit" value="Thêm">
</form>