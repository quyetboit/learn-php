<a href="?action=create&controller=<?=$controll?>">Thêm mới</a>
<table border="1" width="500">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Action</th>
    </tr>

    <?php foreach ($lops as $lop) { ?>
        <tr>
            <td><?=$lop['id']?></td>
            <td><?=$lop['ten']?></td>
            <td>
                <a href="?action=edit&ma=<?=$lop['id']?>&controller=<?=$controll?>">Sửa</a>
                <span> | </span>
                <a href="?action=delete&ma=<?=$lop['id']?>&controller=<?=$controll?>">Xoá</a>
            </td>
        </tr>
    <?php } ?>
</table>