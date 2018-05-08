<?php
//        the constant is file and will allow just xml or txt files
        const InputKey='file';
        const AllowedTypes=['text/xml'];
//        our function is checking our submit. If is empty(submit) we will receive this message
        if (empty($_FILES[InputKey])) {
            header( "refresh:2;url=index.php" ); 
            die("<div class='col-md-3'>
                <img src='images/logo.png' style='width: 20%; margin-left: 40%; margin-top: 15%;' alt='sky'  data-holder-rendered='true'>   
                </div>
                <div class='col-md-6'>
                <h2 style='text-align: center;'>File Missing! Please insert an xml document!</h2>");
        } 
//        if we have an issue when we submit the file/an error we will receive this message 
        if ($_FILES[InputKey]['error'] > 0) {
            header( "refresh:2;url=index.php" ); 
            die("<div class='col-md-3'>
                <img src='images/logo.png' style='width: 20%; margin-left: 40%; margin-top: 15%;' alt='sky'  data-holder-rendered='true'>   
                </div>
                <div class='col-md-6'>
                <h2 style='text-align: center;'>Something went wrong! Please insert an xml document!<h2>");
        } 
//        if we try to insert different formats (jpg, png, etc) we won't be able and we will receive this message
        if(!in_array($_FILES[InputKey]['type'], AllowedTypes)){
            header( "refresh:2;url=index.php" ); 
            die("<div class='col-md-3'>
                <img src='images/logo.png' style='width: 20%; margin-left: 40%; margin-top: 15%;' alt='sky'  data-holder-rendered='true'>   
                </div>
                <div class='col-md-6'>
                <h2 style='text-align: center;'>Please insert an xml document!</h2>");
//         if our file is xml we will receive this positive message
        }else {echo"<div class='col-md-3'>
                <img src='images/logo.png' style='width: 20%; margin-left: 40%; margin-top: 15%;' alt='sky'  data-holder-rendered='true'>   
                </div>
                <div class='col-md-6'>
                <h2 style='text-align: center;'>Congratulation! The file has been uploaded successfully. Redirecting to home page... </h2>";}
        // we need to have a mximum file size for our uploads 
        if ($_FILES['file']['size'] > 2000000) {
            header( "refresh:2;url=index.php" ); 
            die("<div class='col-md-3'>
                <img src='images/logo.png' style='width: 20%; margin-left: 40%; margin-top: 15%;' alt='sky'  data-holder-rendered='true'>   
                </div>
                <div class='col-md-6'>
                <h2 style='text-align: center;'>Exceeded filesize limit.</h2>");
        }
        $tmpFile = $_FILES[InputKey]['tmp_name'];
//        the file will be sent in our uploads folder
        $dstFile='uploads/'.$_FILES[InputKey]['name'];
//        if our submit is empty we will receive an error message
        if(!move_uploaded_file($tmpFile, $dstFile)){
            header( "refresh:2;url=index.php" ); 
            die("<div class='col-md-3'>
                <img src='images/logo.png' style='width: 20%; margin-left: 40%; margin-top: 15%;' alt='sky'  data-holder-rendered='true'>   
                </div>
                <div class='col-md-6'>
                <h2 style='text-align: center;'>Please insert an xml document!</h2>");
        }
//        if we already have a similar file, this function will help us to not duplicate the file
        if (file_exists($tmpFile)){
            unlink($tmp);
        }
        // Take user back to main page after 2 seconds   
        header( "refresh:2;url=index.php" ); 
 
?>