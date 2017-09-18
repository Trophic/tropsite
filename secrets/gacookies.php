<!--
<?php
 /* This cookie is used to keep my internal traffic from my machine out of google analytics */
    $expire_time = time() + 60 * 60 * 24 * 30;
/* it has an expire time of 60 seconds * 60 minutes * 24 hours * 30 days aka 1 month */
    setcookie( 'user_is_admin', 'true', $expire_time, '/' );
?>
-->
