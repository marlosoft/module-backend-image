<?php

namespace Marlosoft\BackendImage\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Class Data
 * @package Marlosoft\BackendImage\Helper
 */
class Data extends \Magento\Backend\Helper\Data
{
    const LOGO = 'logo';
    const SIZE_LOGO = 'logo';
    const SIZE_ICON = 'icon';
    const UPLOAD_DIRECTORY = 'admin/backend_image/';
    const LOGO_CONFIG_PATH = 'admin/backend_image/logo';
    const ICON_CONFIG_PATH = 'admin/backend_image/icon';

    /**
     * @param string $size
     * @return string|null
     */
    public function getCustomPath($size)
    {
        if ($size === self::SIZE_LOGO) {
            return $this->getCustomLogo();
        }

        if ($size === self::SIZE_ICON) {
            return $this->getCustomIcon();
        }

        return null;
    }

    /** @return string */
    private function getCustomLogo()
    {
        return $this->scopeConfig->getValue(self::LOGO_CONFIG_PATH, ScopeConfigInterface::SCOPE_TYPE_DEFAULT);
    }

    /** @return string */
    private function getCustomIcon()
    {
        return $this->scopeConfig->getValue(self::ICON_CONFIG_PATH, ScopeConfigInterface::SCOPE_TYPE_DEFAULT);
    }
}
