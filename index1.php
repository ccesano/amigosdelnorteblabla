<?php require_once('Connections/Prueba.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_Prueba, $Prueba);
$query_Recordset1 = "SELECT * FROM AAADNEquipos, AAADNNoticias";
$Recordset1 = mysql_query($query_Recordset1, $Prueba) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html>
<!--
    Copyright (c) 2012-2014 Adobe Systems Incorporated. All rights reserved.

    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
    <head>
        
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">    
    <link href="file:///D|/jquery-mobile/mouse.min.css" rel="stylesheet" type="text/css">
    <link href="file:///D|/jquery-mobile/jquery.mobile.structure-1.3.0.min.css" rel="stylesheet" type="text/css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    
    </head>
    
    
<body>
<div data-role="page" id="Inicio">
    
     <div data-role="panel" id="myPanel"> 
    <h2>Panel Header</h2>
    	<li id="active"><a href="index.html"><i class="icon-home"></i> Inicio</a></li>
        <li><a href="premierfixture.html"><i class="icon-lightbulb"></i> Premier League</a></li>
        <li><a href="mayorfixture.html"><i class="icon-star"></i> Mayor League</a></li>
        <li><a href="seniorfixture.html"><i class="icon-font"></i> Senior League</a></li>
        <li><a href="newfixture.html"><i class="icon-envelope"></i> New League</a></li>
  </div> 

  <div data-role="header">
  
    <a href="#myPanel" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">    Open Panel</a>
    <h1>Amigos Del Norte</h1>
  </div>

  <div data-role="main" class="ui-content">
  
    Noticias
    
  </div>


  
</div>
<?php echo $row_Recordset1['Noticia']; ?> 
   
        
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
