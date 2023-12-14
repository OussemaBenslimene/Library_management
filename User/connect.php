<?php
class connect
{
public function Cnx()
 {
 $dbc=new PDO('mysql:host=localhost;dbname=library','root','');
 return $dbc;
 }
}?>