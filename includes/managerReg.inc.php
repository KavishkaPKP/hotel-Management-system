<?php
// add dbh file
require_once "./dbh.inc.php";

// add validation file
require_once"./managerValidations.php";

// if new manager clicks the reguster button
if(isset($_POST["btnMRegister"])){

    // get manager form input data
    $mName = $_POST["mName"];
    $mEmail = $_POST["mEmail"];
    $mPassword = $_POST["mPassword"];
    $mConfirmPassword = $_POST["mConfirmPassword"];

    // input validation
    
    if(inputsEmptyMRegister($mName, $mEmail, $mPassword, $mConfirmPassword)){
        header("location:../managerDetails.php?err=empty_inputs");
    }
    // else if(nameInvalide($mName)){
    //     header("location:../managerDetails.php?err=invalide_name");                        
    // }
    else if(emailInvalide($mEmail)){
        header("location:../managerDetails.php?err=invalide_email");                       
    }
    else if(passwordInvalide($mPassword)){
        header("location:../managerDetails.php?err=invalide_password");                       
    }
    else if(passNotMatch($mPassword, $mConfirmPassword)) {
        header("location:../managerDetails.php?err=defferent_password");                       
    }
    // else if(emailOrNameAvalable($conn, $mEmail, $mName)) {
    //     header("location:../managerDetails.php?err=avalable_emailOrName");                       
    // }
    else{
        // if all inputs are err free

        // registerNewUser($conn, $mName, $mEmail, $mPassword, $mConfirmPassword);

        echo "Success";

    }
}
else{
    header("location:../managerDetails.php");  
    exit();
}
// function for register new manager


?>