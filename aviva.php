<?php
/*
Plugin Name: aviva
Plugin URI: https://localhost
Description: hello world - wir schreiben ein einfaches WP-Plugin
Version: 1.0
Author: Aviva
Author URI: https://localhost
*/


const PLUGIN_TABLE_PFX = "aviva_";

add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
    add_menu_page( 'My Top Level Menu Example', 'Top Level Menu', 'manage_options', 'myplugin/myplugin-admin-page.php', 'myplguin_admin_page', 'dashicons-tickets', 6  );
}

function myplguin_admin_page(){
    ?>
    <div class="wrap">
        <h2>Welcome To My Plugin!!</h2>
        <?php
        echo "<form action='".get_admin_url()."admin-post.php' method='post'>";

        echo "<input type='hidden' name='action' value='aviva-testbutton' />";
        echo "<input type='submit' value='Click me'/>";


        echo "</form>";
        ?>

    </div>
    <?php
}

add_action('admin_post_aviva-testbutton', '_handle_form_action'); // If the user is logged in
add_action('admin_post_nopriv_aviva-testbutton', '_handle_form_action'); // If the user in not logged in
function _handle_form_action(){

    // include Barcode39 class
    include "lib/Barcode39.php";
    $bc = new Barcode39("Aviva");
    $bc->draw(ABSPATH . 'wp-content/plugins/aviva/img/barcode.gif');
    echo "Created barcode!!";
    //echo "<img src=''></img>";


    require "lib/fpdf/fpdf.php";
    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Hallo Welt!');
    $pdf->Output(ABSPATH . 'wp-content/plugins/aviva/img/barcode.pdf', 'F');

    echo "get voucher5";
    //insert_voucher("kajsndkjasdökjh");
    get_voucher("kajsndkjasdökjh");
}

function create_schema()
{
    global $wpdb;

    echo "\n creating schema...neu3!";

    $table_name = $wpdb->prefix . PLUGIN_TABLE_PFX."vouchers";

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
      id mediumint(9) NOT NULL AUTO_INCREMENT,
      issued datetime NOT NULL,
      expires datetime,  
      redeemed datetime,
      value mediumint(9) NOT NULL,
      code VARCHAR(20) NOT NULL,
      PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}

