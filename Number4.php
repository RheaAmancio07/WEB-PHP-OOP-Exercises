<?php
    include_once('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Number 4</title>
</head>
<body class="p-3 mb-2 bg-dark text-white">
<div class = "container border border-primary mt-5" style="width:55%;">
        <p>3. &nbsp;&nbsp;&nbsp;Write a class that checks a passed form, and verifies if the form contains a field for name, address, age, and contact number. Once verified, display the said form with the input values in the page.<br></p>
        <form validateMe="number4.php" method="POST">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" placeholder="enter your name ..."required>
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" placeholder="enter your addresss ..."required>
                </div>
            </div>
            <div class="form-group row">
                <label for="age" class="col-sm-2 col-form-label">Age:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="age" placeholder="enter your age ..."required>
                </div>
            </div>
            <div class="form-group row">
                <label for="mobileno" class="col-sm-2 col-form-label">MobileNumber:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mobileno" placeholder="enter your phone number ..."required>
                </div>
            </div>           
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary w-50" style="margin-left:40%;">Verify</button>
                </div>
            <div class="container border border-danger w-75 mt-3" style="margin-left:12%;">
                <h3>Input Values with Verifications:</h3>
                <div class="container mb-3">
                    <?php
                        class Validate{
                            public function __construct(){
                                $this->name = isset($_POST['name']) ? $_POST['name'] : null;
                                $this->address = isset($_POST['address']) ? $_POST['address'] : null;
                                $this->number = isset($_POST['mobileno']) ? $_POST['mobileno'] : null;
                                $this->age = isset($_POST['age']) ? $_POST['age'] : null;
                            }

                            public function validateMe(){
                                if (!preg_match("/^[a-zA-z]*$/", $this->name)) {
                                    echo $this->name . " is a valid name;<br>";
                                } else if($this->name=="") {
                                    echo $this->name . " Enter name;<br>";
                                }else{
                                    echo $this->name . " Only alphabets and whitespace are allowed;<br>";
                                }

                                if($this->address=="") {
                                    echo $this->address . " Enter Address;<br>";
                                }elseif(!preg_match('/^(?:\\d+ [a-zA-Z ]+, ){2}[a-zA-Z ]+$/', $this->address)){
                                    echo $this->address ." is a valid address;<br>";
                                }else{
                                    echo $this->address ." is not a valid Address;<br>";
                                }
                                
                                if ($this->age >= 18) {
                                    echo $this->age ." is a legal age;<br>";
                                }else if($this->age=="") {
                                    echo $this->age . " Enter Age;<br>";
                                } else {
                                    echo $this->age ." is not a legal age;<br>";
                                }

                                if($this->number=="") {
                                    echo $this->number . " Enter Phone Number;<br>";
                                }elseif (strlen($this->number) < 11 || strlen($this->number) > 11    ) {
                                    $ErrMsg = $this->number ." this must be 11 digits;";
                                    echo $ErrMsg;
                                }else {
                                    echo $this->number ." is valid phone number;";
                                }
                            }
                        }
                        $validate = new Validate();
                        $validate->validateMe();
                    ?>
                </div>
            </div>
        </form>
</body>
</html>
