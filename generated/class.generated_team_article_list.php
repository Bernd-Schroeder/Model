<?php

/**
 * This php file is automatically generated by Skolenet
 * Model - Class: team_article
 */

if (0 > version_compare(PHP_VERSION, '5'))
{ die('This file was generated for PHP 5'); }


require_once('class.basic_list.php');


class generated_team_article_list
     extends basic_list
{

    /**
     *
     * This attribute hold the handle to the Mysqli statement team_article
     * @author Bernd Schr�der
     *
     * @access protected
     * @var Integer
     */
    protected $stmt = null;
    

    /**
     *
     * This is the list_load function of the class team_article
     * @author Bernd Schr�der
     *
     */
    public function list_load( $where_statement )
    {
      $prepare_statement = 
      "SELECT
      id,
      deleted,
      owner_id,
      author_id,
      written_stamp,
      modified_stamp,
      header,
      text,
      image_id,
      ref_link
      FROM team_article " .
      $where_statement;
      return $this->basic_load( $prepare_statement );
    }

    /**
     *
     * This is the basic_count function of the class team_article
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
     * This is the basic_load function of the class team_article
     * @author Bernd Schr�der
     *
     */
    public function basic_load( $prepare_statement )
    {
      if( defined('__GEN_ROOT__') == FALSE )
      { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
      require_once(__GEN_ROOT__.'/class.team_article.php');

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
      $deleted,
      $owner_id,
      $author_id,
      $written_stamp,
      $modified_stamp,
      $header,
      $text,
      $image_id,
      $ref_link
      );
      $this->stmt->store_result();
      $this->stmt->data_seek( (int)( $start_row ) );
      while( $this->stmt->fetch()  
      AND ( $object_number < $max_row ) )
      {
      $new_object = new team_article();
      $new_object->set_id( $id );
      $new_object->set_deleted( $deleted );
      $new_object->set_owner_id( $owner_id );
      $new_object->set_author_id( $author_id );
      $new_object->set_written_stamp( $written_stamp );
      $new_object->set_modified_stamp( $modified_stamp );
      $new_object->set_header( $header );
      $new_object->set_text( $text );
      $new_object->set_image_id( $image_id );
      $new_object->set_ref_link( $ref_link );
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
     * This is the prepare_list function of the class team_article
     * @author Bernd Schr�der
     *
     */
    public function get_prepare_list()
    {
      return 
      "
      team_article.id,
      team_article.deleted,
      team_article.owner_id,
      team_article.author_id,
      team_article.written_stamp,
      team_article.modified_stamp,
      team_article.header,
      team_article.text,
      team_article.image_id,
      team_article.ref_link
      ";
    }

    /**
     *
     * This is the set_binding function of the class team_article
     * @author Bernd Schr�der
     *
     */
    public function set_binding()
    {
      ;
    }

} /* end of class team_article */
?>