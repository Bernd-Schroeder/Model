<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.news.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 29.06.2015, 10:28:34 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_news
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_news.php');

/* user defined includes */
// section 10-5-25--126--8f7a905:14c7437e539:-8000:00000000000027E2-includes begin
// section 10-5-25--126--8f7a905:14c7437e539:-8000:00000000000027E2-includes end

/* user defined constants */
// section 10-5-25--126--8f7a905:14c7437e539:-8000:00000000000027E2-constants begin
// section 10-5-25--126--8f7a905:14c7437e539:-8000:00000000000027E2-constants end

/**
 * Short description of class news
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class news
    extends generated_news
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_item_link()
    {
     $item_link = "";
     switch( $this->get_entity_group() )
     {
     case ( "m" ):
     { ; }
     break;
     
     case ( "t" ):
     { $item_link = $this->get_team_link(); }
     break;
     
     case ( "e" ):
     { $item_link = $this->get_event_link(); }
     break;
     
     default:
     { ; }
     break;
     
     }
     return $item_link;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_uploader_link()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.member.php');
     
     $uploader = new member();
     $uploader->set_id( $this->get_uploader_id());
     $uploader->load();
     return $uploader->get_link( null );
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
     $team->set_id( $this->get_entity_id());
     $team->load();
     return $team->get_link();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_event_link()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.event.php');
     
     $event = new event();
     $event->set_id( $this->get_entity_id());
     $event->load();
     return $event->get_link();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_read()
    {
     $this->load();
     $this->set_is_read( TRUE );
     $this->update();
    }
}?>