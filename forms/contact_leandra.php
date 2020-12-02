  
<?php
  $conn = mysqli_connect('localhost','root','');
  mysqli_select_db($conn , 'portfolio');

  if ($conn) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $message = $_POST['message'];
    $s = "INSERT INTO leandra_monteiro(name, email, contact_number, message) VALUES ('".$name."', '".$email."', '".$contact_number."', '".$message."')";
    if (mysqli_query( $conn , $s )) {
      echo "Message sent successfully";
    } else {
      echo "Some error occurred, try again!";
    }
  }
  else {
    echo "Not connected";
  }

?>