<?php 

    function lang($phrase){
        static $lang = array(

            // Home Page
            "MESSAGE"=> "Welcome",
            "ADMIN" => "Administrator",
        );
        return $lang[$phrase];
    }

    // $lang = array(
    //     "Eslam"=> "Badawt",
    // );
    // echo $lang['Eslam'];                 