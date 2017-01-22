<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_message_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 15.06.2015, 16:40:18 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_member_message_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_member_message_list.php');

/* user defined includes */
// section 10-5-21--35--1b269d43:14acf5317f0:-8000:0000000000008DC7-includes begin
// section 10-5-21--35--1b269d43:14acf5317f0:-8000:0000000000008DC7-includes end

/* user defined constants */
// section 10-5-21--35--1b269d43:14acf5317f0:-8000:0000000000008DC7-constants begin
// section 10-5-21--35--1b269d43:14acf5317f0:-8000:0000000000008DC7-constants end

/**
 * Short description of class member_message_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_message_list
    extends generated_member_message_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute reader_id
     *
     * @access public
     * @var Integer
     */
    public $reader_id = null;

    /**
     * Short description of attribute author_id
     *
     * @access public
     * @var Integer
     */
    public $author_id = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  reader_id
     */
    public function set_reader_id($reader_id)
    {
     $this->reader_id = $reader_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  author_id
     */
    public function set_author_id($author_id)
    {
     $this->author_id = $author_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $this->stmt->bind_param('iiii', 
     $this->author_id, $this->reader_id, 
     $this->author_id, $this->reader_id);
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_all()
    {
     $where_statement =
     "WHERE ((author_id = ? AND reader_id = ?) 
     OR (reader_id = ? AND author_id = ? ))
     ORDER BY written_stamp DESC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_all_count()
    {
     $prepare_statement =
     "SELECT id FROM member_message
     WHERE ((author_id = ? AND reader_id = ?)
     OR (reader_id = ? AND author_id = ?))";
     return $this->basic_count( $prepare_statement );
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
     WHERE ((author_id = ? AND reader_id = ?)
     OR (author_id = ? AND reader_id = ?))
     AND read_stamp = 0";
     return $this->basic_count( $prepare_statement );
    }
}?>