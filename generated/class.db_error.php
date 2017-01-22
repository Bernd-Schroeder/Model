<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.db_error.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 28.10.2014, 15:42:59 with ArgoUML PHP module 
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
// section 127-0-0-1-2031f3ec:1458fb4a561:-8000:0000000000001923-includes begin
// section 127-0-0-1-2031f3ec:1458fb4a561:-8000:0000000000001923-includes end

/* user defined constants */
// section 127-0-0-1-2031f3ec:1458fb4a561:-8000:0000000000001923-constants begin
// section 127-0-0-1-2031f3ec:1458fb4a561:-8000:0000000000001923-constants end

/**
 * Short description of class db_error
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class db_error
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
     if(isset($_SESSION['database_error']))
     { $this->set_error_code($_SESSION['database_error']); }
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
     $_SESSION['database_error'] = $this->error_code;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function success()
    {
     $this->error_code = 0;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function insert_error()
    {
     $this->error_code = 1;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_error()
    {
     $this->error_code = 2;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function update_error()
    {
     $this->error_code = 3;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function delete_error()
    {
     $this->error_code = 4;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
}?>