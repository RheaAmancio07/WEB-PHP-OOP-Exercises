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
    <title>Number 1</title>
</head>
<body class="p-3 mb-2 bg-dark text-white">
    <div class = "container border border-primary w-50 mt-5">
        <p>1. &nbsp;&nbsp;&nbsp;Calculate the difference between two dates using PHP OOP approach. <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Sample Dates : 1981-11-03, 2013-09-04 <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Expected Result : Difference : 31 years, 10 months, 1 days <br></p>
        <form action="" method="POST">
            <div class="form-group row">
                <label for="startDate" class="col-sm-2 col-form-label">Start Date:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="startDate">
                </div>
            </div>
            <div class="form-group row">
                <label for="endDate" class="col-sm-2 col-form-label">End Date:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="endDate">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Difference</button>
                </div>
                <div>
                
                </div>
            </div>
        </form>
       
        <!-- <div class="container border border-primary" id="answer"></div> -->
        <?php
            // $sdate = new DateTime("1981-11-03");
            // $edate = new DateTime("2013-09-04");
            // $interval = $sdate->diff($edate);
            // echo "<div class='container border border-primary text-center mb-3' id='answer'> Difference : $interval->y years, $interval->m months, $interval->d days</div>";

            class Date{
                public $sdate;
                public $edate;

                public function __construct($sdate, $edate){
                    $this->sdate = $sdate;
                    $this->edate = $edate;
                }

                public function getStartDate(){
                    return $this->sdate;
                } 
                
                public function getEndDate(){
                    return $this->edate;
                }
                public function get_Minus(){

                    $interval = (new DateTime($this->sdate))->diff (new DateTime($this->edate));
                    return "Difference : $interval->y years, $interval->m months, $interval->d days";
                }
                

            }

            $rhea = new Date("1981-11-03","2013-09-04");
            echo $rhea->get_Minus();

        ?> 
    </div>
</body>
</html>
