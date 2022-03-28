<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head();?>
</head>

<body <?php body_class();?>>

<header class="header">
    <div class="container">
        <div class="row">
            <h1 class="col-8">Word Press Demo Theme</h1> 
            <div class="col-4">
            <?php wp_nav_menu (
                array(
                    'theme_location' => 'top-menu',
                )
                );?>
            </div>
        </div>
    </div>
</header>

    