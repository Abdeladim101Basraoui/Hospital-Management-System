<?php
echo "<script>
console.log(".$_SESSION['role'].");
</script>
";
session_start();
if(strtolower($_SESSION['role']) == 'Medecin'){
    header("Location: medecin.php");
}
else if(strtolower($_SESSION['role']) == 'medecin-chef'){
    header("Location: medecin-chef.php");
}
else if(strtolower($_SESSION['role']) == 'technicien'){
    header("Location: technicien.php");
}
else if(strtolower($_SESSION['role']) == 'Infirmier'){
    header("Location: infirmier.php");
}
else{
    // header("Location: login.php");
}