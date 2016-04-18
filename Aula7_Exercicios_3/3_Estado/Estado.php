<?php


class Estado {
    
    private $Nome;
    private $Municipios;
    
    public function __construct($pNome) {
        $this->Nome = $pNome;
        $this->Municipios = array();
    }
    
    public function AdicionarMunicipio($Nome, $Area, $Populacao){
         $municipio = array("Nome" => $Nome,
            "Area" => $Area,
            "Populacao" => $Populacao
        );
        array_push($this->Municipios, $municipio);
    }
    
    public function AreaTotal(){
        $area = 0;
        foreach ($this->Municipios as $municipio) {
            $area+=$municipio["Area"];
        }
        return $area;
    }
    
     public function PopulacaoTotal(){
        $populacao = 0;
        foreach ($this->Municipios as $municipio) {
            $populacao+=$municipio["Populacao"];
        }
        return $populacao;
    }
    
    public function MenorMunicipio(){
         $temp = $this->Municipios[0];
         for($i =1;$i<count($this->Municipios);$i++) {
             if ($this->Municipios[$i]["Area"] < $temp["Area"]){
                 $temp["Nome"] = $this->Municipios[$i]["Nome"];
                 $temp["Area"] = $this->Municipios[$i]["Area"];
                 $temp["Populacao"] = $this->Municipios[$i]["Populacao"];
             }
        }
        return $temp;        
    }
   
    public function MaiorMunicipio(){
         $temp = $this->Municipios[0];
         for($i =1;$i<count($this->Municipios);$i++) {
             if ($this->Municipios[$i]["Area"] > $temp["Area"]){
                 $temp["Nome"] = $this->Municipios[$i]["Nome"];
                 $temp["Area"] = $this->Municipios[$i]["Area"];
                 $temp["Populacao"] = $this->Municipios[$i]["Populacao"];
             }
        }
        return $temp;        
    }
    
     public function MenorPopulacao(){
         $temp = $this->Municipios[0];
         for($i =1;$i<count($this->Municipios);$i++) {
             if ($this->Municipios[$i]["Populacao"] < $temp["Populacao"]){
                 $temp["Nome"] = $this->Municipios[$i]["Nome"];
                 $temp["Area"] = $this->Municipios[$i]["Area"];
                 $temp["Populacao"] = $this->Municipios[$i]["Populacao"];
             }
        }
        return $temp;        
    }
   
    public function MaiorPopulacao(){
         $temp = $this->Municipios[0];
         for($i =1;$i<count($this->Municipios);$i++) {
             if ($this->Municipios[$i]["Populacao"] > $temp["Populacao"]){
                 $temp["Nome"] = $this->Municipios[$i]["Nome"];
                 $temp["Area"] = $this->Municipios[$i]["Area"];
                 $temp["Populacao"] = $this->Municipios[$i]["Populacao"];
             }
        }
        return $temp;        
    }
    
    public function DiferencaMaiorMenor(){
        return $this->MaiorMunicipio()["Area"] - $this->MenorMunicipio()["Area"];
    }
    
}
