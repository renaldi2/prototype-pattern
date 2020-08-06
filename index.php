<?php

abstract class Pesanan {
    protected $title;
    protected $topic;
    abstract function __clone();
    function getTitle() {
        return $this->title;
    }
    function setTitle($titleIn) {
        $this->title = $titleIn;
    }
    function getTopic() {
        return $this->topic;
    }
}

class Pesan extends Pesanan {
    function __construct() {
        $this->topic = 'Pesanan :';
    }
    function __clone() {
    }
}

 
  writeln('Pesanan Baru');
  writeln('');

  $phpProto = new Pesan();


  $Pesanan = clone $phpProto;
  $Pesanan->setTitle('Nasi Goreng :1<br> Jus Jeruk:1');
  writeln($Pesanan->getTopic());
  writeln($Pesanan->getTitle());
  writeln('');

  $Pesanan = clone $phpProto;
  $Pesanan->setTitle('Mie Goreng :1<br>Nasi Goreng :1<br> ES Teh Manis:2');
  writeln($Pesanan->getTopic());
  writeln($Pesanan->getTitle());
  writeln('');
  
  


  function writeln($line_in) {
    echo $line_in."<br/>";
  }

?>