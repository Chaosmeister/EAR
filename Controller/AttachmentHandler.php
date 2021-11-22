<?php

namespace Kanboard\Plugin\EAR\Controller;

use Kanboard\Controller\BaseController;

class AttachmentHandler extends BaseController
{
    public function rename()
    {
        $task = $this->getTask();
        $file = $this->getFile();

        $this->response->html($this->template->render('EAR:task_file/rename', array(
            'task' => $task,
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

            $this->db->table('task_has_files')->eq('id', $file['id'])->save($values);

            $this->flash->success(t('Success'));

            $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $file['task_id'])));
        }
        else
        {
            $this->flash->failure(t('Empty name not allowed'));
        }
    }
}
