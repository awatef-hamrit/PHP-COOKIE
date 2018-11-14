<?php
$tabConstante = (get_defined_constants());

 ?>
<table border=1 width=50% >
<caption><b>Exercice Array </b></caption>
<tr> <th> Nom Constante </th> <th> Valeur</th> </tr>
<?php
foreach($tabConstante as $cle=>$val)
{ ?>
<tr>
<td> <?php echo $cle; ?> </td> <td> <?php echo $val; ?></td></tr>
<?php } ?>
</table>
