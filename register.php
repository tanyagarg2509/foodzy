<?php

include 'config.php';

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$mobile=$_POST["phoneno"];
$pass=$_POST["password"];
$cpass=$_POST["cpassword"];

if (empty($_FILES["profile_img"]["name"])) {
    header("Location: login.php?signup=emptyimage");
    exit();
}
if (empty($fname) || empty($email) || empty($mobile) || empty($pass) || empty($cpass)) {
    header("Location: login.php?signup=empty");
    exit();
}
else
{
    //check if inputs characters are valid names
    if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)) {
        header("Location: login.php?signup=invalid");
        exit();
    }
    else
    {
        //check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: login.php?signup=email");
            exit();
        }
        else
        {

            $sql = "select * from users where email ='$email';";
            $result=mysqli_query($conn,$sql);
            $resultCheck=mysqli_num_rows($result);

            if ($resultCheck>0) {
                header("Location: login.php?signup=usertaken");
                exit();
            }
            else
            {

                //uploading image and data
                if (!empty($_FILES["profile_img"]["name"])) 
                {

                    $file_name=$_FILES["profile_img"]["name"];
                    $temp_name=$_FILES["profile_img"]["tmp_name"];
                    $imgtype=$_FILES["profile_img"]["type"];
                    $ext= GetImageExtension($imgtype);
                    $imagename=date("d-m-Y")."-".time().$ext;
                    $target_path = "userImages/".$imagename;
                    
                    if(move_uploaded_file($temp_name, $target_path)) 
                    {
                        $sql = "Insert into users (firstname,lastname, email, password, phoneno,userImage) values ('$fname', '$lname', '$email', '$pass', '$mobile','$target_path');";
                $result=mysqli_query($conn, $sql);
                        header("Location: login.php?signup=success");  
                        exit();
                    }
                    else
                    {                
                        header("Location: login.php?signup=failedToUploadImage");  
                        exit("Error While uploading image on the server");
                    } 
                
                }
                
               
            }
        }
    }
}
function GetImageExtension($imagetype)
{
if(empty($imagetype)) return false;
switch($imagetype)
{
   case 'image/bmp': return '.bmp';
   case 'image/gif': return '.gif';
   case 'image/jpeg': return '.jpg';
   case 'image/png': return '.png';
   default: return false;
}
}

?>

