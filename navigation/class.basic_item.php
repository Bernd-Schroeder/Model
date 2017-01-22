<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.basic_item.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 29.08.2016, 13:20:03 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author Bernd Schröder
 * @version 1.0
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include navigation_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.navigation_list.php');

/* user defined includes */
// section 10-30-8-101--2d8314b4:13cc9bb62a5:-8000:00000000000011BF-includes begin
// section 10-30-8-101--2d8314b4:13cc9bb62a5:-8000:00000000000011BF-includes end

/* user defined constants */
// section 10-30-8-101--2d8314b4:13cc9bb62a5:-8000:00000000000011BF-constants begin
// section 10-30-8-101--2d8314b4:13cc9bb62a5:-8000:00000000000011BF-constants end

/**
 * Short description of class basic_item
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class basic_item
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id
     *
     * @access public
     * @var Integer
     */
    public $id = null;

    /**
     * Short description of attribute item_id
     *
     * @access public
     * @var Integer
     */
    public $item_id = null;

    /**
     * Short description of attribute link
     *
     * @access public
     * @var Integer
     */
    public $link = null;

    /**
     * Short description of attribute visible
     *
     * @access public
     * @var Boolean
     */
    public $visible = null;

    /**
     * Short description of attribute show_value
     *
     * @access public
     * @var Boolean
     */
    public $show_value = null;

    /**
     * Short description of attribute text
     *
     * @access public
     * @var String
     */
    public $text = null;

    /**
     * Short description of attribute icon_name
     *
     * @access public
     * @var String
     */
    public $icon_name = null;

    /**
     * Short description of attribute plain_text
     *
     * @access public
     * @var String
     */
    public $plain_text = null;

    /**
     * Short description of attribute navigation_list
     *
     * @access public
     * @var Integer
     */
    public $navigation_list = null;

    /**
     * Short description of attribute visibility_type
     *
     * @access public
     * @var Integer
     */
    public $visibility_type = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function __construct()
    {
     $this->navigation_list = new navigation_list();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_id()
    {
     return $this->id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  id
     */
    public function set_id($id)
    {
     $this->id = $id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_item_id()
    {
     return $this->item_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item_id
     */
    public function set_item_id($item_id)
    {
     $this->item_id = $item_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function get_always_visible()
    {
     return $this->visible;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  visible
     */
    public function set_always_visible($visible)
    {
     $this->visible = $visible;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_show_value()
    {
     return $this->show_value;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  show_value
     */
    public function set_show_value($show_value)
    {
     $this->show_value = $show_value;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_link()
    {
     return $this->link;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  link
     * @version 1.0
     */
    public function set_link($link)
    {
     $this->link = $link;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_text()
    {
     return $this->text;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  text
     * @version 1.0
     */
    public function set_text($text)
    {
     $this->text = $text;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_icon_name()
    {
     return $this->icon_name;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  icon_name
     * @version 1.0
     */
    public function set_icon_name($icon_name)
    {
     $this->icon_name = $icon_name;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_plain_text()
    {
     return $this->plain_text;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  plain_text
     */
    public function set_plain_text($plain_text)
    {
     $this->plain_text = $plain_text;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_navigation_list()
    {
     return $this->navigation_list;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  navigation_list
     * @version 1.0
     */
    public function set_navigation_list($navigation_list)
    {
     $this->navigation_list = $navigation_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function get_validate_value($item)
    {
     return (int)0;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  visibility_type
     */
    public function set_visibility_type($visibility_type)
    {
     $this->visibility_type = $visibility_type;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_visibility_type()
    {
     return $this->visibility_type;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function get_validate_visibility($item)
    {
     return TRUE;
    }
}?>