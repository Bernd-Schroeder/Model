<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.basic_db.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 03.12.2016, 12:35:23 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include db_error
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.db_error.php');

/**
 * include db_warning
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.db_warning.php');

/* user defined includes */
// section -64--88--78-21--57e776b7:13c0cc3c6c8:-8000:000000000000110A-includes begin
// section -64--88--78-21--57e776b7:13c0cc3c6c8:-8000:000000000000110A-includes end

/* user defined constants */
// section -64--88--78-21--57e776b7:13c0cc3c6c8:-8000:000000000000110A-constants begin
// section -64--88--78-21--57e776b7:13c0cc3c6c8:-8000:000000000000110A-constants end

/**
 * Short description of class basic_db
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class basic_db
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute db_error
     *
     * @access protected
     * @var Integer
     */
    protected $db_error = null;

    /**
     * Short description of attribute db_warning
     *
     * @access protected
     * @var Integer
     */
    protected $db_warning = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function __construct()
    {
     $this->db_error = new db_error();
     $this->db_warning = new db_warning();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_db_error()
    {
     return $this->db_error;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_db_warning()
    {
     return $this->db_warning;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root()
    {
     return dirname(dirname(dirname(__FILE__))) . '';
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root_control()
    {
     return $this->get_root() . '/control/';
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_format_class()
    {
     if( defined('__ROOT__') == FALSE )
     { define('__ROOT__', $this->get_root() ); }
     require_once('class.basic_db_format_class.php');
     
     return new basic_db_format_class();
    }
}?>