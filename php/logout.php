<?php
session_start();
unset($_SESSION["USER_ID"]);
unset($_SESSION["USER_NAME"]);
echo '<script type="text/javascript">
window.onload = function () {
    window.location.href = "../Html/index.php";
};
</script>';
die();
?>