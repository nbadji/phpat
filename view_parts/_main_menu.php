<?php
$menu_data = array(
    'Accueil' =>'index.php',
    'Contact' =>'contact.php',
    'Inscription' =>'contact.php',
    'Dashboard' =>'contact.php',
);
//foreach
?>
<ul>
    <?php
    foreach($menu_data as $cle =>$value)
    {
        echo '<li><a href="'.$value.'">'.$cle.'</a></li>';
    }
    ?>

</ul>
