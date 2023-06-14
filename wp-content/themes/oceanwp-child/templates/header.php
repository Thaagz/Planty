<?php
$logo = get_custom_logo();

?>

<div id="navigate-main">
    <nav id="main-navigation" class="site-navigation primary-navigation" role="navigation">
        <div class="left-nav">
            <?php echo $logo; ?>
        </div>
        <?php wp_nav_menu(array(
            'menu' => MENU,
            'container' => 'ul',
            'menu_id' => 'primary',
            'menu_class' => 'primary-menu'
            )
        );
        ?>
    </nav>
</div>