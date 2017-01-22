<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.db_warning.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 28.10.2014, 15:43:17 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include db_message
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.db_message.php');

/* user defined includes */
// section 127-0-0-1-2031f3ec:1458fb4a561:-8000:0000000000001925-includes begin
// section 127-0-0-1-2031f3ec:1458fb4a561:-8000:0000000000001925-includes end

/* user defined constants */
// section 127-0-0-1-2031f3ec:1458fb4a561:-8000:0000000000001925-constants begin
// section 127-0-0-1-2031f3ec:1458fb4a561:-8000:0000000000001925-constants end

/**
 * Short description of class db_warning
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class db_warning
    extends db_message
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load()
    {
     if(isset($_SESSION['database_warning']))
     { $this->set_error_code($_SESSION['database_warning']); }
     else
     { $this->reset(); }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function serialize()
    {
     $_SESSION['database_warning'] = $this->error_code;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function found()
    {
     $this->error_code = 1;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function not_found()
    {
     $this->error_code = 2;
    }
    
    public function file_too_big()
    {
     $this->error_code = 5;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function filetype_not_allowed()
    {
     $this->error_code = 6;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function upload_file_error()
    {
     $this->error_code = 7;
    }

    public function csv_width_error()
    {
     $this->error_code = 8;
    }

    public function csv_line_error()
    {
     $this->error_code = 9;
    }
}?>