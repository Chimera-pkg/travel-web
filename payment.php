<?php
   session_start();

   // Memeriksa apakah data booking ada di session
   if (!isset($_SESSION['success_message']) || !isset($_SESSION['booking_data'])) {
      header('Location: home.php');
      exit();
   }

   // Mengambil data booking dari session
   $successMessage = $_SESSION['success_message'];
   $bookingData = $_SESSION['booking_data'];

   // Menghapus data booking dari session setelah ditampilkan
   unset($_SESSION['success_message']);
   unset($_SESSION['booking_data']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/stylepaymen.css">

</head>
<body>

<div class="container" style="background-image: url(images/home-slide-1.jpg); background-size: cover; background-position: center;">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="john deo">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="mumbai">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="india">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. john deo">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

    <div class="user-data-box">
        <h2>Please check your data :</h2>
        <div class="user-info">
            <span class="info-label">Name:</span>
            <span class="info-value"><?php echo $bookingData['name']; ?></span>
        </div>
        <div class="user-info">
            <span class="info-label">Email:</span>
            <span class="info-value"><?php echo $bookingData['email']; ?></span>
        </div>
        <div class="user-info">
            <span class="info-label">Phone:</span>
            <span class="info-value"><?php echo $bookingData['phone']; ?></span>
        </div>
        <div class="user-info">
            <span class="info-label">Address:</span>
            <span class="info-value"><?php echo $bookingData['address']; ?></span>
        </div>
        <div class="user-info">
            <span class="info-label">Location:</span>
            <span class="info-value"><?php echo $bookingData['location']; ?></span>
        </div>
        <div class="user-info">
            <spanclass="info-label">Guests:</span>
            <span class="info-value"><?php echo $bookingData['guests']; ?></span>
        </div>
        <div class="user-info">
            <span class="info-label">Arrivals:</span>
            <span class="info-value"><?php echo $bookingData['arrivals']; ?></span>
        </div>
        <div class="user-info">
            <span class="info-label">Leaving:</span>
            <span class="info-value"><?php echo $bookingData['leaving']; ?></span>
        </div>
    </div>


    <!-- <div class="user-data">
        <h2>User Data:</h2>
        <p>Name: <?php echo $bookingData['name']; ?></p>
        <p>Email: <?php echo $bookingData['email']; ?></p>
        <p>Phone: <?php echo $bookingData['phone']; ?></p>
        <p>Address: <?php echo $bookingData['address']; ?></p>
        <p>Location: <?php echo $bookingData['location']; ?></p>
        <p>Guests: <?php echo $bookingData['guests']; ?></p>
        <p>Arrivals: <?php echo $bookingData['arrivals']; ?></p>
        <p>Leaving: <?php echo $bookingData['leaving']; ?></p>
    </div> -->

</div>    
    
</body>
</html>