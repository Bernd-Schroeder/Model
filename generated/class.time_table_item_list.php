<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.time_table_item_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 02.01.2014, 13:42:46 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include calendar_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.calendar_list.php');
require_once('class.time_table_item.php');

/* user defined includes */
// section -64--88--78-21--12154a9b:1434d045ea8:-8000:0000000000001E55-includes begin
// section -64--88--78-21--12154a9b:1434d045ea8:-8000:0000000000001E55-includes end

/* user defined constants */
// section -64--88--78-21--12154a9b:1434d045ea8:-8000:0000000000001E55-constants begin
// section -64--88--78-21--12154a9b:1434d045ea8:-8000:0000000000001E55-constants end

/**
 * Short description of class time_table_item_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class time_table_item_list
    extends calendar_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function load()
    {
     $time_table_item_number = 0;
     $owner_id = $this->get_owner_id();
     require "data_connect.php";
     if ( $stmt = $mysqli->prepare("SELECT
     id
     FROM time_table_item
     WHERE control_time_table_item_id=?"))
     {
     $stmt->bind_param('i', $owner_id );
     $stmt->execute();
     $stmt->bind_result( $id );
     while($stmt->fetch())
     {
     $new_time_table_item = new time_table_item();
     $new_time_table_item->set_id($id);
     $new_time_table_item->load();
     $this->add_item( $new_time_table_item );
     $time_table_item_number++;
     }
     $stmt->close();
     }
     $mysqli->close();
     return $time_table_item_number;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function load_three_week_interval()
    {
     $time_table_item_number = 0;
     $team_id = $this->team_id;
     $start_year = $this->year;
     $start_month = $this->month;
     $start_day = $this->day;
     
     date_default_timezone_set('Europe/Berlin');
     
     $start_time = new DateTime();
     $start_time->setdate($start_year, $start_month, $start_day );
     $end_time = new DateTime();
     $end_time->setdate($start_year, $start_month, $start_day );     
     $end_time->modify('+21 day');
          
     $lower = date('Y-m-d', strtotime($start_time->format('Y-m-d')) );
     $upper = date('Y-m-d', strtotime($end_time->format('Y-m-d')) );
     
     require "data_connect.php";
     if ( $stmt = $mysqli->prepare("SELECT
     id
     FROM time_table_item
     WHERE
     team_id=? 
     AND item_date >=? AND item_date <=?
     ORDER BY item_date ASC")) 
     {
     $stmt->bind_param('iss', $team_id, $lower, $upper );
     $stmt->execute();
     $stmt->bind_result( $id );
     while($stmt->fetch())
     {
     $new_time_table_item = new time_table_item();
     $new_time_table_item->set_id($id);
     $new_time_table_item->load();
     $this->add_item( $new_time_table_item );
     $time_table_item_number++;
     }
     $stmt->close();
     }
     $mysqli->close();
     return $time_table_item_number;
    }



    public function load_day_list()
    {
     $time_table_item_number = 0;
     $team_id = $this->team_id;
     $year = $this->year;
     $month = $this->month;
     $day = $this->day;
     require "data_connect.php";
     if ( $stmt = $mysqli->prepare("SELECT
     id
     FROM time_table_item
     WHERE 
     team_id=? AND year=? AND month=? AND day=? "))
     {
     $stmt->bind_param('iiii', $team_id, $year, $month, $day );
     $stmt->execute();
     $stmt->bind_result( $id );
     while($stmt->fetch())
     {
     $new_time_table_item = new time_table_item();
     $new_time_table_item->set_id($id);
     $new_time_table_item->load();
     $this->add_item( $new_time_table_item );
     $time_table_item_number++;
     }
     $stmt->close();
     }
     $mysqli->close();
     return $time_table_item_number;
    }
}?>