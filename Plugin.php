<?php

namespace Kanboard\Plugin\EnableAttachmentRenaming;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach("template:task-file:images:dropdown", "EnableAttachmentRenaming:rename/attachment");
        $this->template->hook->attach("template:task-file:documents:dropdown", "EnableAttachmentRenaming:rename/attachment");
        
        $this->template->hook->attach("template:project-overview:images:dropdown", "EnableAttachmentRenaming:rename/attachment");
        $this->template->hook->attach("template:project-overview:documents:dropdown", "EnableAttachmentRenaming:rename/attachment");
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
        return '1.1.2';
    }
    
    public function getPluginHomepage()
    {
        return "https://github.com/Chaosmeister/EAR";
    }
    
    public function getCompatibleVersion()
    {
        return '>=1.2.23';
    }
}
