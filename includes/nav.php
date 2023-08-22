<?php

$pages = ["Home"=> "Homepage.php","Login"=>"index.php", "About"=>"About.php"];
$nav = '';
foreach($pages as $key => $page){
   $nav .= '<li><a href="'.$page.'" '; 
    if($thispage == $page){
        $nav .=  'class="active"';
    }
    $nav.= ">$key</a></li>";
}

?>
<nav>
        <ul class="navbar">
            <?php echo $nav ?>

            <!--
            <li><a href="Homepage.php" class="active">Home</a></li>
            <li><a href="index.php" class="active">Login</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
-->
        </ul>
    </nav>