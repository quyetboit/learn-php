<h1>Data table</h1>
<a href="?action=create">Add new</a>
<table border="1" style="width: 500px;" >
    <thead>
        <tr>
            <td>name</td>
            <td>age</td>
            <td>action</td>
        </tr>
    </thead>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?=$row['fullname']?></td>
            <td><?=$row['age']?></td>
            <td>
                <a href="?action=delete&id=<?=$row['id']?>">Delete</a>
                <span> | </span>
                <a href="?action=update&id=<?=$row['id']?>">Update</a>
            </td>
        </tr>
    <?php } ?>
</table>
