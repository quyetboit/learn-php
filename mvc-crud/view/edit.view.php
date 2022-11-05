<?php 
    if ($result->num_rows === 0) {
        die ('No data');
    }    
    $row = $result->fetch_assoc();
?>
<form action="?action=update" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="<?=$row['fullname']?>">
    </div>

    <div>
        <label for="age">Age</label>
        <input type="number" name="age" value="<?=$row['age']?>">
    </div>

    <input type="submit" value="Update">
</form>