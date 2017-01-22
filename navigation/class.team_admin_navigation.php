<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_admin_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 29.08.2016, 13:35:57 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_team_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_team_navigation.php');

/* user defined includes */
// section 10-30-8-119-7a1d091c:1418238b5d9:-8000:00000000000015CE-includes begin
// section 10-30-8-119-7a1d091c:1418238b5d9:-8000:00000000000015CE-includes end

/* user defined constants */
// section 10-30-8-119-7a1d091c:1418238b5d9:-8000:00000000000015CE-constants begin
// section 10-30-8-119-7a1d091c:1418238b5d9:-8000:00000000000015CE-constants end

/**
 * Short description of class team_admin_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_admin_navigation
    extends basic_team_navigation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function generate_top_navigation()
    {
     $navigation_list = new navigation_list();
     // Teammemberlist
     $item = new basic_navigation_item();
     $item->set_id( (int)5 );
     $item->set_link( "C" );
     $item->set_text( "C5" );
     $navigation_list->add_item( $item );
     
     // show tasklist
     $item = new task_author_navigation_item();
     $item->set_id( (int)29 );
     $item->set_link( "C" );
     $item->set_text( "C29" );
     $navigation_list->add_item( $item );
     
     // Calender
     $item = new basic_navigation_item();
     $item->set_id( (int)9 );
     $item->set_link( "C" );
     $item->set_text( "C9" );
     $navigation_list->add_item( $item );
     
     // Events
     $item = new event_navigation_item();
     $item->set_id( (int)34 );
     $item->set_link( "C" );
     $item->set_text( "C34" );
     $navigation_list->add_item( $item );
     
     // Market place
     $item = new basic_navigation_item();
     $item->set_id( (int)7 );
     $item->set_link( "C" );
     $item->set_text( "C7" );
     $navigation_list->add_item( $item );
     
     // images
     $item = new image_navigation_item();
     $item->set_id( (int)11 );
     $item->set_link( "C" );
     $item->set_text( "C11" );
     $navigation_list->add_item( $item );
     
     // documents
     $item = new document_navigation_item();
     $item->set_id( (int)13 );
     $item->set_link( "C" );
     $item->set_text( "C13" );
     $navigation_list->add_item( $item );
     
     // videos
     $item = new video_navigation_item();
     $item->set_id( (int)15 );
     $item->set_link( "C" );
     $item->set_text( "C15" );
     $navigation_list->add_item( $item );
     return $navigation_list;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function generate_left_navigation()
    {
     $navigation_list = parent::generate_left_navigation();
     
     /************************************************************/
     // change master data
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)100 );
     $first_level_item->set_link( "C" );
     $first_level_item->set_text( "C100" );
     $first_level_item->set_icon_name( "change.png" );
     
     // change profildata
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)2 );
     $second_level_item->set_link( "C" );
     $second_level_item->set_text( "C2" );
     $second_level_item->set_icon_name( "change.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     // change news data
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)3 );
     $second_level_item->set_link( "C" );
     $second_level_item->set_text( "C3" );
     $second_level_item->set_icon_name( "change.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     // register team
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)31 );
     $second_level_item->set_link( "C" );
     $second_level_item->set_text( "C31" );
     $second_level_item->set_icon_name( "register.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     // register event
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)33 );
     $second_level_item->set_link( "C" );
     $second_level_item->set_text( "C33" );
     $second_level_item->set_icon_name( "register.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     //control_table_item form
     $second_level_item = new visibility_type_item();
     $second_level_item->set_visibility_type( (int)3 );
     $second_level_item->set_id( (int)39 );
     $second_level_item->set_link( "C" );
     $second_level_item->set_text( "C39" );
     $second_level_item->set_icon_name( "register.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     // task form
     $second_level_item = new visibility_type_item();
     $second_level_item->set_visibility_type( (int)3 );
     $second_level_item->set_id( (int)38 );
     $second_level_item->set_link( "C" );
     $second_level_item->set_text( "C38" );
     $second_level_item->set_icon_name( "register.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     //27 import CSV
     $second_level_item = new visibility_type_item();
     $second_level_item->set_visibility_type( (int)1 );
     $second_level_item->set_id( (int)27 );
     $second_level_item->set_link( "C" );
     $second_level_item->set_text( "C27" );
     $second_level_item->set_icon_name( "register.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     //28 external invitatiton
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)28 );
     $second_level_item->set_link( "C" );
     $second_level_item->set_text( "C28" );
     $second_level_item->set_icon_name( "register.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     $navigation_list->add_item( $first_level_item );
     
     /************************************************************/
     
     // upload data
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)200 );
     $first_level_item->set_link( "C" );
     $first_level_item->set_text( "C200" );
     $first_level_item->set_icon_name( "up.png" );
     
     // upload images
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)10 );
     $second_level_item->set_link( "C" );
     $second_level_item->set_text( "C10" );
     $second_level_item->set_icon_name( "up.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     // upload documents
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)12 );
     $second_level_item->set_link( "C" );
     $second_level_item->set_text( "C12" );
     $second_level_item->set_icon_name( "up.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     // upload video
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)14 );
     $second_level_item->set_link( "C" );
     $second_level_item->set_text( "C14" );
     $second_level_item->set_icon_name( "up.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     $navigation_list->add_item( $first_level_item );
     
     /************************************************************/
     
     // 1024 remove_member_team_connection
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1024 );
     $first_level_item->set_link( "C" );
     $first_level_item->set_text( "C1024" );
     $first_level_item->set_icon_name( "erase.png" );
     $navigation_list->add_item( $first_level_item );
     
     return $navigation_list;
    }
}?>