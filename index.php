﻿<html>
<head><meta charset="utf-8"/></head>
<body>
<?php
echo 'リダイレクト';
if ($_REQUEST) {
    foreach ($_REQUEST as $aRow) {
        echo '<br>';
        var_dump($aRow);
    }
}

?>
<a href="./Web Push Notification Journey Builder Custom Activity _ Demo Center.htm">Demo</a>
</body>
</html>
