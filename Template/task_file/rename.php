<form method="post" action="<?= $this->url->href('AttachmentHandler', 'update', array('task_id' => $task['id'], 'file_id' => $file['id'], 'plugin' => 'EAR')) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>
    <?= $this->form->label(t('Name'), 'name') ?>
    <?= $this->form->text('name', array('name' => $file['name']), array(), array('required', 'autofocus', 'tabindex="1"')) ?>
    <?= $this->modal->submitButtons(array('tabindex' => 13)) ?>
</form>