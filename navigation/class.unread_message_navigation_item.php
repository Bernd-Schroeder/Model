<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.unread_message_navigation_item.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 15.06.2015, 21:03:37 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_item
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.basic_item.php');

/* user defined includes */
// section 10-5-28--57--2d64fbf4:14df89602fe:-8000:0000000000002B4E-includes begin
// section 10-5-28--57--2d64fbf4:14df89602fe:-8000:0000000000002B4E-includes end

/* user defined constants */
// section 10-5-28--57--2d64fbf4:14df89602fe:-8000:0000000000002B4E-constants begin
// section 10-5-28--57--2d64fbf4:14df89602fe:-8000:0000000000002B4E-constants end

/**
 * Short description of class unread_message_navigation_item
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class unread_message_navigation_item
    extends basic_item
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     parent::__construct();
     $this->set_always_visible( TRUE );
     $this->set_show_value( TRUE );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function get_validate_value($item)
    {
    /*****change************/

     return $item->get_receiver_unread_all_message_list_count();
    }
}?>