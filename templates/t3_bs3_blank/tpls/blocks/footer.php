<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$sitename = $app->get('sitename');
?>

<!-- FOOTER -->
<footer id="t3-footer" class="footer">

	<?php if ($this->checkSpotlight('footnav', 'footer-1, footer-2, footer-3, footer-4, footer-5, footer-6')) : ?>
		<!-- FOOT NAVIGATION -->
		<div class="container">
			<?php $this->spotlight('footnav', 'footer-1, footer-2, footer-3, footer-4, footer-5, footer-6') ?>
          <div class="copyright"><center> <span>&copy; <?php echo date('Y'); ?> <?php echo $sitename; ?> technical support services </span></center>
          </div>
		</div>
		<!-- //FOOT NAVIGATION -->
	<?php endif ?>
                
        
	

        
       
       </footer>
<!-- //FOOTER -->