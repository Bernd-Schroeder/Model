<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.basic_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 29.08.2016, 13:28:41 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_navigation_item
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_navigation_item.php');

/**
 * include document_navigation_item
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.document_navigation_item.php');

/**
 * include event_navigation_item
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.event_navigation_item.php');

/**
 * include image_navigation_item
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.image_navigation_item.php');

/**
 * include message_navigation_item
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.message_navigation_item.php');

/**
 * include navigation_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.navigation_list.php');

/**
 * include task_author_navigation_item
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.task_author_navigation_item.php');

/**
 * include task_receiver_navigation_item
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.task_receiver_navigation_item.php');

/**
 * include unread_message_navigation_item
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.unread_message_navigation_item.php');

/**
 * include video_navigation_item
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.video_navigation_item.php');

/**
 * include visibility_type_item
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.visibility_type_item.php');

/* user defined includes */
// section 10-30-8-105--6a355791:141738ab340:-8000:00000000000015D6-includes begin
// section 10-30-8-105--6a355791:141738ab340:-8000:00000000000015D6-includes end

/* user defined constants */
// section 10-30-8-105--6a355791:141738ab340:-8000:00000000000015D6-constants begin
// section 10-30-8-105--6a355791:141738ab340:-8000:00000000000015D6-constants end

