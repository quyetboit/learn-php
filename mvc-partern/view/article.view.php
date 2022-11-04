<?php
    $row = $result->fetch_assoc();
    echo "<h1>Đây là nội dung của bài viết: " . $row['title'] . "</h1>";
    echo "<img style='height: 40px; width: auto' src='" . $row['image'] . "'>";
    echo "<p>" . $row['body'] . "</p>";

    echo "<br>";
    echo "<a href='?action='>Về trang chủ</a>";