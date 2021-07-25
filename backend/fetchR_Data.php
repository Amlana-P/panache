<?php 

include('database.php');
 // GET registration list
 $registration_query="SELECT * FROM USERS WHERE role = 0";
 $registration_result = mysqli_query($con,$registration_query);

 if(mysqli_num_rows($registration_result)>0){ ?>
 <table class="content-table">
  <thead>
          <tr>
          <th>ID</th>
          <th>Name</th>
          <th>College</th> 
          <th>Contact</th>
          <th>Email</th>
          <th>Date & Time</th>
          </tr>
  </thead>
  <tbody>
          <?php while($result = mysqli_fetch_array($registration_result)){ ?>
    
          <tr>
              <td><?php echo $result['user_id'] ?></td>
              <td><?php echo $result['username'] ?></td>
              <td><?php echo $result['college'] ?></td>
              <td><?php echo $result['contact'] ?></td>
              <td><?php echo $result['email'] ?></td>
              <td><?php echo $result['date&time'] ?></td>
          </tr>

 
 <?php } ;?>
  </tbody>
</table>
<?php } ;?>