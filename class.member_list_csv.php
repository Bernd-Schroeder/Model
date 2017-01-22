<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_list_csv.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.11.2016, 20:24:57 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_member_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_member_list.php');

/* user defined includes */
// section 10-30--8--14--24d40fa0:15848c1adb9:-8000:00000000000017BB-includes begin
// section 10-30--8--14--24d40fa0:15848c1adb9:-8000:00000000000017BB-includes end

/* user defined constants */
// section 10-30--8--14--24d40fa0:15848c1adb9:-8000:00000000000017BB-constants begin
// section 10-30--8--14--24d40fa0:15848c1adb9:-8000:00000000000017BB-constants end

/**
 * Short description of class member_list_csv
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_list_csv
    extends generated_member_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute mail_address
     *
     * @access public
     * @var String
     */
    public $mail_address = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  mail_address
     */
    public function set_mail_address($mail_address)
    {
     $this->mail_address = $mail_address;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $this->stmt->bind_param('s', $this->mail_address);
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load()
    {
     $where_statement =
     "WHERE (mail_address=?)";
     return $this->list_load( $where_statement );
    }
    
    public function get_member()
    {
     $this->load();
     if( $this->get_item_count() > (int)0 )
     { return $this->get_item( (int)0 ); }
     else
     { return NULL; }
    }
}?>