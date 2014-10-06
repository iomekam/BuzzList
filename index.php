<?php

$connectionInfo = array(\"UID\" => \"buzzDB@hqwkbgz8vt\", \"pwd\" => \"{your_password_here}\", \"Database\" => \"buzzDB\", \"LoginTimeout\" => 30, \"Encrypt\" => 1)";
$serverName = "tcp:hqwkbgz8vt.database.windows.net,1433\"";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>