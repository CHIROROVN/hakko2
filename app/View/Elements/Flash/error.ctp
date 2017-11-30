<div id="errorMessage" class="<?php echo !empty($params['class']) ? $params['class'] : 'message'; ?>">
<a id="closeMessage" title="Message"  href="#" onClick="document.getElementById('errorMessage').setAttribute('style','display: none;');">&times;</a>
<span><?php echo $message; ?></span>
</div>