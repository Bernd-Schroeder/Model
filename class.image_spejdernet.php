<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.image.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 26.01.2016, 11:29:09 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author Bernd Schröder
 * @version 1.0
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_image
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_image.php');

/* user defined includes */
// section 10-30-8-117-50e04501:13c8629b25b:-8000:00000000000010F5-includes begin
// section 10-30-8-117-50e04501:13c8629b25b:-8000:00000000000010F5-includes end

/* user defined constants */
// section 10-30-8-117-50e04501:13c8629b25b:-8000:00000000000010F5-constants begin
// section 10-30-8-117-50e04501:13c8629b25b:-8000:00000000000010F5-constants end

/**
 * Short description of class image
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class image
    extends generated_image
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @return mixed
     * @version 1.0
     */
    public function get_image()
    {
     return $this->get_target_path() . $this->get_file_name();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function upload_image( $file_source )
    {
     $image_id = (int)0;
     $success  = TRUE;
     
     $this->set_name( $this->get_owner_group() . "_tmp"  );
     $this->set_clicked( (int)0 );
     $image_id = $this->insert();
     
     $this->set_name( $this->get_owner_group() . $image_id  );
     $this->set_id( $image_id );
     $success = $this->upload_file( $file_source );
     
     if ( $success )
     {
     $this->generate_medium_thumb();
     $this->generate_small_thumb();
     $this->generate_article_thumb();
     $this->update();
     }
     else
     { $this->delete(); }
     return $success;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_image( $file_name )
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
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_format_thumb()
    {
     return $_SESSION['images'] . "image/" . $this->get_type() . ".png";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_image_format_icon()
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
     "../user_data/images/" .
     $this->get_owner_group() . "_" .
     $this->get_owner_id() . "/";
     
//     if (!is_dir( $path_to_directory ))
//     { mkdir( $path_to_directory, 0777 ); }
     
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
     $_SESSION['user_data'] . "images/" .
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
     "../user_data/images/" .
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
     $this->allowed_types = ["jpg", "jpeg", "png"];
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  width
     * @param  source
     * @param  target
     */
    public function generate_thumb($width, $source, $target)
    {
     $format = $this->get_type();
     if(( $format == "jpg" ) OR ( $format == "jpeg" ))
     { return $this->generate_jpg_thumb($width, $source, $target); }
     elseif( $format == "png" )
     { return $this->generate_png_thumb($width, $source, $target); }
     else
     return FALSE;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  width
     * @param  source
     * @param  target
     */
    public function generate_jpg_thumb($width, $source, $target)
    {
     $success = FALSE;
     $desired_width = $width;
     
     $source_img = imagecreatefromjpeg($source);
     $width = imagesx($source_img);
     $height = imagesy($source_img);
     $desired_height = floor($height *
     ($desired_width / $width));
     $new_width = $desired_width;
     $new_height = floor( $height *
     ( $desired_width / $width ) );
     $thumb = imagecreatetruecolor( $new_width,
     $new_height );
     imagecopyresized( $thumb, $source_img,
     0, 0, 0, 0, $new_width, $new_height, $width, $height );
     if( imagejpeg($thumb, $target ) )
     { $success = TRUE; }
     
     // Free up memory
     imagedestroy( $source_img );
     imagedestroy( $thumb );
     
     return $success;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  width
     * @param  source
     * @param  target
     */
    public function generate_png_thumb($width, $source, $target)
    {
     $success = FALSE;
     $desired_width = $width;
     
     $source_img = imagecreatefrompng($source);
     $width = imagesx($source_img);
     $height = imagesy($source_img);
     $desired_height = floor($height *
     ($desired_width / $width));
     $new_width = $desired_width;
     $new_height = floor( $height *
     ( $desired_width / $width ) );
     $thumb = imagecreatetruecolor( $new_width,
     $new_height );
     imagecopyresized( $thumb, $source_img,
     0, 0, 0, 0, $new_width, $new_height, $width, $height );
     if( imagepng($thumb, $target ) )
     { $success = TRUE; }
     
     // Free up memory
     imagedestroy( $source_img );
     imagedestroy( $thumb );
     
     return $success;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function remove_all_files()
    {
     $success = FALSE;
     $this->remove_medium_thumb();
     $this->remove_small_thumb();
     $this->remove_article_thumb();
     $success = $this->remove_file();
     return $success;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function generate_medium_thumb()
    {
     $scr = $this->generate_target_path() . $this->get_file_name();
     $target = $this->generate_target_path() . "medium_thumbs/";
     if (!is_dir( $target ))
     { mkdir( $target ); }
     $target = $target . $this->get_file_name();
     $success = $this->generate_thumb( (int)150, $scr, $target );
     return $success;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_medium_thumb()
    {
     return $this->get_target_path() . "medium_thumbs/" .
     $this->get_file_name();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_avatar_thumb()
    {
     if ( $this->get_id() )
     { return $this->get_medium_thumb(); }
     else
     { return $this->get_dummy_thumb(); }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_dummy_thumb()
    {
     return $_SESSION['user_data'] . "images/" . "avatar_m.jpg";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function remove_medium_thumb()
    {
     $success = FALSE;
     $file_to_delete = $this->get_relative_target_path() .
     "medium_thumbs/" . $this->get_file_name();
     if (file_exists($file_to_delete))
     {
     unlink($file_to_delete);
     $success = TRUE;
     }
     return $success;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function generate_article_thumb()
    {
     $scr = $this->generate_target_path() . $this->get_file_name();
     $target = $this->generate_target_path() . "article_thumbs/";
     if (!is_dir( $target ))
     { mkdir( $target ); }
     $target = $target . $this->get_file_name();
     $success = $this->generate_thumb( (int)250, $scr, $target );
     return $success;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_article_thumb()
    {
     return $this->get_target_path() . "article_thumbs/" .
     $this->get_file_name();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function remove_article_thumb()
    {
     $success = FALSE;
     $file_to_delete = $this->get_relative_target_path() .
     "article_thumbs/" . $this->get_file_name();
     if (file_exists($file_to_delete))
     {
     unlink($file_to_delete);
     $success = TRUE;
     }
     return $success;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function generate_small_thumb()
    {
     $scr = $this->generate_target_path() . $this->get_file_name();
     $target = $this->generate_target_path() . "small_thumbs/";
     if (!is_dir( $target ))
     { mkdir( $target ); }
     $target = $target . $this->get_file_name();
     $success = $this->generate_thumb( (int)50, $scr, $target );
     return $success;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_small_thumb()
    {
     return $this->get_target_path() . "small_thumbs/" .
     $this->get_file_name();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_avatar_icon()
    {
     if ( $this->get_id() )
     { return $this->get_small_thumb(); }
     else
     { return $this->get_dummy_icon(); }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_dummy_icon()
    {
     return $_SESSION['user_data'] . "images/" . "avatar_m_icon.jpg";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function remove_small_thumb()
    {
     $success = FALSE;
     $file_to_delete = $this->get_relative_target_path() .
     "small_thumbs/" . $this->get_file_name();
     if (file_exists($file_to_delete))
     {
     unlink($file_to_delete);
     $success = TRUE;
     }
     return $success;
    }
}?>