<?php 
class SeasonView{
    function showTemp($tempCap,$allTemp ){
        $smarty = new Smarty() ;
        $smarty->assign('tempCap', $tempCap);
        $smarty->assign('count', count($tempCap));
        $smarty->assign ('allTemp',$allTemp);
        $smarty->display('templates/showTemp.tpl');

    }


}