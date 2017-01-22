<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.event_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 17.03.2015, 13:58:32 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_event_list
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.basic_event_list.php');

/* user defined includes */
// section 10-30-49-58-5d607343:14a573db328:-8000:000000000000150D-includes begin
// section 10-30-49-58-5d607343:14a573db328:-8000:000000000000150D-includes end

/* user defined constants */
// section 10-30-49-58-5d607343:14a573db328:-8000:000000000000150D-constants begin
// section 10-30-49-58-5d607343:14a573db328:-8000:000000000000150D-constants end

/**
 * Short description of class event_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class event_navigation
    extends basic_event_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function get_relation($member)
    {
     require_once('class.event_member.php');
     
     // get the current relation from the event
     $relation = $this->get_member_relation( $member );
     
     if (( $this->get_type() == (int)1 ) AND ( $relation != (int)2 ))
     {
     // When it is an information event, you will be the relation from the
     $relation = $this->get_upteam()->get_member_relation( $member );
     if( ($relation == (int)2) OR ($relation == (int)8) )
     // but if we are the administrator of the upteam
     // we are not automaticcaly the admin of the event
     { $relation = (int)5; }
     }
     return $relation;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function generate_owner_navigation($member)
    {
     // 1 
     // owner of a profile 
     // founder of a team
      ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function generate_admin_navigation($member)
    {
     require_once('navigation/class.event_admin_navigation.php');
     
     // 2 
     // admin of an event
     
     $nav = new event_admin_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( $nav->generate_left_navigation() );
     
     // set right navigation
     $right_nav = new navigation_list();
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "D", 
     $this->get_founder_teams(), "owner", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "D", 
     $this->get_requested_admin_list(), "requestedadmin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "D", 
     $this->get_admin_member_list(), "admin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "D", 
     $this->get_requested_member_list(), "requestedmember", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "D", 
     $this->get_approved_member_list(), "approved", TRUE ) );
     
     $this->set_right_navigation_list( $right_nav ) ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function generate_requested_navigation($member)
    {
     require_once('navigation/class.event_requesting_navigation.php');
     
     // 3 
     // requested member of event from admin
     
     $nav = new event_requesting_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( $nav->generate_left_navigation() );
     
     // set empty right navigation
     $right_nav = new navigation_list();
     $this->set_right_navigation_list( $right_nav );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function generate_approving_navigation($member)
    {
     require_once('navigation/class.event_approving_navigation.php');
     
     // 4 
     // waiting for event approval from the admin
     
     $nav = new event_approving_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( $nav->generate_left_navigation() );
     
     // set right navigation
     $right_nav = new navigation_list();
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "D", 
     $this->get_founder_teams(), "owner", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "D", 
     $this->get_requested_admin_list(), "requestedadmin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "D", 
     $this->get_admin_member_list(), "admin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "D", 
     $this->get_requested_member_list(), "requestedmember", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "D", 
     $this->get_approved_member_list(), "approved", TRUE ) );
     
     $this->set_right_navigation_list( $right_nav ) ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function generate_approved_navigation($member)
    {
     require_once('navigation/class.event_approved_navigation.php');
     require_once('navigation/class.event_approved_navigation_lt18.php');
     
     // 5 
     // approved  member of an event
     
     if( $member->get_age() >= (int)18 )
     { $nav = new event_approved_navigation(); }
     else
     { $nav = new event_approved_navigation_lt18(); }
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( $nav->generate_left_navigation() );
     
     // set right navigation
     $right_nav = new navigation_list();
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "D", 
     $this->get_founder_teams(), "owner", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "D", 
     $this->get_admin_member_list(), "admin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "D", 
     $this->get_requested_member_list(), "requestedmember", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "D", 
     $this->get_approved_member_list(), "approved", TRUE ) );
     
     $this->set_right_navigation_list( $right_nav ) ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function generate_is_same_group_navigation($member)
    {
     // 6 
     // not available in event navigation
      ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function generate_requested_admin_navigation($member)
    {
     require_once('navigation/class.event_approving_admin_navigation.php');
     
     // 7 
     // requested admin of event from admin
     
     $nav = new event_approving_admin_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( $nav->generate_left_navigation() );
     
     // set right navigation
     $right_nav = new navigation_list();
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "D", 
     $this->get_founder_teams(), "owner", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "D", 
     $this->get_requested_admin_list(), "requestedadmin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "D", 
     $this->get_admin_member_list(), "admin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "D", 
     $this->get_requested_member_list(), "requestedmember", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "D", 
     $this->get_approved_member_list(), "approved", TRUE ) );
     
     $this->set_right_navigation_list( $right_nav ) ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function generate_is_sub_group_navigation($member)
    {
     // 8 
     // Member of a sub group team ??
      ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function generate_without_connection_navigation($member)
    {
     $file = 'class.event_without_connection_navigation.php';
     require_once('navigation/' . $file);
     $file = 'class.event_without_connection_navigation_lt18.php';
     require_once('navigation/' . $file);
     
     // 9 
     // Member with a profile but not member of the organisational structure
     
     if( $member->get_age() >= (int)18 )
     { $nav = new event_without_connection_navigation(); }
     else
     { $nav = new event_without_connection_navigation_lt18(); }
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( $nav->generate_left_navigation() );
     
     // set empty right navigation
     $right_nav = new navigation_list();
     $this->set_right_navigation_list( $right_nav );
    }
}?>