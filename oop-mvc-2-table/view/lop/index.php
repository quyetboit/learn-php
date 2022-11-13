<a href="?controller=<?=$_GET['controller']?>&action=create">Thêm mới</a>
<table style="width: 500px" border="1">
    <tr>
        <th>Id</th>
        <td>Tên</td>
        <td>Action</td>
    </tr>
    <?php foreach ($lops as $lop): ?>
        <tr>
            <td><?=$lop->get_id()?></td>
            <td><?=$lop->get_ten()?></td>
            <td>
                <a href="?controller=<?=$_GET['controller']?>&action=edit&ma=<?=$lop->get_id()?>">Sửa</a>
                <span> | </span>
                <a href="?controller=<?=$_GET['controller']?>&action=delete&ma=<?=$lop->get_id()?>">Xoá</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>