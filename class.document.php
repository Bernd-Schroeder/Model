<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.document.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 27.01.2017, 15:33:17 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_document
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_document.php');

/* user defined includes */
// section 10-5-25--126-49378754:140356c3d4f:-8000:0000000000001486-includes begin
// section 10-5-25--126-49378754:140356c3d4f:-8000:0000000000001486-includes end

/* user defined constants */
// section 10-5-25--126-49378754:140356c3d4f:-8000:0000000000001486-constants begin
// section 10-5-25--126-49378754:140356c3d4f:-8000:0000000000001486-constants end

/**
 * Short description of class document
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class document
    extends generated_document
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
    public function get_document()
    {
     return $this->get_target_path() . $this->get_file_name();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  file
     */
    public function save_document($file)
    {
     $document_id = (int)0;
     $success     = TRUE;
     
     $this->set_name( $this->get_owner_group() . "_tmp"  );
     $document_id = $this->insert();
     
     $this->set_name( $this->get_owner_group() . $document_id  );
     $this->set_id( $document_id );
          
     $file_name = $this->get_name() . '.pdf';
     $target = $this->generate_target_path();
          
     $file->Output( "F", $target . $file_name );
     $this->update();
          
     return $target . $file_name;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  file_source
     */
    public function upload_document($file_source)
    {
     $document_id = (int)0;
     $success     = TRUE;
     
     $this->set_name( $this->get_owner_group() . "_tmp"  );
     $document_id = $this->insert();
     
     $this->set_name( $this->get_owner_group() . $document_id  );
     $this->set_id( $document_id );
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
     * @param  file_name
     */
    public function is_document($file_name)
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
     return $_SESSION['images'] . "document/" . $this->get_type() .".png";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_document_format_icon()
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
     "../../user_data/document/" .
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
     $_SESSION['user_data'] . "document/" .
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
     "../../user_data/document/" .
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
     $this->allowed_types = ["doc", "docx", "ppt", "pptx",
     "xls", "xlsx", "odt", "odp", "ods", "txt", "pdf", "csv"];
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array_list
     */
    public function generate_excel_file($array_list)
    {
     $success = FALSE;
     $this->set_size( '10000' );
     $this->set_type = 'xls';
     $file_name = $this->get_file_name();
     $target = $this->generate_target_path();
     
     $fp = fopen( $target . $file_name , 'w');
     foreach ($array_list as $fields)
     { fputcsv($fp, $fields, ';'); }
     fclose($fp);
     return $success;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_document_link()
    {
     return
     "<a target=\"_blank\" href=\"" . $this->get_document() . "\">" .
     $this->get_header() . "</a>";
    }
}?>