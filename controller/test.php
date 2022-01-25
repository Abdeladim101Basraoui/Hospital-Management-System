<?php
    include('Infirmier.php');
    include('Patient.php');
//     // include_once('RDV.php');
// $f = new Infirmier('inf#1',null,null,null,null,null,null,null,null);
// $r =new RDV(null,date('y-m-d'),date('H:i'),"inserted from the code",null,'bl23456');
// $f->AjouterRDV($r);
// // if($f->AjouterRDV($r))
// // echo "good!";
// if(!empty($_GET['delete'])){
// echo "<script>alert('deleted');</script>";
// echo "<script>alert('".$_GET['id']."');</script>";
// }

// $d = new calendrier_RDV();
// $d->insertCalendar();
//====================


    $m = new Infirmier('#1cin', null, null, null, null, null, null, null, null);
    $p = new Patient('tt','-null',date('y-m-d'),'-null','-null','-null','-null', '-null', '-null','-null');
    // echo "<script>alert('".$m->AjouterPatient($p)."');</script>";
    $m->AjouterPatient($p);

    // echo "<script>alert('".$email."". $pass."". $his."');</script>";
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/mystyle.css">
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="../assets/js/select2.min.js"></script>
    <script src="../assets/js/moment.min.js"></script>
    <script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/js/app.js"></script> -->
<!-- <script>
    $(document).on('click', '.dropdown-menu li a', function() {
      $('#datebox').val($(this).attr("value"));//$(this).html());
      // fetch('test.php?attr=');
      var value = $(this).attr("value");
//       alert(value);
// $("hidden [name='selected']").val(value);

    }); 

</script> -->
</head>
<body>

<!-- <div class="text-center"> -->
	<!-- Button HTML (to Trigger Modal) -->
	<!-- <a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Confirm Modal</a>
</div> -->

<!-- Modal HTML -->
<!-- <div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>						
				<h4 class="modal-title w-100">Are you sure?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete these records? This process cannot be undone.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
				 <button type="submit" name="delete" value="delete.php?id=1" class="btn btn-danger">Delete</button> -->
				<!-- <a href="delete.php?id=1" class="btn btn-danger">Delete</a> -->
			<!-- </div> -->
		<!-- </div> -->
	<!-- </div> -->
<!-- </div>  -->




<!--  -->


<form  method="get">
<input type="email" name="email">
<input type="password" name="pass" >
<textarea name="hist" cols="30" rows="10"></textarea>



<input type="submit" >
</form>
<!--  -->


<!-- <input type="hidden" name="selected"> -->
<!-- <input type="submit" value="send"> -->
</form>
</body>
</html>