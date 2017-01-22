<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_without_connection_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 12.03.2015, 08:37:14 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_team_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_team_navigation.php');

/* user defined includes */
// section -64--88--78-21--6107c2e2:1418981d7d7:-8000:000000000000167F-includes begin
// section -64--88--78-21--6107c2e2:1418981d7d7:-8000:000000000000167F-includes end

/* user defined constants */
// section -64--88--78-21--6107c2e2:1418981d7d7:-8000:000000000000167F-constants begin
// section -64--88--78-21--6107c2e2:1418981d7d7:-8000:000000000000167F-constants end

/**
 * Short description of class team_without_connection_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_without_connection_navigation
    extends basic_team_navigation
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
     * @author Bernd Schröder
     * @version 1.0
     */
    public function generate_left_navigation()
    {
     $navigation_list = parent::generate_left_navigation();
     
     /************************************************************/
     
     // //1000 ask_member_team_connection
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1000 );
     $first_level_item->set_link( "C" );
     $first_level_item->set_text( "C1000" );
     $first_level_item->set_icon_name( "connection.png" );
     $navigation_list->add_item( $first_level_item );
     
     return $navigation_list;
    }
}?>