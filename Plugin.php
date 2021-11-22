<?php

namespace Kanboard\Plugin\EAR;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach("template:task-file:images:dropdown", "EAR:image/rename");
    }

    public function getClasses()
    {
        return [
            'Plugin\EAR\Model' => [
                'TaskFileModelEx'
            ]
        ];
    }

    public function getPluginName()
    {
        return 'EnableAttachmentRenaming';
    }

    public function getPluginDescription()
    {
        return 'Add a Button to enable renaming of attachments';
    }

    public function getPluginAuthor()
    {
        return 'Tomas Dittmann';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }
}
