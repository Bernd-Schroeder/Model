<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.video.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 26.01.2016, 11:25:44 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_video
 *
 * @author Bernd Schröder
 */
require_once('generated/class.generated_video.php');

/* user defined includes */
// section 10-5-25--126-49378754:140356c3d4f:-8000:0000000000001488-includes begin
// section 10-5-25--126-49378754:140356c3d4f:-8000:0000000000001488-includes end

/* user defined constants */
// section 10-5-25--126-49378754:140356c3d4f:-8000:0000000000001488-constants begin
// section 10-5-25--126-49378754:140356c3d4f:-8000:0000000000001488-constants end

/**
 * Short description of class video
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class video
    extends generated_video
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_video()
    {
     return $this->get_target_path() . $this->get_file_name();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function upload_video( $file_source )
    {
     $video_id = (int)0;
     $success  = TRUE;
     
     $this->set_name( $this->get_owner_group() . "_tmp"  );
     $video_id = $this->insert();
     
     $this->set_name( $this->get_owner_group() . $video_id  );
     $this->set_id( $video_id );
     $success = $this->upload_file( $file_source );
     
     if ( $success )
     { $this->update(); }
     else
     { $this->delete(); }
     
     return $success;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_video( $file_name )
    {
     $is_type_allowed = FALSE;
             
     $this->set_upload_file_name( $file_name );
     $this->set_allowed_types();
     $this->set_file_type();
     $is_type_allowed = $this->is_filetype_allowed();
     $this->db_warning->reset();
          
     return $is_type_allowed;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_format_thumb()
    {
     return $_SESSION['images'] . "video/" . "mp4.png";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_video_format_icon()
    {
     return
     "<img src=\"". $this->get_format_thumb() .
     "\" alt=\"\" class=\"flexible  bordered\"/>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function generate_target_path()
    {
     $path_to_directory = "" .
     "../../user_data/video/" .
     $this->get_owner_group() . "_" .
     $this->get_owner_id() . "/";
     
     if (!is_dir( $path_to_directory ))
     { mkdir( $path_to_directory, 0777 ); }
     
     return $path_to_directory;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_target_path()
    {
     return "" .
     $_SESSION['user_data'] . "video/" .
     $this->get_owner_group() . "_" .
     $this->get_owner_id() . "/";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_relative_target_path()
    {
     return "" .
     "../../user_data/video/" .
     $this->get_owner_group() . "_" .
     $this->get_owner_id() . "/";
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
     $types[] = 'mp4';
     $this->allowed_types = $types;
    }
}?>