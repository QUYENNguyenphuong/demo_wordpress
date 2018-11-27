<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 11/26/2018
 * Time: 11:17 PM
 */
?>
<h1>Welcome to User Page</h1>
<hr>
<?php
$user_name  = $wpdb->get_results("SELECT *  FROM $wpdb->user_name"); ?>
<ul>
<?php foreach ($user_name as $item ): ?>
<li><?php echo $item->username ?></li>
<hr>
<?php endforeach;?>
</ul>
