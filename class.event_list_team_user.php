<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.event_list_team_user.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 07.10.2015, 11:50:16 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include event_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.event_list.php');

/* user defined includes */
// section 127-0-0-1--159160ce:1502d5d3965:-8000:0000000000003080-includes begin
// section 127-0-0-1--159160ce:1502d5d3965:-8000:0000000000003080-includes end

/* user defined constants */
// section 127-0-0-1--159160ce:1502d5d3965:-8000:0000000000003080-constants begin
// section 127-0-0-1--159160ce:1502d5d3965:-8000:0000000000003080-constants end

/**
 * Short description of class event_list_team_user
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class event_list_team_user
    extends event_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute user_id
     *
     * @access public
     * @var Integer
     */
    public $user_id = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  user_id
     */
    public function set_user_id($user_id)
    {
     $this->user_id = $user_id;
    }
    /**
     * // owner_id is here the team
     * // user_id is here the member
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $owner_id = $this->get_owner_id();
     $user_id = $this->user_id;
     $startstr = $this->get_date();
     $this->stmt->bind_param('iis', $user_id, $owner_id, $startstr );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_active_interview_event_list()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM event, event_member
     WHERE (event_member.member_id=? AND
     event_member.event_id = event.id AND
     event.owner_id=? AND
     event.type=3 AND
     event.start_datetime >= ? )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_archived_interview_event_list()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM event, event_member
     WHERE (event_member.member_id=? AND
     event_member.event_id = event.id AND
     event.owner_id=? AND
     event.type=3 AND
     event.start_datetime < ? )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_active_invitation_event_list()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM event, event_member
     WHERE (event_member.member_id=? AND
     event_member.event_id = event.id AND
     event.owner_id=? AND
     event.type=2 AND
     event.start_datetime >= ? )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_archived_invitation_event_list()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM event, event_member
     WHERE (event_member.member_id=? AND
     event_member.event_id = event.id AND
     event.owner_id=? AND
     event.type=2 AND
     event.start_datetime < ? )";
     return $this->basic_load( $prepare_statement );
    }
}?>