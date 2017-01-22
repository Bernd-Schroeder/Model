<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.A15_on_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 17.07.2015, 09:50:20 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include A_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.A_navigation.php');

/* user defined includes */
// section 127-0-0-1--71f03ac0:14e87bc885d:-8000:0000000000002B7B-includes begin
// section 127-0-0-1--71f03ac0:14e87bc885d:-8000:0000000000002B7B-includes end

/* user defined constants */
// section 127-0-0-1--71f03ac0:14e87bc885d:-8000:0000000000002B7B-constants begin
// section 127-0-0-1--71f03ac0:14e87bc885d:-8000:0000000000002B7B-constants end

/**
 * Short description of class A15_on_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A15_on_navigation
    extends A_navigation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function generate_left_member_navigation()
    {
     $navigation_list = parent::generate_left_navigation();
     
     // school
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)15 );
     $first_level_item->set_link( "A" );
     $first_level_item->set_text( "A1" );
     $first_level_item->set_icon_name( "home.png" );
     $navigation_list->add_item( $first_level_item );
     
     // Teacher
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)16 );
     $first_level_item->set_link( "A" );
     $first_level_item->set_text( "A2" );
     $first_level_item->set_icon_name( "teachers.png" );
     $navigation_list->add_item( $first_level_item );
     
     // Pupils
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)17 );
     $first_level_item->set_link( "A" );
     $first_level_item->set_text( "A3" );
     $first_level_item->set_icon_name( "pupils.png" );
     $navigation_list->add_item( $first_level_item );
     
     // Parents
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)18 );
     $first_level_item->set_link( "A" );
     $first_level_item->set_text( "A4" );
     $first_level_item->set_icon_name( "parents.png" );
     $navigation_list->add_item( $first_level_item );
     
     return $navigation_list;
    }
}?>