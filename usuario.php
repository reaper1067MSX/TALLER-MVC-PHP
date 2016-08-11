<?php
class usuario {
   private $id;
   private $mail;
   private $password;
   private $id_tipo;
	 private $estado;

   function __construct() {


   }
   /*
      function __construct() {
    print "En el constructor BaseClass\n";
   } */


   function __clone() {
     $this->id = ++$this->id;
   }
   public function getid() {
     return $this->id;
   }

   public function setid($id) {
     $this->id = $id;
   }

   public function getMail() {
     return $this->mail;
   }

   public function setMail($mail) {
     $this->mail = $mail;
   }

   public function getPass() {
     return $this->password;
   }

   public function setPass($password) {
     $this->password = $password;
   }

   public function getId_tipo() {
     return $this->id_tipo;
   }

   public function setId_tipo($password) {
     $this->id_tipo = $id_tipo;
	 }

	 public function get_Estado(){
		 return $this->estado;
	 }

	 public function setEstado(){
		 $this->estado = $estado;
	 }


 ?>
