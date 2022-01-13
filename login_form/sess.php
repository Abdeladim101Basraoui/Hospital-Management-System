<?php
                $resultat = mysqli_query($connexion,$sql);
                $jfeta = mysqli_fetch_assoc($resultat);
                    
                session_start();
                $cin = $jfeta['Cin_employe'];
                $_SESSION['Cin_employe'] = $cin;
    
                $role = $jfeta['Role'];
                $_SESSION['Role'] = $role;
                echo "$cin,$role";
?>