<?php
$filename =  time(). '.jpg';
$filepath = 'image/';
if(isset($_FILES['webcam'])){	
    move_uploaded_file($_FILES['webcam']['tmp_name'], $filepath.$filename);
}
$txt_image = $filename;

if(isset($_POST['btn_update'])){
    include "../db_conn.php";

    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $mid_name = $_POST['mid_name'];
    $last_name = $_POST['last_name'];
    $suffix = $_POST['suffix'];
    $sex = $_POST['sex'];
    $date_of_birth = $_POST['date_of_birth'];
    $civil_status = $_POST['civil_status'];
    $voter_status = $_POST['voter_status'];
    $house_number = $_POST['house_number'];
    $street = $_POST['street'];
    $purok = $_POST['purok'];
    $occ = $_POST['occ'];
    $citi = $_POST['citi'];
    $health = $_POST['health'];
    $phone_number = $_POST['phone_number'];
    $tel_number = $_POST['tel_number'];
    $email = $_POST['email'];

    // img
    $name = basename($_FILES['my_img']['name']);
    $temp = $_FILES['my_img']['tmp_name'];
    $imagetype = $_FILES['my_img']['type'];
    $size = $_FILES['my_img']['size'];

     $milliseconds = round(microtime(true) * 1000);
     $image = $milliseconds.'_'.$name;
     if(!empty($_POST['camera'])){

        $sql = "UPDATE `residents` 
        SET
        `first_name`='$first_name',
        `mid_name`='$mid_name',
        `last_name`='$last_name',
        `suffix`='$suffix',
        `sex`='$sex',
        `date_of_birth`='$date_of_birth',
        `house_number`='$house_number',
        `street`='$street',
        `purok`='$purok',
        `occupation`='$occ',
        `citizenship`='$citi',
        `health_status`='$health',
        `civil_status`='$civil_status',
        `voter_status`='$voter_status',
        `phone_number`='$phone_number',
        `tel_number`='$tel_number',
        `email`='$email',
        `img_url`='$txt_image'
        WHERE `id` = '$id'
        ";

        mysqli_query($conn,$sql);
        header("location:view-resident.php?id=$id");
     }

            if(($imagetype=="image/jpeg" || $imagetype=="image/png" || $imagetype=="image/bmp") 
            && $size<=10096000){
                    if(move_uploaded_file($temp, 'image/'.$image))
                  {
                   $txt_image = $image;

        
                $sql = "UPDATE `residents` 
                SET
                `first_name`='$first_name',
                `mid_name`='$mid_name',
                `last_name`='$last_name',
                `suffix`='$suffix',
                `sex`='$sex',
                `date_of_birth`='$date_of_birth',
                `house_number`='$house_number',
                `street`='$street',
                `purok`='$purok',
                `occupation`='$occ',
                `citizenship`='$citi',
                `health_status`='$health',
                `civil_status`='$civil_status',
                `voter_status`='$voter_status',
                `phone_number`='$phone_number',
                `tel_number`='$tel_number',
                `email`='$email',
                `img_url`='$txt_image'
                WHERE `id` = '$id'
                ";

                mysqli_query($conn,$sql);
                header("location:view-resident.php?id=$id");
                 
                    }
        }
        else if (empty($_POST['camera'])){

            $image= $_POST['orig_pic'];
            
            $sql = "UPDATE `residents` 
            SET
            `first_name`='$first_name',
            `mid_name`='$mid_name',
            `last_name`='$last_name',
            `suffix`='$suffix',
            `sex`='$sex',
            `date_of_birth`='$date_of_birth',
            `house_number`='$house_number',
            `street`='$street',
            `purok`='$purok',
            `occupation`='$occ',
            `citizenship`='$citi',
            `health_status`='$health',
            `civil_status`='$civil_status',
            `voter_status`='$voter_status',
            `phone_number`='$phone_number',
            `tel_number`='$tel_number',
            `email`='$email',
            `img_url`='$image'
            WHERE `id` = '$id'
            ";

            mysqli_query($conn,$sql);
            header("location:view-resident.php?id=$id");
            

        }
        
    }
        
    
    

?>