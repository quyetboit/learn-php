<a href="?action=create">Add new</a>

<table border="1" style="width: 500px; margin: 30px auto">
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?=$row['fullname']?></td>
            <td><?=$row['age']?></td>
            <td>
                <a href="?action=delete&id=<?=$row['id']?>">Delete</a>
                <span> | </span>
                <a href="?action=edit&id=<?=$row['id']?>">Edit</a>
            </td>
        </tr>
    <?php } ?>
</table>