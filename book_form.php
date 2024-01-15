<?php

   session_start();

   $connection = mysqli_connect('localhost','root','','travel');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      // insert from data into the database
      $request = "insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);
      // session_start();

      // simpan data pengguna dalam sesion 
      $_SESSION['booking_data'] = array(
         'name' => $name,
         'email' => $email,
         'phone' => $phone,
         'address' => $address,
         'location' => $location,
         'guests' => $guests,
         'arrivals' => $arrivals,
         'leaving' => $leaving,
      );
      $_SESSION['success_message'] = "room booked successfully.";
      header('location:payment.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>