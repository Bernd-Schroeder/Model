<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.event_list_calendar.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 27.01.2015, 15:36:00 with ArgoUML PHP module 
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
// section 10-30-49-72--5360f815:1485918914a:-8000:0000000000001588-includes begin
// section 10-30-49-72--5360f815:1485918914a:-8000:0000000000001588-includes end

/* user defined constants */
// section 10-30-49-72--5360f815:1485918914a:-8000:0000000000001588-constants begin
// section 10-30-49-72--5360f815:1485918914a:-8000:0000000000001588-constants end

/**
 * Short description of class event_list_calendar
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class event_list_calendar
    extends generated_event_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute starttime
     *
     * @access public
     * @var String
     */
    public $starttime = null;

    /**
     * Short description of attribute endtime
     *
     * @access public
     * @var String
     */
    public $endtime = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  starttime
     */
    public function set_starttime($starttime)
    {
     $this->starttime = $starttime;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  endtime
     */
    public function set_endtime($endtime)
    {
     $this->endtime = $endtime;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $id = $this->get_owner_id();
     $startstr = $this->starttime->format('Y-m-d');
     $endstr = $this->endtime->format('Y-m-d');
     $this->stmt->bind_param('iss', $id, $startstr, $endstr);
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM event, team_event
     WHERE ( team_event.team_id=? AND
     team_event.event_id = event.id ) AND
     ( start_datetime >= ? ) AND ( end_datetime <= ? )";
     return $this->basic_load( $prepare_statement );
    }
}?>