<a href="?action=create">Thêm mới</a>
<table border="1" style="width: 500px">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Action</th>
    </tr>

    <?php foreach($lops as $lop):?>
        <tr>
            <td><?=$lop->get_id()?></td>
            <td><?=$lop->get_ten()?></td>
            <td>
                <a href="?action=edit&ma=<?=$lop->get_id()?>">Sửa</a>
                <a href="?action=delete&ma=<?=$lop->get_id()?>">Xoá</a>
            </td>
        </tr>
    <?php endforeach?>
</table>