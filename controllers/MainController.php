<?php

    class MainController{
        function render(){
            $template=new Template;
            echo Template::instance()->render('practice.html');
        }
    }

?>