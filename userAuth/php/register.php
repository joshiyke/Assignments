<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    registerUser($username, $email, $password);


}

function registerUser($username, $email, $password){
    //save data into the file
    $userstore = '../storage/users.csv';    
    
     $userdata = [$username, $email, $password];

$opener = fopen($userstore, "a");//open file in read mode    
fputcsv($opener, $userdata);//write to file)  
fclose($opener);//close file
    
    // echo "OKAY";
    echo "<strong>CONGRATULATIONS!!!</strong>\nYou have successfully registered";
}




