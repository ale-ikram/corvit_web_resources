<?php

// Requirements data before connecting mySQL
// Database Server Address, User Name, User Password, Database Name
$serverAdd = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "corvit_akhuwat";

// Making conection with mySQL
$conn = new mysqli($serverAdd, $username, $password, $dbname);
// if the data is filled in field "name" then php will run below function otherwise it will return a message "Please fill the data first"
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $roll_num = $_POST['roll_num'];
    $phone_num = $_POST['phone_num'];
    $address = $_POST['address'];
    
    // writing SQL statment for update data
    // $sql = "UPDATE studentdata SET age = 22 WHERE id = '102032'"; //Query for update data
    $sqlIns = "INSERT INTO studentdata (name, email, age, gender, roll_num, phone_num, address) VALUES ('$name', '$email', '$age', '$gender', '$roll_num', '$phone_num', '$address')";
    
    
    if ($conn->query($sqlIns) ==TRUE){
        echo 'Update Successfully!';
    }else{
        echo 'Error:' .$sqlIns. '<br>' .$conn->error;    //Code explained in plain text -> 'Error:' Function error '<br>' type of mySQL error
    }
    
    echo nl2br("\nHello world");     //n12br("\n") is used to add line break in text using php 
}else{
    echo 'Please fill the data first';
}

// This function will create a new entry whenever user refresh the page
// if ($conn->query($sql) ==TRUE){
//     echo 'Update Successfully!';
// }else{
//     echo 'Operation not successful :(';
// }
?>

<!-- Html -->
<!-- Note: this sample form is copied from here:https://bbbootstrap.com/snippets/request-demo-form-validation-12274818 -->
<!doctype html>
<html lang="en">

<head>
  <title>Data Entry Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Linking Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Linking Google font -->
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&family=Poppins:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
    <!-- Linking local style sheet -->
    <link rel="stylesheet" href="style.css">
    <!-- <script src="source.js"></script> -->
</head>

<body>
    <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Data Entry Form</h3>
            <p class="white-text">Student Data Entry Form<br> Fill all the fields to avoid error.</p>
            <div class="card">
                <h5 class="text-center mb-4">Powering world-class companies</h5>
                <!-- We're using POST method for secure data transfer and upon clicking "Submit Button" action will return to this file "first.php" -->
                <!-- Form data must be wrap in class "form", here I'm using "form-card" -->
                <form class="form-card" method="POST" Action="first.php">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Student name<span class="text-danger"> *</span></label> 
                            <input type="text" id="" name="name" placeholder="Student Name"> 
                        <!-- <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div> -->
                        </div>
                    </div>
                    <div class="row justify-content-around text-left">
                        <div class="form-group col-sm-2 flex-column d-flex"> 
                            <label class="form-control-label px-3">Gender<span class="text-danger"> *</span></label> 
                            <input type="text" id="" name="gender" placeholder="Gender"> 
                        </div>
                        <div class="form-group col-sm-2 flex-column d-flex">
                            <label class="form-control-label px-3">Age<span class="text-danger"> *</span></label> 
                            <input type="number" id="" name="age" placeholder="123">
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                             <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label>
                             <input type="text" id="" name="email" placeholder="student@email.com">
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                             <label class="form-control-label px-3">Roll Number<span class="text-danger"> *</span></label>
                             <input type="text" id="" name="roll_num" placeholder="LHR-000"> 
                            </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label>
                            <input type="text" id="" name="phone_num" placeholder="9230000">
                         </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Address<span class="text-danger"> *</span></label>
                            <input type="text" id="" name="address" placeholder="Lahore, Pakistan"> 
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> 
                            <button type="submit" class="btn-block btn-primary">New Entry</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- Google fonts JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <!-- Bootstrap JavaScript Libraries -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>