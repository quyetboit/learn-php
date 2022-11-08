<table>
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Action</th>
    </tr>

    <?php foreach($lops as $lop):?>
        <tr>
            <td><?=$lop->get_ma()?></td>
            <td><?=$lop->get_ten()?></td>
            <td>
                <a href="">Sửa</a>
                <a href="">Xoá</a>
            </td>
        </tr>
    <?php endforeach?>
</table>