<?php 
header('Content-Type: text/css; charaset=utf-8'); ?>
@charset "utf-8";

<?php 
$player = file_get_contents("/players/show.blade.php");
$color = $player->color;
?>

.player_name {
    font-size: 30px;
    color: #<?php echo $color; ?>;
}
