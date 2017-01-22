<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.basic_event_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.12.2016, 09:59:20 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author Bernd Schröder
 * @version 1.0
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_event
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_event.php');

/* user defined includes */
// section 10-30-8--90-310f676f:13a96cb6c5a:-8000:0000000000000CEC-includes begin
// section 10-30-8--90-310f676f:13a96cb6c5a:-8000:0000000000000CEC-includes end

/* user defined constants */
// section 10-30-8--90-310f676f:13a96cb6c5a:-8000:0000000000000CEC-constants begin
// section 10-30-8--90-310f676f:13a96cb6c5a:-8000:0000000000000CEC-constants end

/**
 * Short description of class basic_event_list
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class basic_event_list
    extends generated_event
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_requested_admin_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_requested_admin_event_members();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_approved_member_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_approved_event_members();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_member_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_event_members();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_all_member_list()
    {
     if ( $this->get_type() == (int)1 )
     // this event is an information meeting.
     // take the people from the up_team
     { $member_list = $this->get_upteam()->get_all_member_list(); }
     else
     { $member_list = $this->get_all_event_member_list(); }
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_all_event_member_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_all_event_members();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_requested_member_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_requested_event_members();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_interview_approved_member_list()
    {
     require_once('class.event_member_list.php');
     
     $event_member_list = new event_member_list();
     $event_member_list->set_owner_id( $this->get_id() );
     $event_member_list->load_approved_members();
     return $event_member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_interview_requested_member_list()
    {
     require_once('class.event_member_list.php');
     
     $event_member_list = new event_member_list();
     $event_member_list->set_owner_id( $this->get_id() );
     $event_member_list->load_requested_members();
     return $event_member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_interview_event_members()
    {
     require_once('class.event_member_list.php');
     
     $event_member_list = new event_member_list();
     $event_member_list->set_owner_id( $this->get_id() );
     $event_member_list->load_interview_event_members();
     return $event_member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member_id
     */
    public function get_my_interview_event_members($member_id)
    {
     require_once('class.event_member_list.php');
     
     $event_member_list = new event_member_list();
     $event_member_list->set_owner_id( $this->get_id() );
     $event_member_list->
     load_my_interview_event_members( $member_id );
     return $event_member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_article_list()
    {
     require_once('class.event_article_list.php');
     
     $article_list = new event_article_list();
     $article_list->set_owner_id( $this->get_id() );
     $article_list->load();
     return $article_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_article_list_count()
    {
     require_once('class.event_article_list.php');
     
     $article_list = new event_article_list();
     $article_list->set_owner_id( $this->get_id() );
     $count = $article_list->get_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_admin_member_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_admin_event_members();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_team_list()
    {
     require_once('class.team_list.php');
     
     // is not in use !
     $team_list = new team_list();
     $team_list->set_owner_id( $this->get_id() );
     $team_list->load_team_list();
     return $team_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_founder_teams()
    {
     require_once('class.team_list.php');
     
     $team_list = new team_list();
     $team_list->set_owner_id( $this->get_owner_id() );
     $team_list->load_founder_teams();
     return $team_list;
    }
}?>