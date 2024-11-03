<?php

class Mobil{
    public String $merk;
    public String $color;
}

$honda = new Mobil();
$honda->merk = "Honda Civic Turbo";
$honda->color = "red";
$toyota = new Mobil();
$toyota->merk = " Ferari Lorenzo ";
$toyota->color = "red";
var_dump($honda);
?>
<pre>
    <?php var_dump($honda) ?>
</pre>
<pre>
    <?php print_r($honda) ?>
</pre>

<pre>
    <?php print_r($toyota) ?>
</pre>
