<?php
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    // Сохраняем статус в файл (или можно в БД MySQL)
    file_put_contents('log.txt', "Device status: " . $status . " at " . date("Y-m-d H:i:s") . "\n");
    echo "OK"; // Ответ для ESP8266
} else {
    echo "No data";
}
?>