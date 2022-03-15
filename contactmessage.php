<?php
 include("connectionkate.php");

if (empty($_POST['email']) || empty($_POST['message'])) {
     echo "Both fields are required.";
} else {   

    // var_dump($_POST); //ф-ция позволяет посмотреть, что происходит внутри - код
    // exit;
    $email = $_POST['email']; 
    $message = $_POST['message']; 

    $sql = "INSERT INTO contactus (`email`, `message`) VALUES ('$email', '$message')";
// вставить в табл contactus данные uid, email, message со значениями NULL, $email, $message
    $result=mysqli_query($db,$sql); // отправляем этой ф-цией инфу в базу данных//

    if($result == true) { //проверяет успешно ли запис данные
        header("location: contactus.php?send=1"); 
    } else {
        echo "The limit of allowed characters for the message has been exceeded."; 
    }
}
?>
