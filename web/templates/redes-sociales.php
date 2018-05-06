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
    array (
        'name' => "Vimeo", 'link' => LINK_VIMEO,
    ),
    array (
        'name' => "Twitter", 'link' => LINK_TWITTER,
    ),
    array (
        'name' => "Facebook", 'link' => LINK_FACEBOOK,
    ),
);

for ($i=0; $i < count($redes); $i++) { ?>
    <li>
        <a href="<?php echo $redes[$i]['link']; ?>" target="_blank" class="icon-redes icon-redes<?php if ($data == 'nav') { echo '-xs'; } ?> icon-redes-<?php echo strtolower($redes[$i]['name']); ?>">
            <span class="sr-only<?php if ($data == 'nav') { echo ' sr-only-especial'; } ?>">
                <?php echo $redes[$i]['name']; ?>
            </span>
        </a>
    </li>
<?php }