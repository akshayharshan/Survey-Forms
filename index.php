<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Oriental_Bakery
 */

get_header();
?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Redirect to the desired page
    window.location.href = "<?php echo  home_url(); ?>";
  });
</script>
<?php

?>
<?php
get_footer();
