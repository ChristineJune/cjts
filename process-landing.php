<?php

include "conn-landing.php";
    session_start();

    //alumni reg

    if(isset($_POST['register'])){

        $pic = $_FILES['pic']['name'];
        $fileTmpName = $_FILES['pic']['tmp_name'];

        $name=$_POST['name'];
        $student_id=$_POST['student_id'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $address =$_POST['address'];
        $mobile =$_POST['mobile'];
        $dob =$_POST['dob'];
        $pob =$_POST['pob'];
        $citi =$_POST['citi'];
        $cs =$_POST['cs'];
        $yg =$_POST['yg'];
        $ls =$_POST['ls'];
        $education =$_POST['education'];
        $experience =$_POST['experience'];
        $dor=$_POST['dor'];
        $email3=$_POST['email3'];
        $password3=$_POST['password3'];
    
    $insertusers=mysqli_query($conn, "INSERT INTO registration
    VALUES('0','$pic','$name','$student_id','$age', '$gender','$address','$mobile','$dob','$pob','$citi','$cs','$ls','$yg','$education','$experience','$dor', '$email3','$password3')");
    
    
    if($insertusers==true){
        $fileDestination = 'upload/'.$pic;
        move_uploaded_file($fileTmpName, $fileDestination)
    
        ?>
        <script>
        alert("Successfully Registerd!");
        window.location.href="index.php";
        </script>
        <?php

}else{
    ?>
    <script>
    alert("There's an error in registering \n Try Again!");
    window.location.href="index.php";
    </script>
   <?php
}
}

    //admin log in
if (isset($_POST['login1'])){

    $email1 = $_POST['email1'];
    $password1 = $_POST['password1'];
   
    $validate = mysqli_query($conn, "SELECT * FROM adminlogin WHERE email1='$email1'");

    $val_num=mysqli_num_rows($validate);


        if($val_num >=1){ 
            $_SESSION['email1'] = $email1;
            ?>
            <script>
            alert("Successfully Logged In!");
            window.location.href="admin/index.php";
            </script>
            <?php

    }else{
        ?>
        <script>
        alert("Wrong Email or Password\n Try Again!");
        window.location.href="index.php";
        </script>
       <?php
    }
}

    //alumni log in
    if (isset($_POST['login2'])){

        $email3 = $_POST['email3'];
        $password3 = $_POST['password3'];
       
        $validate = mysqli_query($conn, "SELECT * FROM registration WHERE email3='$email3'");
    
        $val_num=mysqli_num_rows($validate);
    
    
            if($val_num >=1){ 
                $_SESSION['email3'] = $email3;
                ?>
                <script>
                alert("Successfully Logged In!");
                window.location.href="alumni/index.php";
                </script>
                <?php
    
        }else{
            ?>
            <script>
            alert("Wrong Email or Password\n Try Again!");
            window.location.href="index.php";
            </script>
           <?php
        }
    }







