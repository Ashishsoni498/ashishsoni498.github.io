<?php
    if(isset($_POST['submit'])){
        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $phone=$_POST['Phone'];
        $msg=$_POST['Message & Address'];

        $to='designer.ashish@hotmail.com';
        $subject='Form Submission';
        $message="Name: ".$name."\n"."Phone: ".$phone."\n". "Wrote the following: "."\n\n".$msg;
        $headers="Form: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Form Submitted"." ".$name."We will contact you soon</h1>"; 
        }
        else{
            echo "Something went wrong."
        }
       }
?>