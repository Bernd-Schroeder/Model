<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 13.03.2015, 17:42:33 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_member_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_member_list.php');

/* user defined includes */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:00000000000013A6-includes begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:00000000000013A6-includes end

/* user defined constants */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:00000000000013A6-constants begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:00000000000013A6-constants end

/**
 * Short description of class member_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_list
    extends generated_member_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $id = $this->get_owner_id();
     $this->stmt->bind_param('i', $id );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load()
    {
     $where_statement = 
     "WHERE id<?";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_follower_member_list()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, member_follower
     WHERE ( member_follower.member_id=? AND
     member_follower.follower_id = member.id AND
     member_follower.status = 5 )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_monitored_member_list()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, member_follower
     WHERE ( member_follower.follower_id=? AND
     member_follower.member_id = member.id AND
     member_follower.status = 5 )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_requested_follower_member_list()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, member_follower
     WHERE ( member_follower.member_id=? AND
     member_follower.follower_id = member.id AND
     member_follower.status = 3 )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_requested_monitored_member_list()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, member_follower
     WHERE ( member_follower.follower_id=? AND
     member_follower.member_id = member.id AND
     member_follower.status = 3 )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_owner_team_member()
    {
     $where_statement = 
     "WHERE owner_id=? AND status = 1";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_admin_team_members()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, team_member
     WHERE ( team_member.team_id=? AND
     team_member.status = 2 AND
     team_member.member_id = member.id )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_requested_team_members()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, team_member
     WHERE ( team_member.team_id=?
     AND ( team_member.status = 3 OR 
     team_member.status = 4 )
     AND team_member.member_id = member.id )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_approved_team_members()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, team_member
     WHERE ( team_member.team_id=? AND
     team_member.status = 5 AND
     team_member.member_id = member.id )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_requested_admin_team_members()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, team_member
     WHERE ( team_member.team_id=?
     AND team_member.status = 7
     AND team_member.member_id = member.id )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_team_members()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, team_member
     WHERE ( team_member.team_id=? AND
     team_member.member_id = member.id AND
     (team_member.status = 1 OR
     team_member.status = 2 OR
     team_member.status = 5 OR
     team_member.status = 7 ))";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_all_team_members()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, team_member
     WHERE ( team_member.team_id=? AND
     team_member.member_id = member.id )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_admin_event_members()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, event_member
     WHERE ( event_member.event_id=? AND
     event_member.status = 2 AND
     event_member.member_id = member.id )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_requested_event_members()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, event_member
     WHERE ( event_member.event_id=?
     AND ( event_member.status = 3 OR 
     event_member.status = 4 )
     AND event_member.member_id = member.id )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_approved_event_members()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, event_member
     WHERE ( event_member.event_id=? AND
     event_member.status = 5 AND
     event_member.member_id = member.id )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_requested_admin_event_members()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, event_member
     WHERE ( event_member.event_id=?
     AND event_member.status = 7
     AND event_member.member_id = member.id )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_event_members()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, event_member
     WHERE ( event_member.event_id=? AND
     event_member.member_id = member.id AND
     (event_member.status = 1 OR
     event_member.status = 2 OR
     event_member.status = 5 ))";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_all_event_members()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, event_member
     WHERE ( event_member.event_id=? AND
     event_member.member_id = member.id )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_interview_event_members()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM member, event_member
     WHERE ( event_member.event_id=? AND
     ((event_member.status = 4) OR 
     (event_member.status = 5))
     AND event_member.member_id = member.id )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member_id
     */
    public function is_member_element_of($member_id)
    {
     return $this->is_element_of( $member_id );
    }
}?>