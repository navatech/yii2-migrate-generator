<?php
namespace navatech\migration;

use yii\base\Application;
use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface {

	/**
	 * Bootstrap method to be called during application bootstrap stage.
	 *
	 * @param Application $app the application currently running
	 */
	public function bootstrap($app) {
		if ($app->hasModule('gii')) {
			if (!isset($app->getModule('gii')->generators['migration'])) {
				$app->getModule('gii')->generators['migration'] = 'navatech\migration\gii\Generator';
			}
		}
	}
}
