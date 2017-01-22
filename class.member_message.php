<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_message.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 30.01.2016, 00:43:50 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_member_message
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_member_message.php');

/* user defined includes */
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001677-includes begin
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001677-includes end

/* user defined constants */
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001677-constants begin
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001677-constants end

/**
 * Short description of class member_message
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_message
    extends generated_member_message
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_read()
    {
     if( $this->get_read_stamp() == 0 )
     { return FALSE; }
     else
     { return TRUE; }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_not_read()
    {
     if( $this->get_read_stamp() == 0 )
     { return TRUE; }
     else
     { return FALSE; }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function update_read_stamp()
    {
     date_default_timezone_set('Europe/Berlin');
     $read_stamp = new DateTime( "now" );
     $read_stamp = $read_stamp->format('Y-m-d H:i:s');
     $this->set_read_stamp( $read_stamp );
     $this->update();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_text()
    {
     return str_replace("\n","<br />", parent::get_text() );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_media_list_count()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.message_media_list.php');
     
     $media_list = new message_media_list();
     $media_list->set_owner_id( $this->get_id() );
     $count = $media_list->get_media_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_picture_media_list_count()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.message_media_list.php');
     
     $media_list = new message_media_list();
     $media_list->set_owner_id( $this->get_id() );
     $count = $media_list->get_picture_media_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_picture_media_list()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.message_media_list.php');
     
     $media_list = new message_media_list();
     $media_list->set_owner_id( $this->get_id() );
     $media_list->load_picture_media_list();
     return $media_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_document_media_list_count()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.message_media_list.php');
     
     $media_list = new message_media_list();
     $media_list->set_owner_id( $this->get_id() );
     $count = $media_list->get_document_media_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_document_media_list()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.message_media_list.php');
     
     $media_list = new message_media_list();
     $media_list->set_owner_id( $this->get_id() );
     $media_list->load_document_media_list();
     return $media_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_video_media_list_count()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.message_media_list.php');
     
     $media_list = new message_media_list();
     $media_list->set_owner_id( $this->get_id() );
     $count = $media_list->get_video_media_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_video_media_list()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.message_media_list.php');
     
     $media_list = new message_media_list();
     $media_list->set_owner_id( $this->get_id() );
     $media_list->load_video_media_list();
     return $media_list;
    }
}?>