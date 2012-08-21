<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter SM
 * @author		Diego Alexander Londoño Marín
 * @copyright           Copyright (c) 2012
 * @license		http://smdigital.com.co
 * @link		http://smdigital.com.co
 * @since		Version 1.0
 * @filesource
 */
class Guid {

    public function __construct() {
        log_message('debug', "GUID Class Initialized");
    }

    /**
     * Generate the GUID
     *
     * @access	public
     * @return	string
     */
    function generate() {
        return sprintf('%04x%04x-%04x-%03x4-%04x-%04x%04x%04x', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 4095), bindec(substr_replace(sprintf('%016b', mt_rand(0, 65535)), '01', 6, 2)), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

}

?>
