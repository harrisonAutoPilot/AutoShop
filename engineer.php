<?php
include 'DBController.php';
$db_handle = new DBController();




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AUTOSHOP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />

    <link rel="shortcut icon" href="ftco-32x32.png">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">



    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
<!-- <link rel="stylesheet" href="css/style2.css"> -->



<style>
.modal-backdrop {
    /* bug fix - no overlay */
    display: none;
}.modal-body {
   background-image: url(images/back8.png);

}
.link-button {

      background: #ffffff none repeat scroll 0 0;

      border: 1px solid #aa8d56;

      color: #aa8d56;

      outline: medium none;

      padding: 15px;

      text-decoration: none;

}
.label-container{
	position:fixed;
	bottom:48px;
	right:105px;
	display:table;
	visibility: hidden;
}

.label-text{
	color:#FFF;
	background:rgba(51,51,51,0.5);
	display:table-cell;
	vertical-align:middle;
	padding:10px;
	border-radius:3px;
}

.label-arrow{
	display:table-cell;
	vertical-align:middle;
	color:#333;
	opacity:0.5;
 	background-color:white;
}

.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:white;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.my-float{
	font-size:24px;
	margin-top:18px;
}

a.float + div.label-container {
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s, opacity 0.5s ease;
}

a.float:hover + div.label-container{
  visibility: visible;
  opacity: 1;
}
::placeholder {
  font-size: 12px;
}



small {
  color: #aaa;
}


</style>


  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo" style="color:#ff6600; font-size:20px; font-weight:bolder">AUTO<span style="color:#666699">SHOP</span></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">

                <li class="has-children">
                  <a href="about.html"><span>Register</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#">As an Agent</a></li>
                    <li><a href="#">As a Mechanic</a></li>


              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>

    </header>



    <div class="site-blocks-cover overlay" style="background-image: url(images/enginee.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">


            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up">Find <span class="typed-words"></span></h1>

              </div>
            </div>

            <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
               <form method="POST" name="search" action="engineer.php">
                <div class="row align-items-center">
                  <div class="col-lg-12 col-xl-4 no-sm-border border-right">
                    <input type="text" class="form-control" id="problem" name="problem" placeholder="Short description of your problem" style="border:1px solid #f1f1f1;border-radius:50px">
                  </div>
                  <div class="col-lg-12 col-xl-3 no-sm-border border-right">


                  </div>
                  <div class="col-lg-12 col-xl-3">
                    <div class="select-wrap">

                      <input type="text" class="form-control" id="location" name="location" placeholder="Enter state or city e.g Lagos " style="border:1px solid #f1f1f1;border-radius:50px;">
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" id="Filter" class="btn text-white btn-primary" value="Search" >
                  </div>

                  <?php
                  if (! empty($_POST['problem']) && ! empty($_POST['location']) ){
                      ?>
                      <table class="col-xs-12" style="display: block; overflow-x: auto; white-space: nowrap;">

                  <thead style="background-color:#fff;">
                      <tr>
                          <th ><strong>Name</strong></th>
                          <th ><strong>Location</strong></th>
                          <th ><strong>Phone</strong></th>
                          <th ><strong>Profile</strong></th>

                      </tr>
                  </thead>
                  <tbody>
                  <?php
                      // $query = "SELECT * from tbl_user";
                      // $i = 0;
                      //  $selectedOptionCount = count($_POST['country']);
                   $problem= $_POST['problem'];
                     $location= $_POST['location'];
                      // $selectedOption = "";
                      // while ($i < $selectedOptionCount) {
                      //     $selectedOption = $selectedOption . "'" . $_POST['country'][$i] . "'";
                      //     if ($i < $selectedOptionCount - 1) {
                      //         $selectedOption = $selectedOption . ", ";
                      //     }
                      //
                      //     $i ++;
                      // }
                      // $query = $query . " WHERE country in (" . $selectedOption . ")";
                     $query = "SELECT * FROM `mechanic` WHERE location LIKE '%".$location."%' ";

                      $result = $db_handle->runQuery($query);
                  }
                  if (! empty($result)) {
                      foreach ($result as $key => $value) {
                          ?>
                  <tr>
                          <td ><div class="col" id="user_data_1"><?php echo $result[$key]['name']; ?></div></td>
                          <td ><div class="col" id="user_data_2"><?php echo $result[$key]['location']; ?> </div></td>
                          <td ><div class="col" id="user_data_3"><?php echo $result[$key]['phone']; ?> </div></td>
                           <td ><div class="col" id="user_data_3">	<a class="btn btn-outline-secondary" style="margin:5px; height:25px;font-size: 12px;padding-bottom:25px; border-radius:1px" data-toggle="modal" data-target="#myModalScrollable" data-href="get_page.php" onClick="getPage(<?php echo $result[$key]["id"]; ?>);">View Profile</a></div></td>
                      </tr>
                  <?php
                      }
                      ?>

                  </tbody>
                  </table>
                  <?php
                  }
                  ?>

                </div>
              </form>
             </div>
            </div>


              <a href="index.php" class="float" >
             <center> <img src="images/wheel.png" alt="Paris"  style=" width:30px; height:30px;margin:15px"></center>
               </a>
               <div class="label-container">
               <div class="label-text">Search for Spare Parts</div>
               <i class="fa fa-play label-arrow"></i>
               </div>
        </div>

         <div class="modal fade" id="myModalScrollable" tabindex="-1" role="dialog" aria-labelledby="myModalScrollableTitle"  aria-hidden="true" overlay:'hidden' style="position:absolute">
       <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-header">

           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body" id="output">
           ...
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

         </div>
       </div>
     </div>
       </div>

    </div>




  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  <!-- <script  src="./script.js"></script> -->


  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
          strings: ["Auto Mechanics Nearby","Car Electrician"," Panel Beater"," Towing Van","Spare Parts at Best Prices",],
            typeSpeed: 80,
            backSpeed: 80,

            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>

  <script type="text/javascript">

  function getPage(id) {
        jQuery.ajax({
         url: "get_page.php",
         data:'id='+id,
         type: "POST",
         success:function(data){$('#output').html(data);}
        });
       }
       // getPage(0);
  </script>
  <script>
  $(document).ready(function(){
      $('.openPopup').on('click',function(){
          var dataURL = $(this).attr('data-href');
          $('.modal-body').load(dataURL,function(){
              $('#myModalScrollable').modal({show:true});

          });
      });
  });
  </script>
  </body>
</html>
