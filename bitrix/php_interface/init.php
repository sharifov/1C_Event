<?php

AddEventHandler("iblock", "OnAfterIBlockElementUpdate", array("EventClass", "OnAfterIBlockElementUpdateHandler"));

class EventClass
{
	/**
	* события для "OnAfterIBlockElementUpdate"
	* @param array &$arFields
	* return void
	*/
	public function OnAfterIBlockElementUpdateHandler(&$arFields)
	{
		global $APPLICATION;
		if($arFields['ACTIVE'] == 'N' && $arFields['SHOW_COUNTER'] > 2) {
			$APPLICATION->throwException("Товар невозможно деактивировать, у него {$arFields['SHOW_COUNTER']} просмотров");
			return false;
		}
	}
}