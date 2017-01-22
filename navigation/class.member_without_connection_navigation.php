<?php

error_reporting(E_ALL);

/**
 * // 9
 * // Member with a profile but member of the organisational structure
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
// section -64--88--78-21--6107c2e2:1418981d7d7:-8000:000000000000165E-includes begin
// section -64--88--78-21--6107c2e2:1418981d7d7:-8000:000000000000165E-includes end

/* user defined constants */
// section -64--88--78-21--6107c2e2:1418981d7d7:-8000:000000000000165E-constants begin
// section -64--88--78-21--6107c2e2:1418981d7d7:-8000:000000000000165E-constants end

/**
 * // 9
 * // Member with a profile but member of the organisational structure
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_without_connection_navigation
    extends basic_member_navigation
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
     * @param  visited
     * @param  visitor
     */
    public function generate_left_member_navigation($visited, $visitor)
    {
     $navigation_list = $this->generate_left_navigation();
     
     // 1000 ask_member_follower_connection
     if(( $visited->get_age() > (int)18 ) AND 
     ( $visitor->get_age() < (int)18 ))
     {
     // ask for connection
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1000 );
     $first_level_item->set_link( "B" );
     $first_level_item->set_text( "B1000" );
     $first_level_item->set_icon_name( "connection.png" );
     $navigation_list->add_item( $first_level_item );
     }
     
     $admin_ist = $this->
     generate_left_admin_navigation( $visited, $visitor );
     $navigation_list->add_list( $admin_ist, (int)0 );
     
     return $navigation_list;
    }
}?>