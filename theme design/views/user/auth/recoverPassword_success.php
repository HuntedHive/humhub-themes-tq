<div class="container" style="text-align: center;">
    <?php $this->widget('application.widgets.LogoWidget', array('place' => 'login')); ?>
    <br>
    <div class="row">
        <div class="panel panel-default animated fadeIn" style="max-width: 300px; margin: 0 auto 20px;">
            <div class="panel-heading"><?php echo Yii::t('UserModule.views_auth_recoverPassword_success', '<strong>Password</strong> recovery!'); ?></div>
            <div class="panel-body">
                <p><?php echo Yii::t('UserModule.views_auth_recoverPassword_success', "We’ve sent you an email containing a link that will allow you to reset your password."); ?></p><br/>
                <a href="<?php echo $this->createUrl('//') ?>" class="btn btn-primary"><?php echo Yii::t('UserModule.views_auth_recoverPassword_success', 'back to home') ?></a>
            </div>
        </div>
    </div>
</div>