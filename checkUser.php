<?php
    function password_verification($user,$password){
        if ($user[0][6]==$password){
            return true;
        }
        return false;
    }

function connection($userfname,$userlname,$password){
    $user=getUserByName($userfname,$userlname);
    if ($user){
        $verif=password_verification($user,$password);
        if ($verif){
            return $user;
        }
    }
    return false;
}
function Session_lancement($user){
    // on rempli les sessions
    $_SESSION['password']     = $user[0][6];
    $_SESSION['lname']  = $user[0][1];
    $_SESSION['fname']=$user[0][2];
    echo "oui";
}
 

?>
