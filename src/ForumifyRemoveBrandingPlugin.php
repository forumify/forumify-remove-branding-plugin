<?php

declare(strict_types=1);

namespace Forumify\RemoveBranding;

use Forumify\Plugin\AbstractForumifyPlugin;
use Forumify\Plugin\PluginMetadata;

class ForumifyRemoveBrandingPlugin extends AbstractForumifyPlugin
{
    public function getPluginMetadata(): PluginMetadata
    {
        return new PluginMetadata(
            'Remove Branding',
            'forumify',
            'Removes forumify branding from your page and grants a license exception to do so.',
            'https://forumify.net',
        );
    }
}
