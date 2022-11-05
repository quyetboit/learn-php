<a href="?action=create&controller=<?=$controll?>">Thêm mới</a>
<table border="1" width="500">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Tuổi</th>
        <th>Tên lớp</th>
        <th>Action</th>
    </tr>

    <?php foreach ($sinh_vien as $sv) { ?>
        <tr>
            <td><?=$sv['id']?></td>
            <td><?=$sv['ten']?></td>
            <td><?=$sv['tuoi']?></td>
            <td><?=$sv['ten_lop']?></td>
            <td>
                <a href="?action=edit&ma=<?=$sv['id']?>&controller=<?=$controll?>">Sửa</a>
                <span> | </span>
                <a href="?action=delete&ma=<?=$sv['id']?>&controller=<?=$controll?>">Xoá</a>
            </td>
        </tr>
    <?php } ?>
</table>