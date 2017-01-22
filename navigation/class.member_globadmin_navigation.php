<?php

error_reporting(E_ALL);

/**
 * // 10
 * // Member contact the admin
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
// section 10-5-23-121-3ee6ceab:14be448457a:-8000:000000000000544A-includes begin
// section 10-5-23-121-3ee6ceab:14be448457a:-8000:000000000000544A-includes end

/* user defined constants */
// section 10-5-23-121-3ee6ceab:14be448457a:-8000:000000000000544A-constants begin
// section 10-5-23-121-3ee6ceab:14be448457a:-8000:000000000000544A-constants end

/**
 * // 10
 * // Member contact the admin
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_globadmin_navigation
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
     $navigation_list = parent::generate_left_navigation();
     return $navigation_list;
    }
}?>