<?php
session_start();

if(strtolower($_SESSION['role']) == 'medecin'){
    header("Location: medecin");
}
else if(strtolower($_SESSION['role']) == 'medecin-chef'){
    header("Location: medecin-chef");
}
else if(strtolower($_SESSION['role']) == 'technicien'){
    header("Location: technicien");
}
else if(strtolower($_SESSION['role']) == 'infirmier'){
    header("Location: infirmier");
}
else{
    header("Location: login");
}