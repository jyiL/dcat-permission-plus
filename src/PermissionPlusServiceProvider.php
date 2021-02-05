<?php

namespace Dcat\Admin\PermissionPlus;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class PermissionPlusServiceProvider extends ServiceProvider
{
	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//

	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
