<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.message_media_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 29.01.2016, 12:52:18 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_message_media_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_message_media_list.php');

/* user defined includes */
// section 10-5-23-10--3b7e5a55:15254821464:-8000:00000000000025A9-includes begin
// section 10-5-23-10--3b7e5a55:15254821464:-8000:00000000000025A9-includes end

/* user defined constants */
// section 10-5-23-10--3b7e5a55:15254821464:-8000:00000000000025A9-constants begin
// section 10-5-23-10--3b7e5a55:15254821464:-8000:00000000000025A9-constants end

/**
 * Short description of class message_media_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class message_media_list
    extends generated_message_media_list
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
    public function get_media_count()
    {
     $prepare_statement =
     "SELECT
     id FROM message_media
     WHERE message_id=?";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_media_list()
    {
     $where_statement = 
     "WHERE message_id=?";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_picture_media_count()
    {
     $prepare_statement =
     "SELECT
     id FROM message_media
     WHERE message_id=? AND picture_id > 0";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_picture_media_list()
    {
     $where_statement = 
     "WHERE message_id=? AND picture_id > 0";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_document_media_count()
    {
     $prepare_statement =
     "SELECT
     id FROM message_media
     WHERE message_id=? AND document_id > 0";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_document_media_list()
    {
     $where_statement = 
     "WHERE message_id=? AND document_id > 0";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_video_media_count()
    {
     $prepare_statement =
     "SELECT
     id FROM message_media
     WHERE message_id=? AND video_id > 0";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_video_media_list()
    {
     $where_statement = 
     "WHERE message_id=? AND video_id > 0";
     return $this->list_load( $where_statement );
    }
}?>