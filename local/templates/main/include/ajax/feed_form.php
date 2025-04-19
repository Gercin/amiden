<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

use Bitrix\Main\Application,
    Bitrix\Main\Loader,
    Bitrix\Highloadblock as HL,
    Bitrix\Main\Mail\Event;

$request = Application::getInstance()->getContext()->getRequest();
$data = $request->getPostList()->toArray();

$arFormFields = [
    'UF_NAME' => 'Имя',
    'UF_EMAIL' => 'E-mail',
    'UF_PHONE' => 'Номер телефона',
    'UF_TEXT' => 'Сообщение',
    'UF_SURNAME' => 'Фамилия',
    'UF_WORK' => 'Место работы',
    'UF_SPEC' => 'Специализация'
];

if ($data) {
    Loader::includeModule('highloadblock');

    $hlblock = HL\HighloadBlockTable::getById(HL_ID_FEEDBACK)->fetch();
    $entity = HL\HighloadBlockTable::compileEntity($hlblock);
    $entity_data_class = $entity->getDataClass();
    $arFields = [];

    if ($entity_data_class::add($data)) {
        echo json_encode(['success' => true]);

        if ($data['UF_POST_TYPE']) {

            $arFields['VALUE'] = '';
            foreach ($data as $code => $value) {
                if ($arFormFields[$code]) {
                    $arFields['VALUE'] .= '<p>'.$arFormFields[$code].' - '.$value.'</p> </br>';
                }
            }

            $dataEvent = [
                'EVENT_NAME' => $data['UF_POST_TYPE'],
                'LID' => 's1',
                'C_FIELDS' => $arFields,
            ];

            Event::send($dataEvent);
        }
    } else {
        echo json_encode(['success' => false]);
    }
}
