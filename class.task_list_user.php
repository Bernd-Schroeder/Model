<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.task_list_user.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 30.09.2015, 19:58:59 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include task_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.task_list.php');

/* user defined includes */
// section 10-30-49-72--5360f815:1485918914a:-8000:0000000000001575-includes begin
// section 10-30-49-72--5360f815:1485918914a:-8000:0000000000001575-includes end

/* user defined constants */
// section 10-30-49-72--5360f815:1485918914a:-8000:0000000000001575-constants begin
// section 10-30-49-72--5360f815:1485918914a:-8000:0000000000001575-constants end

/**
 * Short description of class task_list_user
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class task_list_user
    extends task_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute date
     *
     * @access public
     * @var Integer
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
    public function set_binding()
    {
     $owner_id = $this->get_owner_id();
     $date = $this->date;
     $this->stmt->bind_param('is', $owner_id, $date );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_active_receiver_task()
    {
     $where_statement =
     "WHERE receiver_id=? AND end_item_date>=?
     ORDER BY end_item_date ASC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_receiver_task_count()
    {
     $prepare_statement =
     "SELECT id FROM task
     WHERE receiver_id=? AND end_item_date>=?";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_active_receiver_undo_task()
    {
     $where_statement =
     "WHERE receiver_id=? AND status!=1 AND end_item_date>=?
     ORDER BY end_item_date ASC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_receiver_undo_task_count()
    {
     $prepare_statement =
     "SELECT id FROM task
     WHERE receiver_id=? AND status!=1 AND end_item_date>=?";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_active_receiver_do_task()
    {
     $where_statement =
     "WHERE receiver_id=? AND status=1 AND end_item_date>=?
     ORDER BY end_item_date ASC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_receiver_do_task_count()
    {
     $prepare_statement =
     "SELECT id FROM task
     WHERE receiver_id=? AND status=1 AND end_item_date>=?";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_archived_receiver_task()
    {
     $where_statement =
     "WHERE receiver_id=? AND end_item_date<?
     ORDER BY end_item_date DESC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_archived_receiver_task_count()
    {
     $prepare_statement =
     "SELECT id FROM task
     WHERE receiver_id=? AND end_item_date<?";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_active_author_task()
    {
     $where_statement =
     "WHERE author_id=? AND end_item_date>=?
     ORDER BY end_item_date ASC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_author_task_count()
    {
     $prepare_statement =
     "SELECT id FROM task
     WHERE author_id=? AND end_item_date>=?";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_author_undo_task_count()
    {
     $prepare_statement =
     "SELECT id FROM task
     WHERE author_id=? AND status!=1 AND end_item_date>=?";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_archived_author_task()
    {
     $where_statement =
     "WHERE author_id=? AND end_item_date<?
     ORDER BY end_item_date DESC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_archived_author_task_count()
    {
     $prepare_statement =
     "SELECT id FROM task
     WHERE author_id=? AND end_item_date<?";
     return $this->basic_count( $prepare_statement );
    }
}?>