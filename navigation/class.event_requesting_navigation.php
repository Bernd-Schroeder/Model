<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.event_requesting_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 13.03.2015, 11:58:36 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_event_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_event_navigation.php');

/* user defined includes */
// section 10-5-23-101-f92c928:149f25ea7a4:-8000:000000000000197C-includes begin
// section 10-5-23-101-f92c928:149f25ea7a4:-8000:000000000000197C-includes end

/* user defined constants */
// section 10-5-23-101-f92c928:149f25ea7a4:-8000:000000000000197C-constants begin
// section 10-5-23-101-f92c928:149f25ea7a4:-8000:000000000000197C-constants end

/**
 * Short description of class event_requesting_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class event_requesting_navigation
    extends basic_event_navigation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function generate_top_navigation()
    {
     $navigation_list = new navigation_list();
     return $navigation_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function generate_left_navigation()
    {
     $navigation_list = parent::generate_left_navigation();
     
     // 1001 remove_member_event_inquiry 
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1001 );
     $first_level_item->set_link( "D" );
     $first_level_item->set_text( "D1001" );
     $first_level_item->set_icon_name( "erase.png" );
     $navigation_list->add_item( $first_level_item );
     
     return $navigation_list;
    }
}?>