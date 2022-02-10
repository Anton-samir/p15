
<?php 
if(!empty($_SESSION['user'])){
  // authenticated user
  header('location:home.php');die;
}