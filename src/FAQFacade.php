<?php
namespace Hamahang\FAQ;
use Illuminate\Support\Facades\Facade;

class FAQFacade extends Facade
{
	protected static function getFacadeAccessor() {
		return 'FAQ';
	}
}