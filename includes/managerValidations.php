<?php
// funtions to validate inputs



// check if register inputs are empty
function inputsEmptyMRegister($mName, $mEmail, $mPassword, $mConfirmPassword){
   
    if(empty($mName) || empty($mEmail) || empty($mPassword) || empty($mConfirmPassword)){
        $value = true;
    }
    else{
        $value = false;
    }
    return $value;
}
// // check if manager name inputs are empty
// function nameInvalide($mName){ 
//     if(!preg_match("/^[a-zA-Z]+$/", $mName)){
//         $value = true;
//     }
//     else{
//         $value = false;
//     }
//     return $value;
// }

// check if email is invalide
function emailInvalide($mEmail){ 
    if(!preg_match("/^[a-zA-Z\d\._-]+@[a-zA-Z\d_-]+\.[a-z+A-Z\d\.]{2,}$/", $mEmail)){

        $value = true;
    }
    else{
        $value = false;
    }
    return $value;
}

// check if password is invalide
function passwordInvalide($mPassword){ 
    if(!preg_match("/^.{5,}$/", $mPassword)){

        $value = true;
    }
    else{
        $value = false;
    }
    return $value;
}
// check if password and re password  invalide
function passNotMatch($mPassword, $mConfirmPassword){ 
   if($mPassword !== $mConfirmPassword){
       $value = true;       

   }
   else{
       $value = false;
   }
    return $value;
}
// check if name or email avalable in the system
function emailOrNameAvalable($conn, $mEmail, $mName){ 

// query

$sql = "SELECT FROM nidellarest WHERE managerEmail = ? OR managerName = ?;";
// initialize the prepared statement

$stmt = mysqli_stmt_init($conn);

// Bind the statement with the query and check errors
if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../managerDetails.php?err=failedstmt");
    exit();
}
else{
    // Bind data with the statement
    mysqli_stmt_bind_param($stmt, "s",$mEmail, $mName);

    // execute the statement
    mysqli_stmt_execute($stmt);

    // save result if avalable
    $data = mysqli_stmt_get_result($stmt);

    // check if there is at last one result
    if(mysqli_fetch_assoc($data)) {
        $value = false;
    }
    else{
        $value = true;
    }
}
// close the statement

mysqli_stmt_close($stmt);
return $value;

}


?>