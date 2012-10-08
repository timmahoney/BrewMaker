<?php bm_get_template_part("header"); ?>

<?php echo "herro"; ?>

<?php bm_get_template_part("footer"); ?>
<?php echo $wpdb->num_queries; ?> <?php _e('queries'); ?>. <?php timer_stop(1); ?> <?php _e('seconds'); ?>