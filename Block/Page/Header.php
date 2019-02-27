<?php

namespace Marlosoft\BackendImage\Block\Page;

use Magento\Backend\Model\UrlInterface;
use Marlosoft\BackendImage\Helper\Data;

/**
 * Class Header
 * @package Marlosoft\BackendImage\Block\Page
 * @property Data $_backendData
 */
class Header extends \Magento\Backend\Block\Page\Header
{
    /** @var string $customPath */
    private $customPath;

    /** @return void */
    protected function _construct()
    {
        parent::_construct();
        $this->customPath = $this->_backendData->getCustomPath($this->getData('show_part_size'));
    }

    /** @return bool */
    public function hasLogoImageSrc()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        return empty($this->customPath) ? parent::hasLogoImageSrc() : true;
    }

    /** @return string */
    public function getLogoImageSrc()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        return empty($this->customPath) ? parent::getLogoImageSrc() : $this->customPath;
    }

    /**
     * @param string $fileId
     * @param array $params
     * @return string
     */
    public function getViewFileUrl($fileId, array $params = [])
    {
        if (empty($this->customPath)) {
            return parent::getViewFileUrl($fileId, $params);
        }

        $mediaUrl = $this->_urlBuilder->getBaseUrl(['_type' => UrlInterface::URL_TYPE_MEDIA]);
        return  $mediaUrl . Data::UPLOAD_DIRECTORY . $this->customPath;
    }
}
