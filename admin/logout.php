<?php
session_start();
session_destroy();
header("Location: /llama-site/admin/login.php");
exit;
