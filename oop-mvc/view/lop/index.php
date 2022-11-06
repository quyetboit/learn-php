<a href="?action=create">Thêm mới</a>
<table border="1" style="width: 500px">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Hành đồngk</th>
    </tr>
    <?php foreach($result as $row): ?>
        <tr>
            <td><?=$row->get_ma()?></td>
            <td><?=$row->get_ten()?></td>
            <td>
                <a href="?action=edit&ma=<?=$row->get_ma()?>">Sửa</a>
                <span> | </span>
                <a href="?action=delete&ma=<?=$row->get_ma()?>">Xoá</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>