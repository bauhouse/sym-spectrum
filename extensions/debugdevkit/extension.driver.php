<?php
	
	class Extension_DebugDevKit extends Extension {
	/*-------------------------------------------------------------------------
		Definition:
	-------------------------------------------------------------------------*/
		
		public static $active = false;
		
		public function about() {
			return array(
				'name'			=> 'Debug DevKit',
				'version'		=> '1.0.1',
				'release-date'	=> '2009-05-20',
				'author'		=> array(
					'name'			=> 'Rowan Lewis',
					'website'		=> 'http://pixelcarnage.com/',
					'email'			=> 'rowan@pixelcarnage.com'
				)
			);
		}
		
		public function getSubscribedDelegates() {
			return array(
				array(
					'page'		=> '/frontend/',
					'delegate'	=> 'FrontendDevKitResolve',
					'callback'	=> 'frontendDevKitResolve'
				),
				array(
					'page'		=> '/frontend/',
					'delegate'	=> 'ManipulateDevKitNavigation',
					'callback'	=> 'manipulateDevKitNavigation'
				)
			);
		}
		
		public function frontendDevKitResolve($context) {
			if (isset($_GET['debug'])) {
				require_once(EXTENSIONS . '/debugdevkit/content/content.debug.php');
				
				$context['devkit'] = new Content_DebugDevKit_Debug();
				self::$active = true;
				
			} else if (isset($_GET['debug-edit'])) {
				require_once(EXTENSIONS . '/debugdevkit/content/content.debug.php');
				require_once(EXTENSIONS . '/debugdevkit/content/content.edit.php');
				
				$context['devkit'] = new Content_DebugDevKit_Edit();
				self::$active = true;
			}
		}
		
		public function manipulateDevKitNavigation($context) {
			$xml = $context['xml'];
			$item = $xml->createElement('item');
			$item->setAttribute('name', __('Debug'));
			$item->setAttribute('handle', 'debug');
			$item->setAttribute('active', (self::$active ? 'yes' : 'no'));
			
			$xml->documentElement->appendChild($item);
		}
	}
	
?>