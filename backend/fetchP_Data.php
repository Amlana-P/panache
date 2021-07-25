<?php

include('database.php');
include('server.php');
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

// GET Profile
 $id = $_SESSION['user_id'];
 $profile_query="SELECT * FROM users WHERE id = $id";
 $profile_result = mysqli_query($con,$profile_query);

 if(mysqli_num_rows($profile_result)>0){ 
    $result = mysqli_fetch_array($profile_result) ;?>
        <div class="card member-box shadow-lg">
         <img class="card-img-top" src="https://placeimg.com/640/480/arch/any" alt="profile picture">
         <div class="card-body">
            <span class="member-degignation">Participant ID: <?php echo $result['id']; ?></span>
            <h4 class="member-title"><?php echo $result['username']; ?></h4>
            <small><strong>College: </strong><?php echo $result['collegename']; ?></small><br>
            <small><strong>Email: </strong><?php echo $result['email']; ?></small><br>
            <small><strong>Phone: </strong><?php echo $result['contactnumber']; ?></small>
         </div>
         <div class="card-footer">
            <div class="social">
               <small><strong>Insta-Handle:</strong></small> 
               <a href="https://www.instagram.com/<?php echo $result['instagramid']; ?>/" target="_blank"><br>
               <i class="fa fa-instagram"></i>&nbsp;<?php echo $result['instagramid']; ?>
               </a>
            </div>
         </div>
      </div>
      <?php 

};?>