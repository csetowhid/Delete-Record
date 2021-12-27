<?php

use App\Models\User;

if(!function_exists('delete')){
    function delete(){
        $date = new DateTime;
        $date->modify('-2 minutes');
        $formatted = $date->format('Y-m-d H:i:s');
        User::where('created_at','<=',$formatted)->delete();
    }
}
