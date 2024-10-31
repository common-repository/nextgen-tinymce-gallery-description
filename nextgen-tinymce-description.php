<?php
/*
Plugin Name: NextGen TinyMCE Gallery Description
Plugin URI: http://wordpress.org/plugins/nextgen-tinymce-description/
Description: add TinyCME to NextGEN gallery description
Author: Dominik Matus (Marco Buttarini & Giorgio Martello & Andrea Brugnolo) 
Version: 1.0
Author URI: http://dominikmatus.cz
*/

if( !empty($_SERVER['SCRIPT_FILENAME']) && __FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('direct access not alowed '); }

if( is_admin() && isset($_GET['page']) && $_GET['page'] == 'nggallery-manage-gallery' ){

    add_filter('admin_head','load_tiny_mce_editor2');
    add_action('admin_footer', 'load_nextgen_gallery_tinymce');
    
    function load_nextgen_gallery_tinymce(){
    ?>
        <script type="text/javascript"> 

			jQuery(document).ready(function(){ 
				
                tinyMCE.init({
                    mode : "exact",
                    elements: "gallery_description",
                    width:"100%",
                    height:"200",
                    theme:"modern",
                    plugins: "link code", 
                    toolbar: "undo redo | code | bold italic | link "                     
                });             

            });
            </script>   
        
    <?php 
    
    } 

function load_tiny_mce_editor2() {
echo '<script  type="text/javascript" src="' . plugins_url( 'tinymce/tinymce.min.js' , __FILE__ ) . '"></script>';
        }
    }
?>