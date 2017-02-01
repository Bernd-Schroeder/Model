<?php

/**
 * This php file is automatically generated by Skolenet
 * Model - Class: team_network_id
 */

if (0 > version_compare(PHP_VERSION, '5'))
{ die('This file was generated for PHP 5'); }


require_once('class.basic_list.php');


class generated_team_network_id_list
     extends basic_list
{

    /**
     *
     * This attribute hold the handle to the Mysqli statement team_network_id
     * @author Bernd Schr�der
     *
     * @access protected
     * @var Integer
     */
    protected $stmt = null;
    

    /**
     *
     * This is the list_load function of the class team_network_id
     * @author Bernd Schr�der
     *
     */
    public function list_load( $where_statement )
    {
      $prepare_statement = 
      "SELECT
      id,
      top_team_id
      FROM team_network_id " .
      $where_statement;
      return $this->basic_load( $prepare_statement );
    }

    /**
     *
     * This is the basic_count function of the class team_network_id
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
     * This is the basic_load function of the class team_network_id
     * @author Bernd Schr�der
     *
     */
    public function basic_load( $prepare_statement )
    {
      if( defined('__GEN_ROOT__') == FALSE )
      { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
      require_once(__GEN_ROOT__.'/class.team_network_id.php');

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
      $top_team_id
      );
      $this->stmt->store_result();
      $this->stmt->data_seek( (int)( $start_row ) );
      while( $this->stmt->fetch()  
      AND ( $object_number < $max_row ) )
      {
      $new_object = new team_network_id();
      $new_object->set_id( $id );
      $new_object->set_top_team_id( $top_team_id );
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
     * This is the prepare_list function of the class team_network_id
     * @author Bernd Schr�der
     *
     */
    public function get_prepare_list()
    {
      return 
      "
      team_network_id.id,
      team_network_id.top_team_id
      ";
    }

    /**
     *
     * This is the set_binding function of the class team_network_id
     * @author Bernd Schr�der
     *
     */
    public function set_binding()
    {
      ;
    }

} /* end of class team_network_id */
?>