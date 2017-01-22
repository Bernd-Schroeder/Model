<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_is_sub_group_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 12.03.2015, 08:37:03 with ArgoUML PHP module 
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
// section 127-0-0-1--63bbc2a0:142796a904f:-8000:000000000000214F-includes begin
// section 127-0-0-1--63bbc2a0:142796a904f:-8000:000000000000214F-includes end

/* user defined constants */
// section 127-0-0-1--63bbc2a0:142796a904f:-8000:000000000000214F-constants begin
// section 127-0-0-1--63bbc2a0:142796a904f:-8000:000000000000214F-constants end

/**
 * Short description of class team_is_sub_group_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_is_sub_group_navigation
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
     // Team information
     $item = new basic_navigation_item();
     $item->set_id( (int)4 );
     $item->set_link( "C" );
     $item->set_text( "C4" );
     $navigation_list->add_item( $item );
     
     // Teammemberlist
     $item = new basic_navigation_item();
     $item->set_id( (int)5 );
     $item->set_link( "C" );
     $item->set_text( "C5" );
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
     
     // change news data
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)3 );
     $second_level_item->set_link( "C" );
     $second_level_item->set_text( "C3" );
     $second_level_item->set_icon_name( "change.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     $navigation_list->add_item( $first_level_item );
     
     /************************************************************/
     
     return $navigation_list;
    }
}?>