<?php
//destruindo a sessão
session_start();
session_unset();
session_destroy();

header("Location:loginPagina.php");
die();