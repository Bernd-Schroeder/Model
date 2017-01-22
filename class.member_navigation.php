<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 11.03.2015, 14:57:05 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_member_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_member_list.php');

/* user defined includes */
// section 10-30-49-58-5d607343:14a573db328:-8000:000000000000150B-includes begin
// section 10-30-49-58-5d607343:14a573db328:-8000:000000000000150B-includes end

/* user defined constants */
// section 10-30-49-58-5d607343:14a573db328:-8000:000000000000150B-constants begin
// section 10-30-49-58-5d607343:14a573db328:-8000:000000000000150B-constants end

/**
 * Short description of class member_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_navigation
    extends basic_member_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
     /*NEW*/
    public function generate_vertical_A_navigation( $member )
     {
     if( $member->is_online() )
     {
     require_once('navigation/class.A_on_navigation.php');
     $nav = new A_on_navigation();
     }
     else
     {
     require_once('navigation/class.A_off_navigation.php');
     $nav = new A_off_navigation();
     }

     // set left navigation
     $this->set_left_navigation_list(
     $nav->generate_left_member_navigation() );
    }
    /*NEW*/
    public function generate_vertical_A15_navigation( $member )
     {
     if( $member->is_online() )
     {
     require_once('navigation/class.A15_on_navigation.php');   
     $nav = new A15_on_navigation(); 
     }
     else
     {
     require_once('navigation/class.A15_off_navigation.php');
     $nav = new A15_off_navigation();    
     }
      
     // set left navigation
     $this->set_left_navigation_list(
     $nav->generate_left_member_navigation() );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function is_level_1($member)
    {
     $level = FALSE;
     if ( $this->get_id() == $member->get_id() )
     { $level = TRUE; }
     return $level;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function is_level_3($member)
    {
     require_once('class.member_follower.php');
     $level = FALSE;
     $connection = new member_follower();
     if (
     $connection->find_member(
     $this->get_id(), $member->get_id(), (int)3 ))
     { $level = TRUE; }
     return $level;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function is_level_4($member)
    {
     require_once('class.member_follower.php');
     $level = FALSE;
     $connection = new member_follower();
     if (
     $connection->find_member(
     $member->get_id(), $this->get_id(), (int)3 ))
     { $level = TRUE; }
     return $level;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function is_level_5($member)
    {
     require_once('class.member_follower.php');
     $level = FALSE;
     $connection = new member_follower();
     if (
     ($connection->find_member(
     $member->get_id(), $this->get_id(), (int)5 )) OR
     ($relation = $connection->find_member(
     $this->get_id(), $member->get_id(), (int)5 )) )
     { $level = TRUE; }
     return $level;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function is_level_6($member)
    {
     $level = FALSE;
     $visited_team_list = $this->get_team_list();
     $visitor_team_list = $member->get_team_list();
     if ( $visited_team_list->get_item_count() <
     $visitor_team_list->get_item_count() )
     {
     $team_list = $visited_team_list;
     $member_id = $member->get_id();
     }
     else
     {
     $team_list = $visitor_team_list;
     $member_id = $this->get_id();
     }
     if( $team_list->is_member_element_of( $member_id ) )
     { $level = TRUE; }
     return $level;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function is_level_11($member)
    {
     $level = FALSE;
     if ( $this->get_id() == (int)160 )
     { $level = TRUE; }
     return $level;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function is_level_12($member)
    {
     $level = FALSE;
     if ( $member->get_id() == (int)160 )
     { $level = TRUE; }
     return $level;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function get_relation($member)
    {
     if( $this->is_level_1( $member ) )
     { $relation = (int)1; }
     
     elseif( $this->is_level_3( $member ) )
     { $relation = (int)3; }
     
     elseif( $this->is_level_4( $member ) )
     { $relation = (int)4; }
     
     elseif( $this->is_level_5( $member ) )
     { $relation = (int)5; }
     
     elseif( $this->is_level_6( $member ) )
     { $relation = (int)6; }
     
     elseif( $this->is_level_11( $member ) )
     { $relation = (int)11; }
     
     elseif( $this->is_level_12( $member ) )
     { $relation = (int)12; }
     
     else
     { $relation = (int)9; }
     
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
     require_once('navigation/class.member_owner_navigation.php');
     
     // 1 
     // owner of a profile 
     
     $nav = new member_owner_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( 
     $nav->generate_left_member_navigation( $this, $member ) );
     
     // set right navigation
     $right_nav = new navigation_list();
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation
     ( "B", $this->get_monitored_member_list(), "app_monitor", TRUE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation
     ( "B", $this->get_follower_member_list(), "app_follower", TRUE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation
     ( "B", $this->get_requested_monitored_member_list(), 
     "req_monitor", TRUE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation
     ( "B", $this->get_requested_follower_member_list(), 
     "req_follower", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation
     ( "B", $this->get_team_list(), "teams", TRUE ) );
     
     $this->set_right_navigation_list( $right_nav ) ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function generate_admin_navigation($member)
    {
     // 2 
     // admin of a team 
     // admin of an event
      ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function generate_requested_navigation($member)
    {
     require_once('navigation/class.member_requesting_navigation.php');
     
     // 3 
     // requested follower of a member 
     
     $nav = new member_requesting_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( 
     $nav->generate_left_member_navigation( $this, $member ) );
     
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
     require_once('navigation/class.member_approving_navigation.php');
     
     // 4 
     // waiting for follower approval from ask member 
     
     $nav = new member_approving_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( 
     $nav->generate_left_member_navigation( $this, $member ) );
     
     // set right navigation
     $right_nav = new navigation_list();
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
     require_once('navigation/class.member_approved_navigation.php');
     
     // 5 
     // approved follower 
     
     $nav = new member_approved_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( 
     $nav->generate_left_member_navigation( $this, $member ) );
     
     // set right navigation
     $right_nav = new navigation_list();
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
     require_once('navigation/class.member_same_group_navigation.php');
     
     // 6 
     // Member of the same group
     
     $nav = new member_same_group_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( 
     $nav->generate_left_member_navigation( $this, $member ) );
     
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
    public function generate_requested_admin_navigation($member)
    {
     // 7 
     // requested admin of team from admin 
     // requested admin of event from admin
      ;
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
     // Member of a sub group ( team / event )
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
     $file = 'class.member_without_connection_navigation.php';
     require_once('navigation/' . $file);
     
     // 9 
     // Member with a profile but not member of the organisational structure
     
     $nav = new member_without_connection_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( 
     $nav->generate_left_member_navigation( $this, $member ) );
     
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
    public function generate_member_globadmin_navigation($member)
    {
     // 11
     // member access to admin
     $file = 'class.member_globadmin_navigation.php';
     require_once('navigation/' . $file);
     
     $nav = new member_globadmin_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list(
     $nav->generate_left_member_navigation( $this, $member ) );
     
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
    public function generate_globadmin_navigation($member)
    {
     require_once('navigation/class.globadmin_navigation.php');
     
     // 12 
     // admin access
     
     $nav = new globadmin_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( 
     $nav->generate_left_member_navigation( $this, $member ) );
     
     // set right navigation
     $right_nav = new navigation_list();
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation
     ( "B", $this->get_monitored_member_list(), "app_monitor", TRUE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation
     ( "B", $this->get_follower_member_list(), "app_follower", TRUE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation
     ( "B", $this->get_requested_monitored_member_list(), 
     "req_monitor", TRUE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation
     ( "B", $this->get_requested_follower_member_list(), 
     "req_follower", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation
     ( "B", $this->get_team_list(), "teams", TRUE ) );
     
     $this->set_right_navigation_list( $right_nav ) ;
    }
}?>