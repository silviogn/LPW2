<?php


class Arara {
    
   private $NumeroPenas = 900;
   
   private function PrintNumeroPenas(){
       print $this->NumeroPenas;
   }
   
   public function RePrintNumeroPenas(){
       $this->PrintNumeroPenas();
       print "<br> {$this->NumeroPenas}";
   }
}
