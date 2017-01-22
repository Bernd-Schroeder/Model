<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 17.03.2015, 13:57:45 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_team_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_team_list.php');

/* user defined includes */
// section 10-30-49-58-5d607343:14a573db328:-8000:000000000000150C-includes begin
// section 10-30-49-58-5d607343:14a573db328:-8000:000000000000150C-includes end

/* user defined constants */
// section 10-30-49-58-5d607343:14a573db328:-8000:000000000000150C-constants begin
// section 10-30-49-58-5d607343:14a573db328:-8000:000000000000150C-constants end

/**
 * Short description of class team_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_navigation
    extends basic_team_list
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
     require_once('class.team_member.php');
     
     if ( $this->get_owner_id() == $member->get_id() )
     { $relation = (int)1; }
     elseif ($member->get_id() == (int)160)
     { $relation = (int)12; }
     else
     { $relation = $this->get_member_relation( $member ); }
     
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
     require_once('navigation/class.team_owner_navigation.php');
     
     // 1 
     // founder of a team
     
     $nav = new team_owner_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( $nav->generate_left_navigation() );
     
     // set right navigation
     $right_nav = new navigation_list();
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_requested_admin_list(), "requestedadmin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_admin_member_list(), "admin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_requested_member_list(), "requestedmember", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_approved_member_list(), "approved", TRUE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C", 
     $this->get_upteam_list(), "upteam_list", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C", 
     $this->get_my_subteam_list($member), "subteam_list", FALSE ) );
     
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
     require_once('navigation/class.team_admin_navigation.php');
     
     // 2 
     // admin of a team 
     
     $nav = new team_admin_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( $nav->generate_left_navigation() );
     
     // set right navigation
     $right_nav = new navigation_list();
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_requested_admin_list(), "requestedadmin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_admin_member_list(), "admin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_requested_member_list(), "requestedmember", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_approved_member_list(), "approved", TRUE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C", 
     $this->get_upteam_list(), "upteam_list", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C", 
     $this->get_my_subteam_list($member), "subteam_list", FALSE ) );
     
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
     require_once('navigation/class.team_requesting_navigation.php');
     
     // 3 
     // requested member of team from admin 
     
     $nav = new team_requesting_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( $nav->generate_left_navigation() );
     
     // set right navigation
     $right_nav = new navigation_list();
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_admin_member_list(), "admin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C", 
     $this->get_upteam_list(), "upteam_list", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C", 
     $this->get_my_subteam_list($member), "subteam_list", FALSE ) );
     
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
     require_once('navigation/class.team_approving_navigation.php');
     
     // 4 
     // waiting for team approval from the admin 
     
     $nav = new team_approving_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( $nav->generate_left_navigation() );
     
     // set right navigation
     $right_nav = new navigation_list();
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_admin_member_list(), "admin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_requested_member_list(), "requestedmember", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_approved_member_list(), "approved", TRUE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C", 
     $this->get_upteam_list(), "upteam_list", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C", 
     $this->get_my_subteam_list($member), "subteam_list", FALSE ) );
     
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
     require_once('navigation/class.team_approved_navigation.php');
     require_once('navigation/class.team_approved_navigation_lt18.php');
     
     // 5 
     // approved member of a team 
     
     if( $member->get_age() >= (int)18 )
     { $nav = new team_approved_navigation(); }
     else
     { $nav = new team_approved_navigation_lt18(); }
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( $nav->generate_left_navigation() );
     
     // set right navigation
     $right_nav = new navigation_list();
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_admin_member_list(), "admin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_requested_member_list(), "requestedmember", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_approved_member_list(), "approved", TRUE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C", 
     $this->get_upteam_list(), "upteam_list", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C", 
     $this->get_my_subteam_list($member), "subteam_list", FALSE ) );
     
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
     // not available in team navigation
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
     require_once('navigation/class.team_approving_admin_navigation.php');
     
     // 7 
     // requested admin of team from admin 
     
     $nav = new team_approving_admin_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( $nav->generate_left_navigation() );
     
     // set right navigation
     $right_nav = new navigation_list();
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_requested_admin_list(), "requestedadmin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_admin_member_list(), "admin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_approved_member_list(), "approved", TRUE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C", 
     $this->get_upteam_list(), "upteam_list", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C", 
     $this->get_my_subteam_list($member), "subteam_list", FALSE ) );
     
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
     require_once('navigation/class.team_is_sub_group_navigation.php');
     
     // 8 
     // Member of a sub group team
     
     $nav = new team_is_sub_group_navigation();
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( $nav->generate_left_navigation() );
     
     // set right navigation
     $right_nav = new navigation_list();
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_admin_member_list(), "admin", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C", 
     $this->get_approved_member_list(), "approved", TRUE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C", 
     $this->get_upteam_list(), "upteam_list", FALSE ) );
     
     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C", 
     $this->get_my_subteam_list($member), "subteam_list", FALSE ) );
     
     $this->set_right_navigation_list( $right_nav ) ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function generate_without_connection_navigation($member)
    {
     $file = 'class.team_without_connection_navigation.php';
     require_once('navigation/' . $file);
     $file = 'class.team_without_connection_navigation_lt18.php';
     require_once('navigation/' . $file);
     
     // 9 
     // Member with a profile but not member of the organisational structure
     
     if( $member->get_age() >= (int)18 )
     { $nav = new team_without_connection_navigation(); }
     else
     { $nav = new team_without_connection_navigation_lt18(); }
     
     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );
     
     // set left navigation
     $member->set_left_navigation_list( $nav->generate_left_navigation() );
     
     // set empty right navigation
     $right_nav = new navigation_list();
     $this->set_right_navigation_list( $right_nav );
    }
    


    public function generate_globadmin_navigation($member)
    {
     require_once('navigation/class.team_globadmin_navigation.php');

     // 12
     // global admin access

     $nav = new team_globadmin_navigation();

     // set top navigation
     $this->set_top_navigation_list( $nav->generate_top_navigation() );

     // set left navigation
     $member->set_left_navigation_list( $nav->generate_left_navigation() );

     // set right navigation
     $right_nav = new navigation_list();

     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C",
     $this->get_requested_admin_list(), "requestedadmin", FALSE ) );

     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C",
     $this->get_admin_member_list(), "admin", FALSE ) );

     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C",
     $this->get_requested_member_list(), "requestedmember", FALSE ) );

     $right_nav->add_item
     ( $nav->generate_right_member_navigation( "C",
     $this->get_approved_member_list(), "approved", TRUE ) );

     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C",
     $this->get_upteam_list(), "upteam_list", FALSE ) );

     $right_nav->add_item
     ( $nav->generate_right_team_navigation( "C",
     $this->get_my_subteam_list($member), "subteam_list", FALSE ) );

     $this->set_right_navigation_list( $right_nav ) ;
    }
}?>