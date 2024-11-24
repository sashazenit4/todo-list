<?php
/**
 * @var array $authFields
 */
?>
<div class="auth-window--wrapper">
    <div class="buttons--wrapper">
        <div class="auth-form-close-button"></div>
    </div>
    <form class="auth-form" method="post" action="">
        <div class="auth-input-block--wrapper">
            <?php
            foreach ($authFields as $field) {
                ?>
                <div class="auth-input--wrapper">
                    <label for="<?=$field['FIELD_ID']?>" class="auth-input--label">
                        <?=$field['FIELD_TITLE']?>
                    </label>
                    <input id="<?=$field['FIELD_ID']?>" name="<?=$field['FIELD_ID']?>" type="<?=$field['FIELD_TYPE']?>" class="auth-input">
                </div>
                <?php
            }
            ?>
        </div>
        <div class="auth-form-submit--wrapper">
            <button type="submit" class="auth-form-submit-button">Войти</button>
            <button type="button" class="auth-form-submit-button register-button">Зарегистрироваться</button>
        </div>
    </form>
</div>
<style>
<?=file_get_contents(__DIR__ . '/login-form.css')?>
</style>
