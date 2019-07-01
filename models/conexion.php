
<?php
class ConexionBD{
      static public function conectar(){
        $link = new PDO ("mysql:host=localhost;dbname=podosystem","root","");
        return $link;
      }
}
 ?>