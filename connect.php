<?php

$con = new mysqli('localhost','root','','crudtest');

if(!$con){
    echo "Bazaga ulanishda xatolik!";
}