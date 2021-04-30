<?php
    include_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 3</title>
</head>
<body class="p-3 mb-2 bg-dark text-white">
    <div class = "container border border-primary w-50 mt-5">
        <p>3. &nbsp;&nbsp;&nbsp;Write a class that accepts a user input and checks if the user input is a valid email address.<br></p>
        <form action="" method="POST">
            <div class="form-group row">
                <label for="userInput" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="email" placeholder="email@gmail.com...">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" name="submit" class="btn btn-primary w-50" style="margin-left:40%;">Add</button>
                </div>
                <div >
                <?php
                    class Email{
                        public $email;

                        public function __construct(){
                            $this->email = isset($_POST['email']) ? $_POST['email'] : null;
                        }

                        public function validateEmail(){
                            if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                                echo '<script>alert("'.$this->email .' is a valid email")</script>';
                            }
                            else if($this->email==""){
                                echo "<script type='text/javascript'>alert('Please Enter an email');</script>";
                            } else {
                                echo '<script>alert("'.$this->email .' is invalid email")</script>';
                            }
                        }
                    }

                    $emailVal = new Email();
                    $emailVal->validateEmail();

                ?>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>