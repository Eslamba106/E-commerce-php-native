<?php 

    function lang($phrase){
        static $lang = array(
            "MESSAGE"=> "اهلا",
            "ADMIN" => "المدير",
        );
        return $lang[$phrase];
    }

    // $lang = array(
    //     "Eslam"=> "Badawt",
    // );
    // echo $lang['Eslam'];