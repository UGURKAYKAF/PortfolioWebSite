<?php 

function cssActivePage($value){
    return $_SERVER["REQUEST_URI"] === "/admin/".$value;
}

function checkPostHtml(){

    foreach($_POST as $key =>$post){
        if(!is_array($post)){
        $_POST[$key] = htmlspecialchars(trim($post));
        }
    }
}


function sessionCheck($item,$sucessOr){
    if(isset($_SESSION[$item])){
        if($sucessOr === 1){
            echo "<div class='p-3 mb-2 bg-success text-white text-center'>".$_SESSION[$item]."</div>";
        }
        if($sucessOr === 0){
            echo "<div class='p-3 mb-2 bg-warning text-dark text-center'>".$_SESSION[$item]."</div>";
        }
        
        unset($_SESSION[$item]);
    } 
}

?>