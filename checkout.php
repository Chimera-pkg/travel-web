<!-- <?php
   session_start();

   // Memeriksa apakah data booking ada di session
   if (!isset($_SESSION['success_message']) || !isset($_SESSION['booking_data'])) {
      header('Location: book.php');
      exit();
   }

   // Mengambil data booking dari session
   $successMessage = $_SESSION['success_message'];
   $bookingData = $_SESSION['booking_data'];
   
   // Menghapus data booking dari session setelah ditampilkan
   unset($_SESSION['success_message']);
   unset($_SESSION['booking_data']);
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Booking Confirmation</title>
</head>
<body>
   <h1>Booking Confirmation</h1>
   
   <!-- Menampilkan pesan sukses -->
   <p><?php echo $successMessage; ?></p>

   <h2>Booking Details:</h2>
   <p>Name: <?php echo $bookingData['name']; ?></p>
   <p>Email: <?php echo $bookingData['email']; ?></p>
   <p>Phone: <?php echo $bookingData['phone']; ?></p>
   <p>Address: <?php echo $bookingData['address']; ?></p>
   <p>Location: <?php echo $bookingData['location']; ?></p>
   <p>Guests: <?php echo $bookingData['guests']; ?></p>
   <p>Arrivals: <?php echo $bookingData['arrivals']; ?></p>
   <p>Leaving: <?php echo $bookingData['leaving']; ?></p>

</body>
</html>
