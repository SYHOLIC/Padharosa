<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_message = $conn->prepare("DELETE FROM `messages` WHERE id = ?");
   $delete_message->execute([$delete_id]);
   header('location:messages.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>messages</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">
  
   
<style>
  
		 table ,th ,td {
		  border:1px solid black;
        
        
		  }
	  </style>


</head>
<body>

<?php include '../components/admin_header.php' ?>

<!-- messages section starts  -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

   <script>
   $(document).ready(function () {
    $('#example').DataTable();
     });
  </script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

<section class="messages">

   <h1 class="heading">messages</h1>

   

 
   <table id='example' class='display'  cellspacing==0 cellpadding=10 border="2" width="1200" align="justify">
   <thead>
      <tr>
      <th> name </th>
      <th> number</th>
      <th> email </th>
      <th> message </th>
      <th>DELETE</th>
         </tr>
   </thead>
   <tbody>
   <?php
      $select_messages = $conn->prepare("SELECT * FROM `messages`");
      $select_messages->execute();
      if($select_messages->rowCount() > 0){
         while($fetch_messages = $select_messages->fetch(PDO::FETCH_ASSOC)){
   ?>
   <tr>
      <td><span><?= $fetch_messages['name']; ?></span></td>
      <td><span><?= $fetch_messages['number']; ?></span></td>
      <td><span><?= $fetch_messages['email']; ?></span></td>
      <td><span><?= $fetch_messages['message']; ?></span></td>
      <td><a href="messages.php?delete=<?= $fetch_messages['id']; ?>" class="delete-btn" onclick="return confirm('delete this message?');">delete</a></td>
         </tr>
   <?php
         }
      }else{
         echo '<p class="empty">you have no messages</p>';
      }
   ?>
   </tbody>

 

</section>

<!-- messages section ends -->









<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>