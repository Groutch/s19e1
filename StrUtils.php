<?php
class StrUtils {
    private $str;
    public function __construct($s="Phrase de test"){
        $this->str = $s;
    }
    public function getStr(){
        return $this->str;
    }
    public function bold(){
        return "<strong>".$this->str."</strong>";
    }
    
    public function italic(){
        return "<i>".$this->str."</i>";
    }
    
    public function underline(){
        return "<u>".$this->str."</u>";
    }
    
    public function capitalize(){
        return "<span style='text-transform: uppercase'>".$this->str."</span>";
    }
    
    public function uglify(){
        $var1 = new StrUtils($this->bold());
        $var2 = new StrUtils($var1->italic());
        return $var2->underline();
    }
}