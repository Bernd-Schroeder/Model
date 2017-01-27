<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.file_group.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 27.01.2017, 15:23:56 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_db
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_db.php');

/* user defined includes */
// section 10-5-26-122--7c8ed42b:13c94a55353:-8000:00000000000011BA-includes begin
// section 10-5-26-122--7c8ed42b:13c94a55353:-8000:00000000000011BA-includes end

/* user defined constants */
// section 10-5-26-122--7c8ed42b:13c94a55353:-8000:00000000000011BA-constants begin
// section 10-5-26-122--7c8ed42b:13c94a55353:-8000:00000000000011BA-constants end

/**
 * Short description of class file_group
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class file_group
    extends basic_db
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute allowed_file_types
     *
     * @access private
     * @var Integer
     */
    private $allowed_file_types = null;

    /**
     * Short description of attribute max_file_size
     *
     * @access private
     * @var Integer
     */
    private $max_file_size = null;

    /**
     * Short description of attribute uploaded_file_name
     *
     * @access private
     * @var String
     */
    private $uploaded_file_name = null;

    /**
     * Short description of attribute file_error
     *
     * @access private
     * @var Integer
     */
    private $file_error = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     parent::__construct();
     $this->set_max_file_size( (int)20000000 );
     $this->set_allowed_types();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_uploader()
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.member.php');
     
     $uploader = new member();
     $uploader->set_id( $this->get_uploader_id());
     $uploader->load();
     return $uploader;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function set_allowed_types()
    {
     $types = array();
     $types[] = '';
     $this->allowed_types = $types;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  max_file_size
     */
    public function set_max_file_size($max_file_size)
    {
     // set the max value to 10 MB
     $this->max_file_size = $max_file_size;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_target_path()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function is_filesize_allowed()
    {
     $filesize_allowed = FALSE;
     if($this->get_size() <= $this->max_file_size)
     { $filesize_allowed = TRUE; }
     else
     { $this->db_warning->file_too_big(); }
     return $filesize_allowed;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function is_filetype_allowed()
    {
     $allowed = FALSE;
     if(in_array( $this->get_type(), $this->get_allowed_types() ))
     { $allowed = TRUE; }
     else
     { $this->db_warning->filetype_not_allowed(); }
     return $allowed;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function is_error_free()
    {
     $error_free = FALSE;
     if( $_FILES['userfile']['error']==0 )
     { $error_free = TRUE; }
     else
     { $this->db_warning->upload_file_error(); }
     return $error_free;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_file_name()
    {
     return $this->get_name() . "." . $this->get_type();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function set_file_type()
    {
     $name = $this->uploaded_file_name;
     $type = ltrim(substr( $name, strripos( $name, '.' )), '.');
     $this->set_type( strtolower( $type ));
    }
    /**
     *
     * @access public
     * @author Bernd schröder
     * @param  file_size
     * @version 1.0
     */
    public function set_file_size($file_size)
    {
     $this->set_size( $file_size );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  file_error
     */
    public function set_file_error($file_error)
    {
     $this->file_error = $file_error;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  file_name
     * @version 1.0
     */
    public function set_upload_file_name($file_name)
    {
     $this->uploaded_file_name = $file_name;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_upload_file_name()
    {
     $name = $this->uploaded_file_name;
     $name = substr( $name, (int)0, strripos( $name, '.' ));
     return strtolower( $name );
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_allowed_types()
    {
     return $this->allowed_types;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function generate_target_path()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  file_source
     * @version 1.0
     */
    public function upload_file($file_source)
    {
     $success = FALSE;
     
     $this->set_file_type();
     if
     (
     $this->is_filesize_allowed() AND
     $this->is_filetype_allowed() AND
     $this->is_error_free() )
     {
     $file_name = $this->get_file_name();
     $target = $this->generate_target_path();
     if( move_uploaded_file( $file_source, $target . $file_name ) )
     { $success = TRUE; }
     }
     else
     { $this->db_warning->serialize(); }
     return $success;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function remove_file()
    {
     $success = TRUE;
     $file_to_delete =
     $this->get_relative_target_path() . $this->get_file_name();
     if (file_exists($file_to_delete))
     { $success =unlink($file_to_delete); }
     return $success;
    }
}?>