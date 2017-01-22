<?php

error_reporting(E_ALL);

/**
 * // 3
 * // waiting for follower approval from ask member
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
// section 10-30-8-119-7a1d091c:1418238b5d9:-8000:0000000000001632-includes begin
// section 10-30-8-119-7a1d091c:1418238b5d9:-8000:0000000000001632-includes end

/* user defined constants */
// section 10-30-8-119-7a1d091c:1418238b5d9:-8000:0000000000001632-constants begin
// section 10-30-8-119-7a1d091c:1418238b5d9:-8000:0000000000001632-constants end

/**
 * // 3
 * // waiting for follower approval from ask member
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_requesting_navigation
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
     
     // remove
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1001 );
     $first_level_item->set_link( "B" );
     $first_level_item->set_text( "B1001" );
     $first_level_item->set_icon_name( "tdown.png" );
     $navigation_list->add_item( $first_level_item );
     
     $admin_ist = $this->
     generate_left_admin_navigation( $visited, $visitor );
     $navigation_list->add_list( $admin_ist, (int)0 );
     
     return $navigation_list;
    }
}?>