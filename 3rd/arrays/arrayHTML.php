<?php
$genders = ['m' => 'male', 'f' => 'female', 'i' => 'i don\'t prefer to say'];
$select2 = "<select class='from-control'>
    <option value=''>{$genders['m']}</option>
    <option value=''>" . $genders['f'] . "</option>
    <option value=''>" . $genders['i'] . "</option>
</select>";
$select =  "<select class='from-control'>";
$select .= "<option value=''>{$genders['m']}</option>";
$select .= "<option value=''>{$genders['f']}</option>";
$select .= "<option value=''>{$genders['i']}</option>";
$select .= "</select>";
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
    <div class="container">
        <div class="row">
            <div class="col-4">
                <select name="gender" id="" class="fomr-control">
                    <option value="m"><?php echo $genders['m']; ?></option>
                    <option value="f"><?= $genders['f'] ?></option>
                    <option value="i"><?= $genders['i'] ?></option>
                </select>
            </div>
            <div class="col-4">
                <?= $select ?>
            </div>
            <div class="col-4">
                <?= $select2 ?>
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