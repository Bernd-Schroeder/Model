<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.event_list_team.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 07.10.2015, 11:51:09 with ArgoUML PHP module 
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
// section 10-5-21--95-75613005:1504166270b:-8000:00000000000045C8-includes begin
// section 10-5-21--95-75613005:1504166270b:-8000:00000000000045C8-includes end

/* user defined constants */
// section 10-5-21--95-75613005:1504166270b:-8000:00000000000045C8-constants begin
// section 10-5-21--95-75613005:1504166270b:-8000:00000000000045C8-constants end

/**
 * Short description of class event_list_team
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class event_list_team
    extends event_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     * // owner_id is here the member
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $owner_id = $this->get_owner_id();
     $startstr = $this->get_date();
     $this->stmt->bind_param('is', $owner_id, $startstr );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_active_information_event_list()
    {
     $where_statement =
     "WHERE owner_id=? AND 
     type=1 AND
     event.start_datetime >= ?
     ORDER BY start_datetime ASC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function load_archived_information_event_list()
    {
     $where_statement =
     "WHERE owner_id=? AND 
     type=1 AND
     event.start_datetime < ?
     ORDER BY start_datetime ASC";
     return $this->list_load( $where_statement );
    }
}?>