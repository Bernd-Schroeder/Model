<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.task.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 23.09.2015, 14:21:41 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_task
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_task.php');

/* user defined includes */
// section 10-30-8-92--38de692e:1415422de7b:-8000:00000000000015B2-includes begin
// section 10-30-8-92--38de692e:1415422de7b:-8000:00000000000015B2-includes end

/* user defined constants */
// section 10-30-8-92--38de692e:1415422de7b:-8000:00000000000015B2-constants begin
// section 10-30-8-92--38de692e:1415422de7b:-8000:00000000000015B2-constants end

/**
 * Short description of class task
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class task
    extends generated_task
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_task_description_for_listing()
    {
     $return_string = $this->get_task_description();
     
     if ( strlen( $return_string ) > 25 )
     { $return_string = substr($return_string, 0, 20 ) . " ..."; }
     
     return $return_string;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_receiver_name()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.member.php');
     
     $author = new member();
     $author->set_id( $this->get_receiver_id());
     $author->load();
     return $author->get_forename() . " " . $author->get_name();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_receiver_link()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.member.php');
     
     $author = new member();
     $author->set_id( $this->get_receiver_id());
     $author->load();
     return $author->get_link( null );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_author_name()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.member.php');
     
     $author = new member();
     $author->set_id( $this->get_author_id());
     $author->load();
     return $author->get_forename() . " " . $author->get_name();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_author_link()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.member.php');
     
     $author = new member();
     $author->set_id( $this->get_author_id());
     $author->load();
     return $author->get_link( null );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_team_name()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.team.php');
     
     $team = new team();
     $team->set_id( $this->get_team_id());
     $team->load();
     return $team->get_name();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_team_link()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.team.php');
     
     $team = new team();
     $team->set_id( $this->get_team_id());
     $team->load();
     return $team->get_link();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_start_date()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.time_table_item.php');
     
     $start = new time_table_item();
     $start->set_id( $this->get_start_time_table_item_id() );
     $start->load();
     return $start->get_item_date();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_start_date_eu()
    {
     date_default_timezone_set('Europe/Berlin');
     $date = new datetime( $this->get_start_date() );
     return
     $date->format('d') . "." .
     $date->format('m') . "." .
     $date->format('Y');
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_end_date()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.time_table_item.php');
     
     $start = new time_table_item();
     $start->set_id( $this->get_end_time_table_item_id() );
     $start->load();
     return $start->get_item_date();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_end_date_eu()
    {
     date_default_timezone_set('Europe/Berlin');
     $date = new datetime( $this->get_end_date() );
     return
     $date->format('d') . "." .
     $date->format('m') . "." .
     $date->format('Y');
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_status_item()
    {
     if( $this->get_status() == (int)3 )
     { $tag = "<img src=\"". $_SESSION['icons'] .  "no.png\" " . "/>"; }
     elseif ( $this->get_status() == (int)2 )
     { $tag = "<img src=\"". $_SESSION['icons'] .  "partly.png\" " . "/>"; }
     else
     { $tag = "<img src=\"". $_SESSION['icons'] .  "ok.png\" " . "/>"; }
     return $tag;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  modus
     */
    public function get_link($modus)
    {
     "<a href=\"" . $_SESSION['C_control_base'] .
     "C_post_frame.php" .
     "?function=" . (int)38 .
     "&task_id=" . $this->get_id() .
     "&team_id=" . $this->get_team_id() .
     "&modus=" . $modus . "\">" .
     "<b>" . $this->get_team_name() . "</b>" . ": " .
     "</a> ";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_timely_status()
    {
     $timely = FALSE;
     
     date_default_timezone_set('Europe/Berlin');
     $now_date = new DateTime( "now" );
     $end_date = new datetime( $this->get_end_date() );
     
     if( $now_date <= $end_date )
     { $timely = TRUE; }
     
     return $timely;
    }
}?>