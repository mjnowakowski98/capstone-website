<?php
    $skipVars = isset($skipVars) ? $skipVars : null;
    foreach($_GET as $getKey => &$getValue):
?>
<input type="hidden" name="<?php echo $getKey; ?>" value="<?php echo $getValue; ?>">
<?php endforeach; ?>