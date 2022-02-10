<?php
$title = "Login";
include_once "layouts/header.php";
include_once "middlewares/guest.php";
include_once "layouts/nav.php";
$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => 'm',
        'image' => '1.jpg',
        'email' => 'ahmed@gmail.com',
        'password' => 123456
    ],
    (object)[
        'id' => 1,
        'name' => 'moahmed',
        "gender" => 'm',
        'image' => '2.jpg',
        'email' => 'mohamed@gmail.com',
        'password' => 123456
    ],
    (object)[
        'id' => 1,
        'name' => 'esraa',
        "gender" => 'f',
        'image' => '3.jpg',
        'email' => 'esraa@gmail.com',
        'password' => 123456
    ],
];

//



// $_POST; // => associative array , _UPPERCASE , 
if($_POST){
  // validation
  $errors = [];
  if(empty($_POST['email'])){
    $errors['email-required'] =  "<div class='alert alert-danger'> Email Is Required </div>";
  }

  if(empty($_POST['password'])){
    $errors['password-required'] =  "<div class='alert alert-danger'> Password Is Required </div>";
  }

  if(empty($errors)){
    // search on users
    foreach($users AS $user){
      if($user->email == $_POST['email'] && $user->password == $_POST['password'] ){
        // go to home
        $_SESSION['user'] = $user;
        header("location:home.php");die;
        // output buffering
      }
    }
    $errors['wrong-data'] = "<div class='alert alert-danger'>  Incorrect Email Or Password </div>";
  }
  
}
?>

<div class="container">
  <div class="row">
    <div class="col-12 text-success text-center h1 mt-5">
      <?= $title ?>
    </div>
    <div class="offset-4 col-4 mt-5">
      <form  method="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" class="form-control" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" placeholder="" aria-describedby="helpId" >
          <?php 
              if(!empty($errors['email-required'])){
                echo $errors['email-required'];
              }
              if(!empty($errors['wrong-data'])){
                echo $errors['wrong-data'];
              }
          ?>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
          <?php 
              if(!empty($errors['password-required'])){
                echo $errors['password-required'];
              }
          ?>
        </div>
        <div class="form-group">
          <button class="btn btn-outline-success rounded"> <?= $title ?> </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
include_once "layouts/footer.php";
include_once "layouts/scripts.php";
?>