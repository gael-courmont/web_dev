<?php
    function password_verification($user,$password){
        if ($user[0][6]==$password){
            return true;
        }
        return false;
    }
//verification si l'utilisateur existe et si le 
function connection($userfname,$userlname,$password){
    $user=getUserByName($userfname,$userlname);
    if ($user){
        $verif=password_verification($user,$password);
        if ($verif){
            $_SESSION['loggedIn']=true;
            return $user;
        }
    }
    return false;
}
function Session_lancement($user){
    // on rempli les sessions
    $_SESSION['lname']= $user[0][1];
    $_SESSION['fname']=$user[0][2];
}

function disconnect(){
    unset($_SESSION['lname']);
    unset($_SESSION['fname']);
    unset($_SESSION['loggedIn']);
}
?>
