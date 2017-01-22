<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_same_group_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 11.11.2014, 11:02:16 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_member_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_member_navigation.php');

/* user defined includes */
// section -64--88--78-21--6107c2e2:1418981d7d7:-8000:0000000000001651-includes begin
// section -64--88--78-21--6107c2e2:1418981d7d7:-8000:0000000000001651-includes end

/* user defined constants */
// section -64--88--78-21--6107c2e2:1418981d7d7:-8000:0000000000001651-constants begin
// section -64--88--78-21--6107c2e2:1418981d7d7:-8000:0000000000001651-constants end

/**
 * Short description of class member_same_group_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_same_group_navigation
    extends basic_member_navigation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function generate_top_navigation()
    {
     $navigation_list = new navigation_list();
     // private information
     $item = new basic_navigation_item();
     $item->set_id( (int)4 );
     $item->set_link( "B" );
     $item->set_text( "B4" );
     $navigation_list->add_item( $item );
     
     // message
     $item = new message_navigation_item();
     $item->set_id( (int)6 );
     $item->set_link( "B" );
     $item->set_text( "B6" );
     $navigation_list->add_item( $item );
     
     return $navigation_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  visited
     * @param  visitor
     */
    public function generate_left_member_navigation($visited, $visitor)
    {
     $navigation_list = $this->generate_left_navigation();
     
     $admin_ist = $this->
     generate_left_admin_navigation( $visited, $visitor );
     $navigation_list->add_list( $admin_ist, (int)0 );
     
     return $navigation_list;
    }
}?>