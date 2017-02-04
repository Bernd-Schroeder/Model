<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.media_file_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 03.02.2017, 15:24:31 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_media_file_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_media_file_list.php');

/* user defined includes */
// section 10-5-24--18-7a3a930c:15a0422c729:-8000:00000000000017ED-includes begin
// section 10-5-24--18-7a3a930c:15a0422c729:-8000:00000000000017ED-includes end

/* user defined constants */
// section 10-5-24--18-7a3a930c:15a0422c729:-8000:00000000000017ED-constants begin
// section 10-5-24--18-7a3a930c:15a0422c729:-8000:00000000000017ED-constants end

/**
 * Short description of class media_file_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class media_file_list
    extends generated_media_file_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute media_id
     *
     * @access private
     * @var Integer
     */
    private $media_id = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  media_id
     */
    public function set_media_id($media_id)
    {
     $this->media_id = $media_id;
    }
    /**
     * // owner_id is here nothing not to confuse you
     * // media_id is the common id from the media table
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $owner_id = (int)0;
     $media_id = $this->media_id;
     $this->stmt->bind_param('i', $media_id );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_all_media()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM media, media_file
     WHERE (media.media_id=? AND
     media.media_file_id = media_file.id )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function get_all_media_count()
    {
     $prepare_statement =
     "SELECT
     id FROM image
     WHERE media.media_id=? AND
     media.media_file_id = media_file.id";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_picture()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM media, media_file
     WHERE (media.media_id=? AND
     media.media_file_id = media_file.id AND
     media_file.picture_id >= (int)0 )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function get_picture_count()
    {
     $prepare_statement =
     "SELECT
     id FROM image
     WHERE media.media_id=? AND
     media.media_file_id = media_file.id AND
     media_file.picture_id >= (int)0";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_document()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM media, media_file
     WHERE (media.media_id=? AND
     media.media_file_id = media_file.id AND
     media_file.document_id >= (int)0 )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_document_count()
    {
     $prepare_statement =
     "SELECT
     id FROM image
     WHERE media.media_id=? AND
     media.media_file_id = media_file.id AND
     media_file.document_id >= (int)0";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_video()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM media, media_file
     WHERE (media.media_id=? AND
     media.media_file_id = media_file.id AND
     media_file.video_id >= (int)0 )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_video_count()
    {
     $prepare_statement =
     "SELECT
     id FROM image
     WHERE media.media_id=? AND
     media.media_file_id = media_file.id AND
     media_file.video_id >= (int)0";
     return $this->basic_count( $prepare_statement );
    }
}?>