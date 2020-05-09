<?phprequire_once("DBController.php");
$db_handle = new DBController();
$pages = $db_handle->runQuery("SELECT * FROM mechanic WHERE id = ".$_REQUEST['id']);
if(!empty($pages)) {
?>
<center>
<p> <img src="<?php echo 'images/'.$pages[0]['image'];?>" height="200" width="200" style="border:2px solid #fff" class="img-thumnail" /> </p>
<h3><?php echo $pages[0]['name'];?></h3>
<h4>Gender:<?php echo $pages[0]['gender'];?></h4>
<h4>Location:<?php echo $pages[0]['location'];?></h4>
<h4>Phone:<?php echo $pages[0]['phone'];?></h4>
<h4><?php echo $pages[0]['age'];?>years old</h4>
<h4>Jobs Completed:<?php echo $pages[0]['jobs'];?></h4>
</center>
<?php } ?>
