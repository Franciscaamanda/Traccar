<?php

use app\Http\Controllers\DevicesController;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Devices</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 p-10">
    <div id="devices">
        <?php echo DevicesController::getAllDevices() ?>
    </div>
</body>
</html>