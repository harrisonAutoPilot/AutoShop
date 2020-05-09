<?php
//fetch.php
if(isset($_POST['id']))
{
     $output = '';
     $connect = mysqli_connect("localhost", "ebube", "advancegrace", "phpsamplescheck");
     $query = "SELECT * FROM mechanic WHERE id='".$_POST["id"]."'";
     $result = mysqli_query($connect, $query);
     while($row = mysqli_fetch_array($result))
     {
          $output = '
               <p><img src="images/'.$row["image"].'" class="img-responsive img-thumbnail" /></p>
               <p><label>Name : '.$row['name'].'</label></p>
               <p><label>Address : </label><br />'.$row['location'].'</p>
               <p><label>Gender : </label>'.$row['gender'].'</p>
               <p><label>Phone : </label>'.$row['designation'].'</p>
               <p><label>Age : </label>'.$row['age'].' Years</p>
          ';
     }
     echo $output;
}
?>
