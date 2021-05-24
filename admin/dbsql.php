<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class DbMysql{
    public $conn;
    function __construct() {
        $this->conn= new mysqli("localhost","root","root","s6228681");
        $this->conn->query("set names utf8");
    }
    function select($sql,$fanhui=2){
        $result=$this->conn->query($sql);
        if($result){
            $array=array();
            if($fanhui==1){
                $array =$result->fetch_array();
            }else{
                while($row=$result->fetch_array()){
                $array[]=$row;
                }
            }
        return $array;    
        }else{
            return false;
        }
        
    }
    function sql($sql){
        $this->conn->query($sql);
    }
    function affected(){
        return $this->conn->affected_rows;
    }
}
