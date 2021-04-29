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
    <title>Number 2</title>
</head>
<body class="p-3 mb-2 bg-dark text-white">
<div class = "container border border-primary w-75 mt-5">
        <p>2. &nbsp;&nbsp;&nbsp;Write a class that accepts a user input and adds the said input as an option in the select (dropdown) element.<br></p>
        <form action="" method="POST">
            <div class="form-group row">
                <label for="userInput" class="col-sm-2 col-form-label">Enter Colors:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="userInput">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" name="submit" class="btn btn-primary w-75" style="margin-left:166px;">Add</button>
                </div>
                <div >
                    <?php
                        session_start();

                        class userInput{
                            public $userInput;

                            function __construct($userInput){
                                $this->userInput = $userInput;
                            }

                            function addInput(){
                                if(!isset($_SESSION['option'])){
                                    $_SESSION['option'] = [];
                                }
                                array_push($_SESSION['option'],$this->userInput);
                                echo '<select class="btn btn-primary w-100" name="dropdown">';
                                foreach ($_SESSION['option'] as $value) {
                                    echo '<option value="'.$value.'">"'.$value.'"</option>' ;
                                }
                                echo '</select>';
                            }
                        }

                        if(isset($_POST['submit'])){
                            $userInput = $_POST['userInput'];
                            $input = new userInput($userInput);
                            $input->addInput();
                        }
                    ?>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>