<?php
$params = array('file_id' => $file['id'], 'plugin' => 'EnableAttachmentRenaming');
if (isset($file["task_id"]))
{
    $params["task_id"] = $file["task_id"];
}
elseif (isset($file["project_id"]))
{
    $params["project_id"] = $file["project_id"];
}
?>
<li>
<?=$this->modal->medium('edit', t('Rename'), 'AttachmentHandler', 'rename', $params);?>
</li>
