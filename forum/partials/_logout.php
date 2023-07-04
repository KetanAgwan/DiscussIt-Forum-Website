<?php
session_start();
echo "you were logged out";
session_destroy();
header("Location:/forum");
?>
 