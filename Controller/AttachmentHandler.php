<?php

namespace Kanboard\Plugin\EnableAttachmentRenaming\Controller;

use Kanboard\Controller\BaseController;

class AttachmentHandler extends BaseController
{
    public function rename()
    {
        $file = $this->getFile();

        $this->response->html($this->template->render('EAR:file/rename', array(
            'file' => $file,
        )));
    }

    public function update()
    {
        $file = $this->getFile();

        $values = $this->request->getValues();

        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        if ($values['name'])
        {
            if ($ext != pathinfo($values['name'], PATHINFO_EXTENSION))
            {
                $values['name'] .= "." . $ext;
            }

            $this->db->startTransaction();
            if (isset($file["task_id"])) {
                $this->db->table('task_has_files')->eq('id', $file['id'])->save($values);
            }
            else
            {
                $this->db->table('project_has_files')->eq('id', $file['id'])->save($values);
            }
            $this->db->closeTransaction();

            $this->flash->success(t('Success'));
            $this->response->redirect("", true);
        }
        else
        {
            $this->flash->failure(t('Empty name not allowed'));
        }
    }
}
