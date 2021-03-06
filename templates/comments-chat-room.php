<?php
/**
 * This file is the front-end for the built-in comments-as-chat-room.
 *
 * @package WordPress\Plugin\WP_Buoy_Plugin\WP_Buoy_Alert\WordPress_Chat
 *
 * @copyright Copyright (c) 2015-2016 by Meitar "maymay" Moscovitz
 *
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
?><!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
    <title><?php print sprintf(esc_html__('Buoy chat: %s', 'buoy'), $buoy_chat_room->get_title());?></title>
	<?php wp_head();?>
</head>
<body <?php body_class(); // TODO: Make the comments list a Microformats2 `h-feed` structure. ?>>
    <div id="page">
        <header id="masthead" class="site-header" role="banner">
            <h1 class="site-title"><?php print esc_html($buoy_chat_room->get_title());?></h1>
        </header>

        <section id="chat-room">
            <ul class="media-list">
                <?php $buoy_chat_room->list_comments();?>
            </ul>
        </section>

        <footer id="page-footer">
            <?php wp_footer();?>
        </footer>
    </div>
</body>
