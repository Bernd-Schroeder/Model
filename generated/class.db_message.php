<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.db_message.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 19.08.2014, 16:00:15 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 127-0-0-1-2031f3ec:1458fb4a561:-8000:0000000000001912-includes begin
// section 127-0-0-1-2031f3ec:1458fb4a561:-8000:0000000000001912-includes end

/* user defined constants */
// section 127-0-0-1-2031f3ec:1458fb4a561:-8000:0000000000001912-constants begin
// section 127-0-0-1-2031f3ec:1458fb4a561:-8000:0000000000001912-constants end

/**
 * Short description of class db_message
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class db_message
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute error_code
     *
     * @access public
     * @var Integer
     */
    public $error_code = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_error_code()
    {
     $old_code = $this->error_code;
     $this->reset();
     $this->serialize();
     return $old_code;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  error_code
     */
    public function set_error_code($error_code)
    {
     $this->error_code = $error_code;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function reset()
    {
     $this->error_code = 0;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function serialize()
    {
     ;
    }
}?>