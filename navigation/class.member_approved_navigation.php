<?php

error_reporting(E_ALL);

/**
 * // 5
 * // approved follower
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
// section 10-30-8-119-7a1d091c:1418238b5d9:-8000:0000000000001605-includes begin
// section 10-30-8-119-7a1d091c:1418238b5d9:-8000:0000000000001605-includes end

/* user defined constants */
// section 10-30-8-119-7a1d091c:1418238b5d9:-8000:0000000000001605-constants begin
// section 10-30-8-119-7a1d091c:1418238b5d9:-8000:0000000000001605-constants end

/**
 * // 5
 * // approved follower
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_approved_navigation
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
     
     // show tasklist
     $item = new task_receiver_navigation_item();
     $item->set_id( (int)29 );
     $item->set_link( "B" );
     $item->set_text( "B29" );
     $navigation_list->add_item( $item );
     
     // message
     $item = new message_navigation_item();
     $item->set_id( (int)6 );
     $item->set_link( "B" );
     $item->set_text( "B6" );
     $navigation_list->add_item( $item );
     
     // Calender
     $item = new basic_navigation_item();
     $item->set_id( (int)9 );
     $item->set_link( "B" );
     $item->set_text( "B9" );
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
     
     //1004 remove_follower_member_connection
     //1005 remove_member_follower_connection
     
     if(( $visited->get_age() < (int)18 ) AND
     ( $visitor->get_age() > (int)18 ))
     {
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1004 );
     $first_level_item->set_link( "B" );
     $first_level_item->set_text( "B1004" );
     $first_level_item->set_icon_name( "erase.png" );
     $navigation_list->add_item( $first_level_item );
     }
     else
     {
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1005 );
     $first_level_item->set_link( "B" );
     $first_level_item->set_text( "B1005" );
     $first_level_item->set_icon_name( "erase.png" );
     $navigation_list->add_item( $first_level_item );
     }
     
     $admin_ist = $this->
     generate_left_admin_navigation( $visited, $visitor );
     $navigation_list->add_list( $admin_ist, (int)0 );
     
     return $navigation_list;
    }
}?>