<table style="width: 500px" border="1">
    <tr>
        <th>Id</th>
        <td>Tên</td>
    </tr>
    <?php foreach ($lops as $lop): ?>
        <tr>
            <td><?=$lop->get_id()?></td>
            <td><?=$lop->get_ten()?></td>
        </tr>
    <?php endforeach ?>
</table>