<h1>Đây là menu nha</h1>
<?php
    while ($item = $listMenu->fetch_assoc()) {
        echo "<br>";
        echo "<a href='?ma=" . $item['ma'] . "'>" . $item['title'] . "</a>";
    }