/**
 * Short description of class basic_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class basic_navigation
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  source
     * @param  member_list
     * @param  header
     * @param  limited
     * @version 1.0
     */
    public function generate_right_member_navigation($source, $member_list, $header, $limited)
    {
     $max_list = 5;
     $member_navigation = new basic_navigation_item();
     $member_navigation->set_id( (int)1 );
     $member_navigation->set_link( "" );
     $member_navigation->set_item_id($member_list->get_item_count());
     $member_navigation->set_text($header );
     
     $member_count = $member_list->get_item_count();
     if (($member_count > $max_list) AND $limited )
     { $member_count = $max_list; }
     
     for ($i = 0; $i < $member_count; $i++)
     {
     $item = $member_list->get_item( $i );
     $item_text = $item->get_forename() . " " . $item->get_name();
     $member_item = new basic_navigation_item();
     $member_item->set_id( $item->get_id() );
     $member_item->set_link( $_SESSION['B_control_base'] . 
     "B0_pre_frame.php" );
     $member_item->set_text($item_text);
     $member_navigation->get_navigation_list()->add_item( $member_item );
     }
     
     if (( $member_list->get_item_count() > $max_list) AND $limited )
     {
     $member_item = new basic_navigation_item();
     $member_item->set_id( (int)30 );
     $member_item->set_plain_text( "X" );
     $member_item->set_link( $_SESSION[$source . '_control_base'] . 
     $source . "_post_frame.php" );
     $member_item->set_text("show" . $header );
     $member_navigation->get_navigation_list()->add_item( $member_item );
     }
     return $member_navigation;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  source
     * @param  team_list
     * @param  header
     * @param  limited
     * @version 1.0
     */
    public function generate_right_team_navigation($source, $team_list, $header, $limited)
    {
     $max_list = 5;
     $team_navigation = new basic_navigation_item();
     $team_navigation->set_id( (int)1 );
     $team_navigation->set_link( "" );
     $team_navigation->set_item_id($team_list->get_item_count());
     $team_navigation->set_text( $header );
     
     $team_count = $team_list->get_item_count();
     if (($team_count > $max_list) AND $limited )
     { $team_count = $max_list; }
     
     for ($i = 0; $i < $team_count; $i++)
     {
     $item = $team_list->get_item( $i );
     $item_text = $item->get_name();
     $team_item = new basic_navigation_item();
     $team_item->set_id( $item->get_id() );
     $team_item->set_link( $_SESSION['C_control_base'] . 
     "C0_pre_frame.php" );
     $team_item->set_text($item_text);
     $team_navigation->get_navigation_list()->add_item( $team_item );
     }
     
     if (( $team_list->get_item_count() > $max_list) AND $limited )
     {
     $team_item = new basic_navigation_item();
     $team_item->set_id( (int)32 );
     $team_item->set_plain_text( "X" );
     $team_item->set_link( $_SESSION[$source . '_control_base'] . 
     $source . "_post_frame.php" );
     $team_item->set_text("show" . $header );
     $team_navigation->get_navigation_list()->add_item( $team_item );
     }
     return $team_navigation;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  source
     * @param  event_list
     * @param  header
     * @param  limited
     * @version 1.0
     */
    public function generate_right_event_navigation($source, $event_list, $header, $limited)
    {
     $max_list = 5;
     $event_navigation = new basic_navigation_item();
     $event_navigation->set_id( (int)1 );
     $event_navigation->set_link( "" );
     $event_navigation->set_item_id($event_list->get_item_count());
     $event_navigation->set_text( $header );
     
     $event_count = $event_list->get_item_count();
     if (($event_count > $max_list) AND $limited )
     { $event_count = $max_list; }
     
     for ($i = 0; $i < $event_count; $i++)
     {
     $item = $event_list->get_item( $i );
     $item_text = $item->get_name();
     $event_item = new basic_navigation_item();
     $event_item->set_id( $item->get_id() );
     $event_item->set_link( $_SESSION['D_control_base'] . 
     "D0_pre_frame.php" );
     $event_item->set_text($item_text);
     $event_navigation->get_navigation_list()->add_item( $event_item );
     }
     
     if (( $event_list->get_item_count() > $max_list) AND $limited )
     {
     $event_item = new basic_navigation_item();
     $event_item->set_id( (int)34 );
     $event_item->set_plain_text( "X" );
     $event_item->set_link( $_SESSION[$source . '_control_base'] . 
     $source . "_post_frame.php" );
     $event_item->set_text("show" . $header );
     $event_navigation->get_navigation_list()->add_item( $event_item );
     }
     return $event_navigation;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function generate_left_navigation()
    {
     $navigation_list = new navigation_list();
     
     // home
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)0 );
     $first_level_item->set_link( "B" );
     $first_level_item->set_text( "B0" );
     $first_level_item->set_icon_name( "home.png" );
     $navigation_list->add_item( $first_level_item );
     
     return $navigation_list;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  team_list
     * @param  member
     * @version 1.0
     */
    public function generate_left_team_ask_invitation_navigation($team_list, $member)
    {
     // team invitation
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)200 );
     $first_level_item->set_link( "B" );
     $first_level_item->set_text( "B400" );
     $first_level_item->set_icon_name( "connection.png" );
     
     // teams
     $team_count = $team_list->get_item_count();
     for ($i = 0; $i < $team_count; $i++)
     {
     $item = $team_list->get_item( $i );
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)50 );
     $second_level_item->set_link( "B" );
     $second_level_item->set_item_id( $item->get_id() );
     $second_level_item->set_plain_text( $item->get_name() );
     $second_level_item->set_text( "B_empty" );
     $second_level_item->set_icon_name( "connection.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     }
     return $first_level_item;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  team_list
     * @param  member
     * @version 1.0
     */
    public function generate_left_team_accept_invitation_navigation($team_list, $member)
    {
     // team invitation
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)200 );
     $first_level_item->set_link( "B" );
     $first_level_item->set_text( "B400" );
     $first_level_item->set_icon_name( "connection.png" );
     
     // teams
     $team_count = $team_list->get_item_count();
     for ($i = 0; $i < $team_count; $i++)
     {
     $item = $team_list->get_item( $i );
     
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)51 );
     $second_level_item->set_link( "B" );
     $second_level_item->set_item_id( $item->get_id() );
     $second_level_item->set_plain_text( $item->get_name() );
     $second_level_item->set_text( "B_empty" );
     $second_level_item->set_icon_name( "tup.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)52 );
     $second_level_item->set_link( "B" );
     $second_level_item->set_item_id( $item->get_id() );
     $second_level_item->set_plain_text( $item->get_name() );
     $second_level_item->set_text( "B_empty" );
     $second_level_item->set_icon_name( "tdown.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     }
     return $first_level_item;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  event_list
     * @param  member
     * @version 1.0
     */
    public function generate_left_event_ask_invitation_navigation($event_list, $member)
    {
     // event invitation
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)300 );
     $first_level_item->set_link( "B" );
     $first_level_item->set_text( "B500" );
     $first_level_item->set_icon_name( "connection.png" );
     
     // events
     $event_count = $event_list->get_item_count();
     for ($i = 0; $i < $event_count; $i++)
     {
     $item = $event_list->get_item( $i );
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)51 );
     $second_level_item->set_link( "B" );
     $second_level_item->set_item_id( $item->get_id() );
     $second_level_item->set_plain_text( $item->get_name() );
     $second_level_item->set_text( "B_empty" );
     $second_level_item->set_icon_name( "connection.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     }
     return $first_level_item;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  event_list
     * @param  member
     * @version 1.0
     */
    public function generate_left_event_accept_invitation_navigation($event_list, $member)
    {
     // event invitation
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)300 );
     $first_level_item->set_link( "B" );
     $first_level_item->set_text( "B500" );
     $first_level_item->set_icon_name( "connection.png" );
     
     // event
     $event_count = $event_list->get_item_count();
     for ($i = 0; $i < $event_count; $i++)
     {
     $item = $event_list->get_item( $i );
     
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)53 );
     $second_level_item->set_link( "B" );
     $second_level_item->set_item_id( $item->get_id() );
     $second_level_item->set_plain_text( $item->get_name() );
     $second_level_item->set_text( "B_empty" );
     $second_level_item->set_icon_name( "tup.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)54 );
     $second_level_item->set_link( "B" );
     $second_level_item->set_item_id( $item->get_id() );
     $second_level_item->set_plain_text( $item->get_name() );
     $second_level_item->set_text( "B_empty" );
     $second_level_item->set_icon_name( "tdown.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     }
     return $first_level_item;
    }
}?>