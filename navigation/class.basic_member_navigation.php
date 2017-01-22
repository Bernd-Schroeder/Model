<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.basic_member_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 14.03.2015, 12:42:27 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_navigation.php');

/* user defined includes */
// section 10-5-21-85--719d51ef:14882a1265c:-8000:0000000000002686-includes begin
// section 10-5-21-85--719d51ef:14882a1265c:-8000:0000000000002686-includes end

/* user defined constants */
// section 10-5-21-85--719d51ef:14882a1265c:-8000:0000000000002686-constants begin
// section 10-5-21-85--719d51ef:14882a1265c:-8000:0000000000002686-constants end

/**
 * Short description of class basic_member_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class basic_member_navigation
    extends basic_navigation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  visited
     * @param  visitor
     */
    public function generate_left_admin_navigation($visited, $visitor)
    {
     $navigation_list = new navigation_list();
     
     if(
     (isset($_GET["entity_name"]) && is_string($_GET["entity_name"])) AND
     (isset($_GET["entity_id"]) && is_numeric($_GET["entity_id"])))
     {
     $entity_name = $_GET["entity_name"];
     $entity_id = $_GET["entity_id"];
     
     if ( $entity_name == "C" )
     { $this->add_admin_team_connection( 
     $navigation_list, $entity_id, $visited, $visitor); }
     if ( $entity_name == "D" )
     { $this->add_admin_event_connection( 
     $navigation_list, $entity_id, $visited, $visitor); }
     }
     return $navigation_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  navigation_list
     * @param  entity_id
     * @param  visited
     * @param  visitor
     */
    public function add_admin_team_connection($navigation_list, $entity_id, $visited, $visitor)
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.team.php');
     
     $team = new team();
     $team->set_id( $entity_id );
     $team->load();
     $admin_list = $team->get_admin_member_list();
     
     
     // nur wenn visitor admin vom team ist oder der owner !.
     if ( ($admin_list->is_member_element_of( $visitor->get_id() )) OR
        ( $team->get_owner_id() == $visitor->get_id() ) )
     {
     $relation = $team->get_member_relation( $visited );
     
     switch($relation)
     {
     case ( 2 ):
     // remove_team_admin_connection ( 1030 )
     $this->add_team_relation2_nav($navigation_list, $team);
     break;
     
     case ( 3 ):
     // accept_team_member_inquiry ( 1002 )
     // decline_team_member_inquiry ( 1003 )
     $this->add_team_relation3_nav($navigation_list, $team);
     break;
     
     case ( 4 ):
     // remove_team_member_inquiry ( 1011 )
     $this->add_team_relation4_nav($navigation_list, $team);
     break;
     
     case ( 5 ):
     // remove_team_member_connection ( 1004 )
     // ask_team_admin_connection ( 1020 )
     $this->add_team_relation5_nav($navigation_list, $team);
     break;
     
     case ( 7 ):
     // remove_team_admin_inquiry ( 1021 )
     $this->add_team_relation7_nav($navigation_list, $team);
     break;
     
     case ( 8 ):
     // ask_team_member_connection ( 1010 )
     $this->add_team_relation8_9_nav($navigation_list, $team);
     break;

     case ( 9 ):
     // ask_team_member_connection ( 1010 )
     $this->add_team_relation8_9_nav($navigation_list, $team);
     break;
     
     default:
     ;
     break;
     }
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  navigation_list
     * @param  team
     */
    public function add_team_relation2_nav($navigation_list, $team)
    {
     $header_navigation = new basic_navigation_item();
     $header_navigation->set_id( (int)999 );
     $header_navigation->set_link( "" );
     $header_navigation->set_text( $team->get_name() );
     $navigation_list->add_item( $header_navigation );
     
     // remove_team_admin_connection ( 1030 )
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1030 . "&item_id=" . $team->get_id() );
     $first_level_item->set_link( "C" );
     $first_level_item->set_text( "C1030" );
     $first_level_item->set_icon_name( "tdown.png" );
     $navigation_list->add_item( $first_level_item );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  navigation_list
     * @param  team
     */
    public function add_team_relation3_nav($navigation_list, $team)
    {
     $header_navigation = new basic_navigation_item();
     $header_navigation->set_id( (int)999 );
     $header_navigation->set_link( "" );
     $header_navigation->set_text( $team->get_name() );
     $navigation_list->add_item( $header_navigation );
     
     // accept_team_member_inquiry ( 1002 )
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1002 . "&item_id=" . $team->get_id() );
     $first_level_item->set_link( "C" );
     $first_level_item->set_text( "C1002" );
     $first_level_item->set_icon_name( "tup.png" );
     $navigation_list->add_item( $first_level_item );
     
     // decline_team_member_inquiry ( 1003 )
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1003 . "&item_id=" . $team->get_id() );
     $first_level_item->set_link( "C" );
     $first_level_item->set_text( "C1003" );
     $first_level_item->set_icon_name( "tdown.png" );
     $navigation_list->add_item( $first_level_item );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  navigation_list
     * @param  team
     */
    public function add_team_relation4_nav($navigation_list, $team)
    {
     $header_navigation = new basic_navigation_item();
     $header_navigation->set_id( (int)999 );
     $header_navigation->set_link( "" );
     $header_navigation->set_text( $team->get_name() );
     $navigation_list->add_item( $header_navigation );
     
     // remove_team_member_inquiry ( 1011 )
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1011 . "&item_id=" . $team->get_id() );
     $first_level_item->set_link( "C" );
     $first_level_item->set_text( "C1011" );
     $first_level_item->set_icon_name( "erase.png" );
     $navigation_list->add_item( $first_level_item );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  navigation_list
     * @param  team
     */
    public function add_team_relation5_nav($navigation_list, $team)
    {
     $header_navigation = new basic_navigation_item();
     $header_navigation->set_id( (int)999 );
     $header_navigation->set_link( "" );
     $header_navigation->set_text( $team->get_name() );
     $navigation_list->add_item( $header_navigation );
     
     // remove_team_member_connection ( 1004 )
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1004 . "&item_id=" . $team->get_id() );
     $first_level_item->set_link( "C" );
     $first_level_item->set_text( "C1004" );
     $first_level_item->set_icon_name( "tdown.png" );
     $navigation_list->add_item( $first_level_item );
     
     // ask_team_admin_connection ( 1020 )
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1020 . "&item_id=" . $team->get_id() );
     $first_level_item->set_link( "C" );
     $first_level_item->set_text( "C1020" );
     $first_level_item->set_icon_name( "tup.png" );
     $navigation_list->add_item( $first_level_item );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  navigation_list
     * @param  team
     */
    public function add_team_relation7_nav($navigation_list, $team)
    {
     $header_navigation = new basic_navigation_item();
     $header_navigation->set_id( (int)999 );
     $header_navigation->set_link( "" );
     $header_navigation->set_text( $team->get_name() );
     $navigation_list->add_item( $header_navigation );
     
     // remove_team_admin_inquiry ( 1021 )
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1021 . "&item_id=" . $team->get_id() );
     $first_level_item->set_link( "C" );
     $first_level_item->set_text( "C1021" );
     $first_level_item->set_icon_name( "erase.png" );
     $navigation_list->add_item( $first_level_item );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  navigation_list
     * @param  team
     */
    public function add_team_relation8_9_nav($navigation_list, $team)
    {
     $header_navigation = new basic_navigation_item();
     $header_navigation->set_id( (int)999 );
     $header_navigation->set_link( "" );
     $header_navigation->set_text( $team->get_name() );
     $navigation_list->add_item( $header_navigation );
     
     // ask_team_member_connection ( 1010 )
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1010 . "&item_id=" . $team->get_id() );
     $first_level_item->set_link( "C" );
     $first_level_item->set_text( "C1010" );
     $first_level_item->set_icon_name( "connection.png" );
     $navigation_list->add_item( $first_level_item );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  navigation_list
     * @param  entity_id
     * @param  visited
     * @param  visitor
     */
    public function add_admin_event_connection($navigation_list, $entity_id, $visited, $visitor)
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.event.php');
     
     $event = new event();
     $event->set_id( $entity_id );
     $event->load();
     $admin_list = $event->get_admin_member_list();
     
     // nur wenn visitor admin vom event ist.
     // Und der Event vom Typ 2 ist ( Invitation Event )
     if ( $admin_list->is_member_element_of( $visitor->get_id() ) AND
     ( $event->get_type() != (int)0 ) )
     {
     $relation = $event->get_member_relation( $visited );
     
     switch($relation)
     {
     case ( 3 ):
     // accept_event_member_inquiry ( 1002 )
     // decline_event_member_inquiry ( 1003 )
     $this->add_event_relation3_nav($navigation_list, $event);
     break;
     
     case ( 4 ):
     // remove_event_member_inquiry ( 1011 )
     $this->add_event_relation4_nav($navigation_list, $event);
     break;
     
     case ( 5 ):
     // remove_event_member_connection ( 1004 )
     $this->add_event_relation5_nav($navigation_list, $event);
     break;
     
     case ( 9 ):
     // ask_event_member_connection ( 1010 )
     $this->add_event_relation9_nav($navigation_list, $event);
     break;
     
     default:
     ;
     break;
     }
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  navigation_list
     * @param  event
     */
    public function add_event_relation3_nav($navigation_list, $event)
    {
     $header_navigation = new basic_navigation_item();
     $header_navigation->set_id( (int)999 );
     $header_navigation->set_link( "" );
     $header_navigation->set_text( $event->get_name() . " - Invitation" );
     $navigation_list->add_item( $header_navigation );
     
     // accept or decline
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1002 . "&item_id=" . $event->get_id() );
     $first_level_item->set_link( "D" );
     $first_level_item->set_text( "D1002" );
     $first_level_item->set_icon_name( "tup.png" );
     $navigation_list->add_item( $first_level_item );
     
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1003 . "&item_id=" . $event->get_id() );
     $first_level_item->set_link( "D" );
     $first_level_item->set_text( "D1003" );
     $first_level_item->set_icon_name( "tdown.png" );
     $navigation_list->add_item( $first_level_item );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  navigation_list
     * @param  event
     */
    public function add_event_relation4_nav($navigation_list, $event)
    {
     $header_navigation = new basic_navigation_item();
     $header_navigation->set_id( (int)999 );
     $header_navigation->set_link( "" );
     $header_navigation->set_text( $event->get_name() );
     $navigation_list->add_item( $header_navigation );
     
     // remove_event_member_inquiry
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1011 . "&item_id=" . $event->get_id() );
     $first_level_item->set_link( "D" );
     $first_level_item->set_text( "D1011" );
     $first_level_item->set_icon_name( "erase.png" );
     $navigation_list->add_item( $first_level_item );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  navigation_list
     * @param  event
     */
    public function add_event_relation5_nav($navigation_list, $event)
    {
     $header_navigation = new basic_navigation_item();
     $header_navigation->set_id( (int)999 );
     $header_navigation->set_link( "" );
     $header_navigation->set_text( $event->get_name() );
     $navigation_list->add_item( $header_navigation );
     
     // remove member from event
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1004 . "&item_id=" . $event->get_id() );
     $first_level_item->set_link( "D" );
     $first_level_item->set_text( "D1004" );
     $first_level_item->set_icon_name( "erase.png" );
     $navigation_list->add_item( $first_level_item );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  navigation_list
     * @param  event
     */
    public function add_event_relation9_nav($navigation_list, $event)
    {
     $header_navigation = new basic_navigation_item();
     $header_navigation->set_id( (int)999 );
     $header_navigation->set_link( "" );
     $header_navigation->set_text( $event->get_name() . " - Invitation" );
     $navigation_list->add_item( $header_navigation );
     
     // ask_event_member_connection
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1010 . "&item_id=" . $event->get_id() );
     $first_level_item->set_link( "D" );
     $first_level_item->set_text( "D1010" );
     $first_level_item->set_icon_name( "connection.png" );
     $navigation_list->add_item( $first_level_item );
    }
}?>