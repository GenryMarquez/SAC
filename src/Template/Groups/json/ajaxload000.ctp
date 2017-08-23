<?php
       
   /* if($permitido == 0)
    {
        $img = ["permisos"=>'key='.$iduser.'&key2='.$hijoalias.'&key3='.$permitido,"imagen"=>$this->Url->build('/', true).'img/Cross.png',"mensaje"=>"Este Grupo no tiene permisos"];
         //echo json_encode($img);
        echo json_encode(compact($img));

    }else{
        $img = ["permisos"=>'key='.$iduser.'&key2='.$hijoalias.'&key3='.$permitido,"imagen"=>$this->Url->build('/', true).'img/Green_tick.png',"mensaje"=>"Este Grupo tiene permisos"];
        //echo json_encode($img);
        echo json_encode(compact($img));
        
    }*/
   echo json_encode($img);
?>
