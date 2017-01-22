<?php

/**
 * This php file is automatically generated by Skolenet
 * Model - Class: image
 */

if (0 > version_compare(PHP_VERSION, '5'))
{ die('This file was generated for PHP 5'); }


require_once('class.basic_list.php');


class generated_image_list
     extends basic_list
{

    /**
     *
     * This attribute hold the handle to the Mysqli statement image
     * @author Bernd Schr�der
     *
     * @access protected
     * @var Integer
     */
    protected $stmt = null;
    

    /**
     *
     * This is the list_load function of the class image
     * @author Bernd Schr�der
     *
     */
    public function list_load( $where_statement )
    {
      $prepare_statement = 
      "SELECT
      id,
      owner_group,
      owner_id,
      name,
      type,
      header,
      text,
      upload_stamp,
      size,
      uploader_id,
      clicked
      FROM image " .
      $where_statement;
      return $this->basic_load( $prepare_statement );
    }

    /**
     *
     * This is the basic_count function of the class image
     * @author Bernd Schr�der
     *
     */
    public function basic_count( $prepare_statement )
    {
      require "data_connect.php";

      $object_number = 0;
      if( $this->stmt = $mysqli->prepare( $prepare_statement ))
      {
      $this->set_binding();
      $this->stmt->execute();
      $this->stmt->store_result();
      $object_number = $this->stmt->num_rows;
      $this->stmt->close();
      }
      $mysqli->close();
      return $object_number;
    }

    /**
     *
     * This is the basic_load function of the class image
     * @author Bernd Schr�der
     *
     */
    public function basic_load( $prepare_statement )
    {
      if( defined('__GEN_ROOT__') == FALSE )
      { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
      require_once(__GEN_ROOT__.'/class.image.php');

      require "data_connect.php";

      $object_number = 0;
      $max_row = $this->get_row_per_page();
      $page = $this->get_page();
      $start_row = $page*$max_row;
      if( $this->stmt = $mysqli->prepare( $prepare_statement ))
      {
      $this->set_binding();
      $this->stmt->execute();
      $this->stmt->bind_result
      (
      $id,
      $owner_group,
      $owner_id,
      $name,
      $type,
      $header,
      $text,
      $upload_stamp,
      $size,
      $uploader_id,
      $clicked
      );
      $this->stmt->store_result();
      $this->stmt->data_seek( (int)( $start_row ) );
      while( $this->stmt->fetch()  
      AND ( $object_number < $max_row ) )
      {
      $new_object = new image();
      $new_object->set_id( $id );
      $new_object->set_owner_group( $owner_group );
      $new_object->set_owner_id( $owner_id );
      $new_object->set_name( $name );
      $new_object->set_type( $type );
      $new_object->set_header( $header );
      $new_object->set_text( $text );
      $new_object->set_upload_stamp( $upload_stamp );
      $new_object->set_size( $size );
      $new_object->set_uploader_id( $uploader_id );
      $new_object->set_clicked( $clicked );
      $this->add_item( $new_object );
      $object_number++;
      }
      $this->stmt->close();
      }
      $mysqli->close();
      return $object_number;
    }

    /**
     *
     * This is the prepare_list function of the class image
     * @author Bernd Schr�der
     *
     */
    public function get_prepare_list()
    {
      return 
      "
      image.id,
      image.owner_group,
      image.owner_id,
      image.name,
      image.type,
      image.header,
      image.text,
      image.upload_stamp,
      image.size,
      image.uploader_id,
      image.clicked
      ";
    }

    /**
     *
     * This is the set_binding function of the class image
     * @author Bernd Schr�der
     *
     */
    public function set_binding()
    {
      ;
    }

} /* end of class image */
?>