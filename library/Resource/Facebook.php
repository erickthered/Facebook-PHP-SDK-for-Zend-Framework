<?php
/**
 * The object returned will go in the resources repository, and it will be accessible with the $bootstrap->getResource('custom') call in the other resources. (hint: is case insensitive) 
 */
class Facebook_Resource_Facebook extends Zend_Application_Resource_ResourceAbstract
{
	const DEFAULT_REGISTRY_KEY = 'Facebook';
	
	protected $_appid;
	protected $_secret;	
	protected $_perms = "email,publish_stream";
	
	/**
	 * Enter description here ...
	 * @param unknown_type $value
	 */
	public function setAppid($value)
	{
		$this->_appid = $value;
	}

	/**
	 * Enter description here ...
	 * @param unknown_type $value
	 */
	public function setSecret($value)
	{
		$this->_secret = $value;
	}
	
	/**
	 * Enter description here ...
	 * @param unknown_type $value
	 */
	public function setPerms($value)
	{
		$this->_perms = $value;
	}

	/**
	 * (non-PHPdoc)
	 * @see Zend_Application_Resource_Resource::init()
	 */
	public function init() {
		if ($this->_appid && $this->_secret) {
			$facebook = new Facebook_Facebook(array (
				'appId' => $this->_appid,
				'secret' => $this->_secret,
				'req_perms' => $this->_perms,
				'cookie' => true
			));
			Zend_Registry::set(self::DEFAULT_REGISTRY_KEY, $facebook);
			return $facebook;
		}
		return null;
    }
}