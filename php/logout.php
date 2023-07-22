<?php
session_start();
unset($_SESSION["USER_ID"]);
unset($_SESSION["USER_NAME"]);
echo '<script type="text/javascript">
window.onload = function () {
    alert("successfull logout");
    window.location.href = "../Html/index.html";
};
</script>';
die();
?>