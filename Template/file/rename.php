<?php
$params = array('file_id' => $file['id'], 'plugin' => 'EnableAttachmentRenaming');
if (isset($file["task_id"]))
{
    $params["task_id"] = $file["task_id"];
}
?>

<form method="post" action="<?= $this->url->href('AttachmentHandler', 'update', $params) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>
    <?= $this->form->label(t('Name'), 'name') ?>
    <?= $this->form->text('name', array('name' => $file['name']), array(), array('required', 'autofocus', 'tabindex="1"')) ?>
    <?= $this->modal->submitButtons(array('tabindex' => 13)) ?>
</form>