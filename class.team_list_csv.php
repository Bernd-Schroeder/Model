<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_list_csv.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.11.2016, 13:31:06 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_team_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_team_list.php');

/* user defined includes */
// section 10-30--8--14--24d40fa0:15848c1adb9:-8000:00000000000017A1-includes begin
// section 10-30--8--14--24d40fa0:15848c1adb9:-8000:00000000000017A1-includes end

/* user defined constants */
// section 10-30--8--14--24d40fa0:15848c1adb9:-8000:00000000000017A1-constants begin
// section 10-30--8--14--24d40fa0:15848c1adb9:-8000:00000000000017A1-constants end

/**
 * Short description of class team_list_csv
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_list_csv
    extends generated_team_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute team_name
     *
     * @access public
     * @var String
     */
    public $team_name = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  team_name
     */
    public function set_team_name($team_name)
    {
     $this->team_name = $team_name;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $id = $this->get_owner_id();
     $this->stmt->bind_param('is', $id, $this->team_name );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load()
    {
     $where_statement =
     "WHERE (network_id=?) AND (name=?)";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function get_team()
    {
     $this->load();
     if( $this->get_item_count() > (int)0 ) 
     { return $this->get_item( (int)0 ); }
     else
     { return NULL; }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  team_name
     */
    public function get_sub_team($team_name)
    {
     require_once('class.team.php');
     
     $found = FALSE;
     $return_sub_team = NULL;
    
     $upper_team = $this->get_team();
     if ( $upper_team != NULL )
     {
     $sub_team_list = $upper_team->get_subteam_list();
     $count = $sub_team_list->get_item_count();
     
     for( $n=0; (($n < $count) AND ($found == FALSE)); $n++ )
     {
     $sub_team = $sub_team_list->get_item( $n );
     if( $sub_team->get_name() == $team_name )
     {
     $found = TRUE; 
     $return_sub_team = $sub_team; 
     }
     }
     }
     return $return_sub_team;
    }
}?>