
<?php
if(isset($_POST['submit'])){
    $form_name = trim($_POST['name']);
    $form_email = trim($_POST['email']);
    $form_subject = trim($_POST['subject']);
    $form_message = trim($_POST['message']);

    if(!empty($form_name) && !empty($form_email) && !empty($form_subject) && !empty($form_message)){
        if(filter_var($form_email, FILTER_VALIDATE_EMAIL)) {
            include 'db.inc.php';
            $from = "$form_email";
            $to = "grumin1979@gmail.com";
            $subject = "$form_subject";
            $autorius = 'Nuo' . $form_name . ', ' . $form_email;
            $zinute = htmlspecialchars($message);
            // mail($to, $subject, $autorius, $zinute, $from);
            // echo "<script> alert('Dekojame uz zinute');</script>";
            mysqli_query($mysqli, "INSERT INTO contact_forma (name, email, subject, message) VALUES('$_POST[name]', '$_POST[email]', '$_POST[subject]', '$_POST[message]')");
            header("Location: index.php");
            exit();
        }else {
            header("Location: index.php");
            exit();
        }
    } else {
        header("Location: index.php");
        exit();
    }
} 
