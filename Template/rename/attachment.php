<?php
$params = array('file_id' => $file['id'], 'plugin' => 'EAR');
if (isset($file["task_id"]))
{
    $params["task_id"] = $file["task_id"];
}
?>
<li>
<?=$this->modal->medium('edit', t('Rename'), 'AttachmentHandler', 'rename', $params);?>
</li>