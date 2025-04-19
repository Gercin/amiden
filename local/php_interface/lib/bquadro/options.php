<?php

namespace company;

use \Bitrix\Highloadblock\HighloadBlockTable,
    \Bitrix\Main\Type\Dictionary,
    \CModule;

class Options
{
    private static $_instance = null;

    /** @var Settins */
    protected $settings = null;


    private function __construct()
    {
    }

    protected function __clone()
    {
    }

    static public function getInstance()
    {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function getSettings()
    {
        if (is_null( $this->settings)) {
            if (CModule::IncludeModule('highloadblock')) {
                $arHLBlock = HighloadBlockTable::getById(HL_ID_OPTIONS)->fetch();
                $obEntity = HighloadBlockTable::compileEntity($arHLBlock);
                $strEntityDataClass = $obEntity->getDataClass();
                $rsData = $strEntityDataClass::getList([
                    'select' => ['*'],
                ]);

                while ($arData = $rsData->Fetch()) {
                    $result = $arData;
                }

                $this->settings = new Dictionary($result);
            }
        }
        return $this->settings;
    }
}
