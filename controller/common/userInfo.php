<?php

class UserInfo {

 // stringで名前
  private $name;

  public function __construct($userInfoFetchResult){
    if($userInfoFetchResult){
      $this->name = $userInfoFetchResult['username'];
    }else{
      $this->name = "blank";
    }
  }

  public function getName(){
      return $this->name;
  }

  public function toString(){
    return
      "name=". $this->_name ;
  }
}