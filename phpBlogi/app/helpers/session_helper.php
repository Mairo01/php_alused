<?php
session_start();
#sisselogitud
function message($name = '', $msg = '', $class = 'alert alert-success'){
    if(!($name)){
        if(!empty($msg)){
            if(!empty($_SESSION[$name])){ #kui pole tyhi, tyhjendab
                unset($_SESSION[$name]);
            }
            if(!empty($_SESSION[$name.'_class'])){ #kui pole tyhi, tyhjendab
                unset($_SESSION[$name.'_class']);
            }
            $_SESSION[$name] = $msg;
            $_SESSION[$name.'_class'] = $class;
        } else if(empty($msg) and !empty($name)){
            $class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : '';
            echo '<div class=".$class." id="msg">'.$_SESSION[$name].' </div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name.'_class']);
        }
    }
}
