<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_approving_admin_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 12.03.2015, 22:30:40 with ArgoUML PHP module 
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
// section 10-30-8-114--410a5723:141bbf9de3e:-8000:000000000000168E-includes begin
// section 10-30-8-114--410a5723:141bbf9de3e:-8000:000000000000168E-includes end

/* user defined constants */
// section 10-30-8-114--410a5723:141bbf9de3e:-8000:000000000000168E-constants begin
// section 10-30-8-114--410a5723:141bbf9de3e:-8000:000000000000168E-constants end

/**
 * Short description of class team_approving_admin_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_approving_admin_navigation
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
     
     // 1022 accept_admin_team_inquiry
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1022 );
     $first_level_item->set_link( "C" );
     $first_level_item->set_text( "C1022" );
     $first_level_item->set_icon_name( "tup.png" );
     $navigation_list->add_item( $first_level_item );
     
     // 1023 decline_admin_team_inquiry
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)1023 );
     $first_level_item->set_link( "C" );
     $first_level_item->set_text( "C1023" );
     $first_level_item->set_icon_name( "tdown.png" );
     $navigation_list->add_item( $first_level_item );
     return $navigation_list;
    }
}?>