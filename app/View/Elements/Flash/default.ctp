<div id="<?php echo $key; ?>" class="<?php echo !empty($params['class']) ? $params['class'] : 'message'; ?>">
<a id="closeMessage" title="Message"  href="#" onClick="document.getElementById('<?php echo $key; ?>').setAttribute('style','display: none;');">&times;</a>
<span><?php echo $message; ?></span>
</div>
     