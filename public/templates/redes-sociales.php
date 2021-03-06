<?php 
//require_once 'config.php';

$redes = array(
    array(
        'name' => "Instagram", 'link' => LINK_INSTAGRAM,   
    ),
    array (
        'name' => "Spotify", 'link' => LINK_SPOTIFY,
    ),
    array (
        'name' => "Youtube", 'link' => LINK_YOUTUBE,
    ),
    /*array (
        'name' => "Vimeo", 'link' => LINK_VIMEO,
    ),
    array (
        'name' => "Twitter", 'link' => LINK_TWITTER,
    ),*/
    array (
        'name' => "Facebook", 'link' => LINK_FACEBOOK,
    ),
    array (
        'name' => "TipTok", 'link' => LINK_TIPTOK,
    ),
);

if ( $data == 'nav-movil' ) {
    for ($i=0; $i < count($redes); $i++) { ?>
        <li>
            <a href="<?php echo $redes[$i]['link']; ?>" target="_blank" class="movil-none">
                <?php echo $redes[$i]['name']; ?>
            </a>
        </li>
    <?php } 

} else {

    for ($i=0; $i < count($redes); $i++) { ?>
    <li>
        <a href="<?php echo $redes[$i]['link']; ?>" target="_blank" class="icon-redes <?php if ($data == 'nav') { echo 'icon-xs'; } ?> icon-redes-<?php echo strtolower($redes[$i]['name']); ?><?php if ($data == 'nav') { echo '-xs'; } ?>">
            <span class="sr-only<?php if ($data == 'nav') { echo ' sr-only-especial'; } ?>">
                <?php echo $redes[$i]['name']; ?>
            </span>
        </a>
    </li>
<?php }
}