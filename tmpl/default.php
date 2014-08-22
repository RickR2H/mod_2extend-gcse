<?php
/**
 * @copyright	Copyright (c) 2014 R2H B.V. (http://www.r2h.nl). All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Grab parameters
$gcsekey = $params->get('gcsekey');
$gcsestyle = $params->get('gcsestyle');

// Include files
JHtml::_('script', 'mod_2extend-gcse/script.js', array(), true);
JHtml::_('stylesheet', 'mod_2extend-gcse/' . $gcsestyle . '', array(), true);

// $document = JFactory::getDocument();
// Include stylesheet from module folder
// $document->addStyleSheet('modules/mod_2extend-gcse/test.css', array(), true);
// Style added in style-tag in the body
// $style = 'p {background-color:#000000 !important;}';
//$document->addStyleDeclaration( $style );

?>

<div class="gsearch">
<script>
  (function() {
    var cx = '<?php echo $gcsekey; ?>';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search linktarget="_parent"></gcse:search>
</div>