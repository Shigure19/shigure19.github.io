<?php
if ($_GET['place'] == "xinjiang") {
    echo "<video controls>";
    echo "<source src='yxq.mp4' type='video/mp4'>";
    echo "</video>";
} else if ($_GET['place'] == "gansu") {
    echo "<script>window.location.href='gjl.html'</script>";
} else {
    for ($i = 1; $i <= 3; $i++) {
        $filename = "./images/" . $_GET['place'] . $i . ".jpg";
        if (file_exists($filename)) {
            echo "<img src='" . $filename . "' style='width: auto;height: auto;max-width: 100%;max-height: 100%;'>";
        }
    }
}
