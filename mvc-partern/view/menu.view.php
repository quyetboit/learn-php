<?php
    while ($item = $listMenu->fetch_assoc()) {
        echo "<br>";
        echo "<a href='?action=article&ma=" . $item['ma'] . "'>" . $item['title'] . "</a>";
    }