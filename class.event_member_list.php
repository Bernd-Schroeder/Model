<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.event_member_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.12.2016, 10:29:56 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_event_member_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_event_member_list.php');

/* user defined includes */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001394-includes begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001394-includes end

/* user defined constants */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001394-constants begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001394-constants end

/**
 * Short description of class event_member_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class event_member_list
    extends generated_event_member_list
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
    public function load_unaccepted_events()
    {
     $where_statement =
     "WHERE member_id=? AND (status = 4 OR status = 7)";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_member_events_count()
    {
     $prepare_statement =
     "SELECT
     id FROM event_member
     WHERE member_id=?";
     return $this->basic_count( $prepare_statement );
    }
    /**
     * This event_member_list should changed to member_list. This would be even
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_requested_members()
    {
     $where_statement = 
     "WHERE event_id = ? AND status = 4
     ORDER BY time_slot ASC";
     return $this->list_load( $where_statement );
    }
    /**
     * This event_member_list should changed to member_list. This would be even
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_approved_members()
    {
     $where_statement = 
     "WHERE event_id = ? AND status = 5
     ORDER BY time_slot ASC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_interview_event_members()
    {
     $where_statement =
     "WHERE event_id = ? AND
     (status = 4 OR status = 5 OR status = 9)
     ORDER BY time_slot ASC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member_id
     */
    public function load_my_interview_event_members($member_id)
    {
     $full_list = new event_member_list();
     $full_list->set_owner_id( $this->get_owner_id() );
     $full_list->load_interview_event_members();
     
     for( $n=0; $n < $full_list->get_item_count(); $n++ )
     {
     $item = $full_list->get_item( $n );
     if( $item->get_member_id() == $member_id )
     { $this->add_item( $item ); }
     }
    }
}?>