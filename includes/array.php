<?php
$thispage = basename(__FILE__);
$pages = ["Login"=>"index.php", "Home"=>"Homepage.php", "About"=>"About.php", "test"=>"array.php"];
$nav = '<nav><ul class="navbar">';
foreach($pages as $key => $page){
   $nav .= '<li><a href="'.$page.'" '; 
    if($thispage == $page){
        $nav .=  'class="active"';
    }
    $nav.= ">$key</a></li>";
}
$nav.= "</ul></nav>";


//echo "test" . $pages[0] . "," . $pages[1] . " and " . $pages[2]. ".";
echo "<hr>";
echo $nav;
?>



            