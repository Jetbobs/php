<?php
    include("header.php");
?>
<div class="gal">
<?php
$img = glob("gallery/*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
sort($img);
// print_r($img);
foreach($img as $i){
    printf("<img src='gallery/%s'/>",
    basename($i)
);
}
?>
</div>
<?php
include("footer.php");
?>