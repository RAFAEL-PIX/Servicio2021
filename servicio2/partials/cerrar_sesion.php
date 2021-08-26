<?php
session_start();
$_SESSION = [];
session_destroy();
//incrustacion en JavaScript//
?>
<script>window.location.replace('../login.html');</script>