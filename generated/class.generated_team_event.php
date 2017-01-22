<?php

/**
 * This php file is automatically generated by Skolenet
 * Model - Class: team_event
 */

if (0 > version_compare(PHP_VERSION, '5'))
{ die('This file was generated for PHP 5'); }


require_once('class.general_group.php');


class generated_team_event
     extends general_group
{
    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id
     *
     * @access private
     * @var Integer
     */
    private $id = null;

    /**
     * Short description of attribute team_id
     *
     * @access private
     * @var Integer
     */
    private $team_id = null;

    /**
     * Short description of attribute event_id
     *
     * @access private
     * @var Integer
     */
    private $event_id = null;

    /**
     * Short description of attribute requested
     *
     * @access private
     * @var time_stamp
     */
    private $requested = null;

    /**
     * Short description of attribute status
     *
     * @access private
     * @var Integer
     */
    private $status = null;

     // --- OPERATIONS ---

    /**
     * Short description of attribute id
     *
     * @access private
     * @var Integer
     */
    public function set_id($id)
    {
      $this->id = $id;
    }

    /**
     * Short description of attribute id
     *
     * @access private
     * @var Integer
     */
    public function get_id()
    {
      return $this->id;
    }

    /**
     * Short description of attribute team_id
     *
     * @access private
     * @var Integer
     */
    public function set_team_id($team_id)
    {
      $this->team_id = $team_id;
    }

    /**
     * Short description of attribute team_id
     *
     * @access private
     * @var Integer
     */
    public function get_team_id()
    {
      return $this->team_id;
    }

    /**
     * Short description of attribute event_id
     *
     * @access private
     * @var Integer
     */
    public function set_event_id($event_id)
    {
      $this->event_id = $event_id;
    }

    /**
     * Short description of attribute event_id
     *
     * @access private
     * @var Integer
     */
    public function get_event_id()
    {
      return $this->event_id;
    }

    /**
     * Short description of attribute requested
     *
     * @access private
     * @var time_stamp
     */
    public function set_requested($requested)
    {
      $this->requested = $requested;
    }

    /**
     * Short description of attribute requested
     *
     * @access private
     * @var time_stamp
     */
    public function get_requested()
    {
      return $this->requested;
    }

    /**
     * Short description of attribute status
     *
     * @access private
     * @var Integer
     */
    public function set_status($status)
    {
      $this->status = $status;
    }

    /**
     * Short description of attribute status
     *
     * @access private
     * @var Integer
     */
    public function get_status()
    {
      return $this->status;
    }

    /**
     *
     * This is the insert function of the class team_event
     * @author Bernd Schr�der
     *
     */
    public function insert()
    {
      require "data_connect.php";
      $insert_id = 0;
      $id = $this->get_id();
      $team_id = $this->get_team_id();
      $event_id = $this->get_event_id();
      $status = $this->get_status();
      if( $stmt = $mysqli->prepare(
      "INSERT INTO team_event
      (
      id,
      team_id,
      event_id,
      status
      )
      VALUES (?,?,?,?)"))
      {
      $stmt->bind_param
      (
      "iiii",
      $id,
      $team_id,
      $event_id,
      $status
      );
      $stmt->execute();
      $stmt->close();
      $insert_id = $mysqli->insert_id;
      }
      else
      {
      $this->db_error->insert_error();
      }
      $mysqli->close();
      $this->db_error->serialize();
      return $insert_id;
    }

    /**
     *
     * This is the load function of the class team_event
     * @author Bernd Schr�der
     *
     */
    public function load()
    {
      require "data_connect.php";
      $id = $this->get_id();
      if( $stmt = $mysqli->prepare(
      "SELECT
      id,
      team_id,
      event_id,
      requested,
      status
      FROM team_event WHERE id=?"))
      {
      $stmt->bind_param('i', $id );
      $stmt->execute();
      $stmt->bind_result
      (
      $id,
      $team_id,
      $event_id,
      $requested,
      $status
      );
      if( $stmt->fetch() == TRUE )
      {
      $this->set_id( $id );
      $this->set_team_id( $team_id );
      $this->set_event_id( $event_id );
      $this->set_requested( $requested );
      $this->set_status( $status );
      $stmt->close();
      }
      else
      {
      $this->db_warning->not_found();
      }
      $mysqli->close();
      }
      else
      {
      $this->db_error->load_error();
      }
      $this->db_error->serialize();
      $this->db_warning->serialize();
    }

    /**
     *
     * This is the update function of the class team_event
     * @author Bernd Schr�der
     *
     */
    public function update()
    {
      require "data_connect.php";
      $id = $this->get_id();
      $team_id = $this->get_team_id();
      $event_id = $this->get_event_id();
      $status = $this->get_status();
      $id = $this->get_id();
      if( $stmt = $mysqli->prepare(
      "UPDATE team_event SET
      id=?,
      team_id=?,
      event_id=?,
      status=?
      WHERE id=?"))
      {
      $stmt->bind_param
      (
      "iiiii",
      $id,
      $team_id,
      $event_id,
      $status,
      $id
      );
      $stmt->execute();
      $stmt->close();
      }
      else
      {
      $this->db_error->update_error();
      }
      $mysqli->close();
      $this->db_error->serialize();
    }

    /**
     *
     * This is the delete function of the class team_event
     * @author Bernd Schr�der
     *
     */
    public function delete()
    {
      require "data_connect.php";
      $id = $this->get_id();
      if( $stmt = $mysqli->prepare(
      "DELETE FROM team_event
      WHERE id=?"))
      {
      $stmt->bind_param("i",  $id);
      $stmt->execute();
      $stmt->close();
      }
      else
      {
      $this->db_error->delete_error();
      }
      $mysqli->close();
      $this->db_error->serialize();
    }

} /* end of class team_event */
?>