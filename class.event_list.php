<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.event_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 06.10.2015, 21:44:26 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_event_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_event_list.php');

/* user defined includes */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:00000000000013AC-includes begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:00000000000013AC-includes end

/* user defined constants */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:00000000000013AC-constants begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:00000000000013AC-constants end

/**
 * Short description of class event_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class event_list
    extends generated_event_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute date
     *
     * @access public
     * @var String
     */
    public $date = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     parent::__construct();
     
     date_default_timezone_set('Europe/Berlin');
     $date = new DateTime( "now" );
     $this->set_date( $date->format('Y-m-d') );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  date
     */
    public function set_date($date)
    {
     $this->date = $date;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_date()
    {
     return $this->date;
    }
    /**
     * // bind the team_id as the owner_id to the list search
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
     * // returns all events that belongs to the team and have type 1
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_team_events()
    {
     $where_statement =
     "WHERE owner_id=?ORDER BY start_datetime ASC";
     return $this->list_load( $where_statement );
    }
    /**
     * // returns all events that belongs to the team and have type 1
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_team_information_events()
    {
     $where_statement =
     "WHERE owner_id=? AND type=1 ORDER BY start_datetime ASC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_active_information_event_list()
    {
     $where_statement =
     "WHERE owner_id=? 
     AND 
     type=1 
     ORDER BY start_datetime ASC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_archived_information_event_list()
    {
     $where_statement =
     "WHERE owner_id=? AND 
     type=1 
     ORDER BY start_datetime ASC";
     return $this->list_load( $where_statement );
    }
}?>