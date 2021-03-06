<?php

/**
 * This php file is automatically generated by Skolenet
 * Model - Class: time_table_item
 */

if (0 > version_compare(PHP_VERSION, '5'))
{ die('This file was generated for PHP 5'); }


require_once('class.basic_list.php');


class generated_time_table_item_list
     extends basic_list
{

    /**
     *
     * This attribute hold the handle to the Mysqli statement time_table_item
     * @author Bernd Schr�der
     *
     * @access protected
     * @var Integer
     */
    protected $stmt = null;
    

    /**
     *
     * This is the list_load function of the class time_table_item
     * @author Bernd Schr�der
     *
     */
    public function list_load( $where_statement )
    {
      $prepare_statement = 
      "SELECT
      id,
      control_time_table_item_id,
      team_id,
      room_id,
      year,
      month,
      day,
      item_date,
      time_number
      FROM time_table_item " .
      $where_statement;
      return $this->basic_load( $prepare_statement );
    }

    /**
     *
     * This is the basic_count function of the class time_table_item
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
     * This is the basic_load function of the class time_table_item
     * @author Bernd Schr�der
     *
     */
    public function basic_load( $prepare_statement )
    {
      if( defined('__GEN_ROOT__') == FALSE )
      { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
      require_once(__GEN_ROOT__.'/class.time_table_item.php');

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
      $control_time_table_item_id,
      $team_id,
      $room_id,
      $year,
      $month,
      $day,
      $item_date,
      $time_number
      );
      $this->stmt->store_result();
      $this->stmt->data_seek( (int)( $start_row ) );
      while( $this->stmt->fetch()  
      AND ( $object_number < $max_row ) )
      {
      $new_object = new time_table_item();
      $new_object->set_id( $id );
      $new_object->set_control_time_table_item_id( $control_time_table_item_id );
      $new_object->set_team_id( $team_id );
      $new_object->set_room_id( $room_id );
      $new_object->set_year( $year );
      $new_object->set_month( $month );
      $new_object->set_day( $day );
      $new_object->set_item_date( $item_date );
      $new_object->set_time_number( $time_number );
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
     * This is the prepare_list function of the class time_table_item
     * @author Bernd Schr�der
     *
     */
    public function get_prepare_list()
    {
      return 
      "
      time_table_item.id,
      time_table_item.control_time_table_item_id,
      time_table_item.team_id,
      time_table_item.room_id,
      time_table_item.year,
      time_table_item.month,
      time_table_item.day,
      time_table_item.item_date,
      time_table_item.time_number
      ";
    }

    /**
     *
     * This is the set_binding function of the class time_table_item
     * @author Bernd Schr�der
     *
     */
    public function set_binding()
    {
      ;
    }

} /* end of class time_table_item */
?>