<?php

error_reporting(E_ALL);

/**
 * // 4
 * // requested follower of a member
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
// section 10-5-24--12-7e94ba16:14a91ccc691:-8000:00000000000026A6-includes begin
// section 10-5-24--12-7e94ba16:14a91ccc691:-8000:00000000000026A6-includes end

/* user defined constants */
// section 10-5-24--12-7e94ba16:14a91ccc691:-8000:00000000000026A6-constants begin
// section 10-5-24--12-7e94ba16:14a91ccc691:-8000:00000000000026A6-constants end

/**
 * // 4
 * // requested follower of a member
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_approving_navigation
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
     // private information
     $item = new basic_navigation_item();
     $item->set_id( (int)4 );
     $item->set_link( "B" );
     $item->set_text( "B4" );
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
     
     // approve
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1002 );
     $first_level_item->set_link( "B" );
     $first_level_item->set_text( "B1002" );
     $first_level_item->set_icon_name( "tup.png" );
     $navigation_list->add_item( $first_level_item );
     
     // decline
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1003 );
     $first_level_item->set_link( "B" );
     $first_level_item->set_text( "B1003" );
     $first_level_item->set_icon_name( "tdown.png" );
     $navigation_list->add_item( $first_level_item );
     
     $admin_ist = $this->
     generate_left_admin_navigation( $visited, $visitor );
     $navigation_list->add_list( $admin_ist, (int)0 );
     
     return $navigation_list;
    }
}?>