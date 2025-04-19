<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) { die(); } ?>
<form class="form-block__form form" id="form-main" data-type="js-form" data-url="<?= SITE_TEMPLATE_PATH . '/include/ajax/feed_form.php' ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" data-type="get-field" data-uf="UF_TITLE" value="<?= $APPLICATION->ShowTitle(false) ?>">
    <input type="hidden" data-type="get-field" data-uf="UF_PAGE" value="Страница - <?= $host; ?><?= $arPath; ?>">
    <input type="hidden" data-type="get-field" data-uf="UF_POST_TYPE" value="FEEDBACK">
    <input type="hidden" data-type="get-field" data-uf="UF_FORM" value="feed_form">
    <div class="form__wr">
        <div class="form__col">
            <div class="form__item">
                <input type="text" class="form-input with-label" data-type="get-field" data-uf="UF_NAME" data-reset="y" required>
                <label class="form-label">Имя</label>
            </div>
        </div>
        <div class="form__col">
            <div class="form__item">
                <input type="text" class="form-input with-label" data-type="get-field" data-uf="UF_SURNAME" data-reset="y" required>
                <label class="form-label">Фамилия</label>
            </div>
        </div>
        <div class="form__col">
            <div class="form__item">
                <input type="email" id="email" class="form-input with-label" data-type="get-field" data-uf="UF_EMAIL" data-reset="y" >
                <label class="form-label" for="email">E-mail</label>
            </div>
        </div>
        <div class="form__col">
            <div class="form__item">
                <input type="text" type="tel" class="form-input with-label phone-masked" data-type="get-field" data-uf="UF_PHONE" data-reset="y" required>
                <label class="form-label" for="tel">Номер телефона</label>
            </div>
        </div>
        <div class="form__col form__col--full">
            <div class="form__item form__item--textarea">
                <textarea class="form-textarea with-label" id="text" name="" data-type="get-field" data-uf="UF_TEXT" data-reset="y"></textarea>
                <label class="form-label " for="text">Сообщение</label>
            </div>
        </div>
        <div class="form__col form__col--full">
            <div class="form__item form__item--checkbox form__item--agree">
                <div class="checkbox">
                    <input type="checkbox" value="Y" name="checkbox" id="checkbox" onclick="" class="checkbox__input" checked="" required="">
                    <label class="checkbox__label link-orange" for="checkbox">
                          <span class="checkbox__label-text" title="">
                                Нажимая на кнопку Отправить, я соглашаюсь с <a href="<?= $arMainOptions['UF_PRIVACY_POLICY_FILE_PATH'];?>" target="_blank">условиями обработки персональных данных</a>
                          </span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="form__btn">
        <button type="submit" class="btn btn--orange">Отправить</button>
    </div>
</form>
<a data-fancybox href="#form_main_resp" style="display: none;"></a>
<div class="popup-form" style="display: none; width: 50%;" id="form_main_resp" data-type="form_resp">
    <b>Форма успешно отправлена</b>
</div>