<?php
session_start();

echo($_SESSION['total']=$_SESSION['total']+$_SESSION['amount']);
?>