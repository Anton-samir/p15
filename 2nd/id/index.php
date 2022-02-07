<?php

// super globals variables
// $x = 5;
// echo $x;

// $_POST, $_GET, $_REQUEST;
// print_r($_POST); // associative array
#app

// aya
// Aya Saaed , 11111 , 011111 , Cairo Egypt , Female
// ahmed
// Ahmed Elsayed , 22222 , 022222 , Alex Egypt , Male
// jhon
// Jhon Yossef , 33333 , 033333 , Cairo Egypt , Male

###################################################
// design
// revieve Id From User
// handle message
// $message = "";
if ($_POST) { // if request is post
    $color = "success";
    switch ($_POST['id']) {
        case '11111':
            $message = "Name : Aya Saaed <br> Id : 11111 <br> Phone : 011111 <br> Address : Cairo Egypt <br> Gender : Female";
            break;
        case '22222':
            $name = "Ahmed Elsayed";
            $id = 22222;
            $phone = '022222';
            $address = "Alex Egypt";
            $gender = "Male";
            $message = "Name : $name <br> Id : $id <br> Phone : $phone <br> Address : $address <br> Gender : $gender";
            break;
        case '33333':
            $name = "Jhon Yosseff";
            $id = 33333;
            $phone = '033333';
            $address = "Cairo Egypt";
            $gender = "Male";
            $message = "Name : $name <br> Id : $id <br> Phone : $phone <br> Address : $address <br> Gender : $gender";
            break;
        default:
            $message = "Person Not Found";
            $color = "danger";
            break;
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="contianer">
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="text-center text-danger">
                    Enter Your ID
                </h1>
            </div>
            <div class="col-4 offset-4">
                <form method="post">
                    <div class="form-group">
                        <input type="number" name="id" id="id" class="form-control" placeholder="Please Enter Your Id" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark rounded"> My Data </button>
                    </div>
                </form>
                <?php 
                if(isset($message)){
                    echo "<div class='alert alert-$color'> $message </div>";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>