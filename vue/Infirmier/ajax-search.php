<?php
// Array with names
include('../../controller/Infirmier.php');
$inf = new Infirmier('#1cin', null, null, null, null, null, null, null, null);

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

//the cins of the RDVs 
$res=$inf->showCINs_AJAX();
$cins = $res->fetchAll();


// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);

    
    foreach($cins[0] as $name) {
      
        if (stristr($q, substr($name, 0, $len))) {
          if ($hint === "") {
            $hint = $name;
          } else {
            $hint .= ", $name";
          }
        }
      }

}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>