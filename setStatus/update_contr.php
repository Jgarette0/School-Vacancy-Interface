<?php 

function is_status_wrong(bool | array $result){

  if(!$result){
    return true;
  }else{
    return false;
  }
   
  }