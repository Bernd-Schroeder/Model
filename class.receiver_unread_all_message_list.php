<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.receiver_unread_all_message_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 15.06.2015, 22:15:41 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include member_message_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.member_message_list.php');

/* user defined includes */
// section 10-5-28--57--2d64fbf4:14df89602fe:-8000:0000000000004B24-includes begin
// section 10-5-28--57--2d64fbf4:14df89602fe:-8000:0000000000004B24-includes end

/* user defined constants */
// section 10-5-28--57--2d64fbf4:14df89602fe:-8000:0000000000004B24-constants begin
// section 10-5-28--57--2d64fbf4:14df89602fe:-8000:0000000000004B24-constants end

/**
 * Short description of class receiver_unread_all_message_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class receiver_unread_all_message_list
    extends member_message_list
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
     $this->stmt->bind_param('i', $this->reader_id );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_unread()
    {
     $where_statement =
     "WHERE ( reader_id = ? AND read_stamp = 0 )
     ORDER BY written_stamp DESC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_unread_count()
    {
     $prepare_statement =
     "SELECT id FROM member_message
     WHERE ( reader_id = ? AND read_stamp = 0 )";
     return $this->basic_count( $prepare_statement );
    }
}?>