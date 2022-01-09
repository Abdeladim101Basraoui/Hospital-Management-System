<?php
//     include('Infirmier.php');
//     // include_once('RDV.php');
// $f = new Infirmier('inf#1',null,null,null,null,null,null,null,null);
// $r =new RDV(null,date('y-m-d'),date('H:i'),"inserted from the code",null,'bl23456');
// $f->AjouterRDV($r);
// // if($f->AjouterRDV($r))
// // echo "good!";



//====================

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <script src="../assets/js/app.js"></script>
<script>
    $(document).on('click', '.dropdown-menu li a', function() {
      $('#datebox').val($(this).attr("value"));//$(this).html());
      // fetch('test.php?attr=');
      var value = $(this).attr("value");
//       alert(value);
// $("hidden [name='selected']").val(value);

    }); 

</script>
</head>
<body><form action="" method="get">

<div class="input-group">                                            
    <input type="TextBox" ID="datebox" Class="form-control"></input>
    <div class="input-group-btn">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
        </button>
        <ul id="demolist" class="dropdown-menu">
            <li><a value="A" href="#">A</a></li>
            <li><a value="B" href="#">B</a></li>
            <li><a value="C" href="#">C</a></li>
        </ul>
    </div>
</div>
<input type="hidden" name="selected">
<input type="submit" value="send">
</form>
</body>
</html>