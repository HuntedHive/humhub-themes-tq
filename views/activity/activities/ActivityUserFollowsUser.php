<?php

/**
 * View File for the ActivityStreamWidget
 *
 * @uses CActiveDataProvider $dataProvider The data provider for this model
 * @uses User $model The user model
 */
?>
<?php $this->beginContent('application.modules_core.activity.views.activityLayout', array('activity' => $activity)); ?>

<?php echo Yii::t('ActivityModule.views_activities_ActivityUserFollowsUser', '<i class="fa fa-users" style="margin-right: 5px;color: #1895a4;vertical-align: middle;"></i> {user1} now follows {user2}.', array(
    '{user1}' => '<strong>' . CHtml::encode($user->displayName) . '</strong>',
    '{user2}' => '<strong>' . CHtml::encode($target->displayName) . '</strong>',
));
?>

<?php $this->endContent(); ?>
