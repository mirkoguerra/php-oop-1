<?php

  class Stanza
  {
    public $numero_stanza;
    public $numero_letti;
    public $numero_bagni;

    function __construct($room_number)
    {
      $this->numero_stanza = $room_number;
    }

    function get_parameters()
    {
      echo ("numero stanza: ".$this->numero_stanza." numero letti: ".$this->numero_letti." numero bagni: ".$this->numero_bagni."<br>");
    }

  }

  $stanza1 = new Stanza('001');
  $stanza2 = new Stanza('002');
  $stanza3 = new Stanza('003');

  $stanza1->numero_letti = 3;
  $stanza2->numero_letti = 1;
  $stanza3->numero_letti = 5;

  $stanza1->numero_bagni = 2;
  $stanza2->numero_bagni = 1;
  $stanza3->numero_bagni = 3;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-oop-1</title>
  </head>
  <body>

    <?php

    $stanza1->get_parameters();
    $stanza2->get_parameters();
    $stanza3->get_parameters();

    ?>

  </body>
</html>
