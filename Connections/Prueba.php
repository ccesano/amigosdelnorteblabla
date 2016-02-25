<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Prueba = "deportec.com.ar";
$database_Prueba = "deportec_pagina";
$username_Prueba = "deportec_pagina";
$password_Prueba = "9559fnPgYl";
$Prueba = mysql_pconnect($hostname_Prueba, $username_Prueba, $password_Prueba) or trigger_error(mysql_error(),E_USER_ERROR); 
?>