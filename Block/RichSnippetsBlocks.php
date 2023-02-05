<?php
namespace PaulSolovyov\RichSnippets\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Registry;
use Magento\Framework\UrlInterface;

class RichSnippetsBlocks extends \Magento\Framework\View\Element\Template
{
    const ENABLED_DISABLED = 'richsnippets_section/rich_snippets_group/enable_disable_rich_snippets';
	const ORG_NAME = 'richsnippets_section/rich_snippets_group/org_name';
    const ORG_EMAIL_ADDRESS = 'richsnippets_section/rich_snippets_group/org_email_address';
    const ORG_PHONE_NUMBER = 'richsnippets_section/rich_snippets_group/org_phone_number';
    const ORG_FAX_NUMBER = 'richsnippets_section/rich_snippets_group/org_fax_number';
    const ORG_STREET_ADDRESS = 'richsnippets_section/rich_snippets_group/org_street_address';
    const ORG_POSTAL_CODE = 'richsnippets_section/rich_snippets_group/org_postal_code';
    const ORG_CITY = 'richsnippets_section/rich_snippets_group/org_city';
    const ORG_COUNTRY = 'richsnippets_section/rich_snippets_group/org_country';
    const ORG_IMAGE = 'richsnippets_section/rich_snippets_group/org_image';

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var Registry
     */
    protected $registry;

    /**
     * @var UrlInterface
     */
    protected $urlInterface;


    /**
     * @param Context $context
     * @param StoreManagerInterface $storeManager
     * @param ScopeConfigInterface $scopeConfig
     * @param Registry $registry
     * @param UrlInterface $urlInterface
     */
	public function __construct(
		Context $context,
        StoreManagerInterface $storeManager,
        ScopeConfigInterface $scopeConfig,
        Registry $registry,
        UrlInterface $urlInterface
	)
	{
		$this->storeManager = $storeManager;
        $this->scopeConfig = $scopeConfig;
        $this->registry = $registry;
        $this->urlInterface = $urlInterface;

		parent::__construct($context);
	}
    
    /**
     * @param string $configPath
     * @return string
     */
    protected function getConfig($configPath)
    {
        return strval($this->scopeConfig->getValue(
            $configPath,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        ));
    }

    /**
     * Check if plugin is enabled
     *
     * @return string
     */
    public function isRichSnippetsPluginEnabled()
    {
        return $this->getConfig(self::ENABLED_DISABLED);
    }

    /**
     * Get Business Name
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->getConfig(self::ORG_NAME);
    }

    /**
     * Get Business Email Address
     *
     * @return string
     */
    public function getBusinessEmailAddress()
    {
        return $this->getConfig(self::ORG_EMAIL_ADDRESS);
    }


    /**
     * Get Business Phone Number
     *
     * @return string
     */
    public function getBusinessPhoneNumber()
    {
        return $this->getConfig(self::ORG_PHONE_NUMBER);
    }

    /**
     * Get Business Fax Number
     *
     * @return string
     */
    public function getBusinessFaxNumber()
    {
        return $this->getConfig(self::ORG_FAX_NUMBER);
    }

    /**
     * Get Business Street Address
     *
     * @return string
     */
    public function getBusinessStreetAddress()
    {
        return $this->getConfig(self::ORG_STREET_ADDRESS);
    }

        /**
     * Get Business Postal Code
     *
     * @return string
     */
    public function getBusinessPostalCode()
    {
        return $this->getConfig(self::ORG_POSTAL_CODE);
    }


        /**
     * Get Business City
     *
     * @return string
     */
    public function getBusinessCity()
    {
        return $this->getConfig(self::ORG_CITY);
    }


    /**
     * Get Business Country
     *
     * @return string
     */
    public function getBusinessCountry()
    {
        return $this->getConfig(self::ORG_COUNTRY);
    }


    /**
     * Get Business Image
     *
     * @return string
     */
    public function getBusinessImageUrl()
    {
        return $this->getConfig(self::ORG_IMAGE);
    }

    /**
     * Get Site Url
     *
     * @return string
     */
    public function getSiteUrl()
    {
        /* @phpstan-ignore-next-line */
        return $this->storeManager->getStore()->getBaseUrl();
    }
}