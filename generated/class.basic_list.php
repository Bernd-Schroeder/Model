<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.basic_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 26.07.2016, 13:05:49 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 127-0-0-1--74b9d05:1480e22a6b3:-8000:0000000000001328-includes begin
// section 127-0-0-1--74b9d05:1480e22a6b3:-8000:0000000000001328-includes end

/* user defined constants */
// section 127-0-0-1--74b9d05:1480e22a6b3:-8000:0000000000001328-constants begin
// section 127-0-0-1--74b9d05:1480e22a6b3:-8000:0000000000001328-constants end

/**
 * Short description of class basic_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class basic_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute data_array
     *
     * @access private
     * @var Integer
     */
    private $data_array = null;

    /**
     * Short description of attribute db_error
     *
     * @access private
     * @var Integer
     */
    private $db_error = null;

    /**
     * Short description of attribute db_warning
     *
     * @access private
     * @var Integer
     */
    private $db_warning = null;

    /**
     * Short description of attribute owner_id
     *
     * @access private
     * @var Integer
     */
    private $owner_id = null;

    /**
     * Short description of attribute page
     *
     * @access private
     * @var Integer
     */
    private $page = null;

    /**
     * Short description of attribute row_per_page
     *
     * @access private
     * @var Integer
     */
    private $row_per_page = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     require_once('class.db_error.php');
     require_once('class.db_warning.php'); 
     
     $this->data_array = array();
     $this->db_error = new db_error();
     $this->db_warning = new db_warning();
     $this->page = (int)0;
//     $this->row_per_page = (int)100;
     $this->row_per_page = (int)500;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_db_error()
    {
     return $this->db_error;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_db_warning()
    {
     return $this->db_warning;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_owner_id()
    {
     return $this->owner_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  owner_id
     */
    public function set_owner_id($owner_id)
    {
     $this->owner_id = $owner_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_page()
    {
     return $this->page;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  page
     */
    public function set_page($page)
    {
     $this->page = $page;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_row_per_page()
    {
     return $this->row_per_page;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  row_per_page
     */
    public function set_row_per_page($row_per_page)
    {
     $this->row_per_page = $row_per_page;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  number
     * @param  value
     */
    public function create_list($number, $value)
    {
     for ( $n=0; $n <= $number; $n++ )
     { $this->data_array[$n] = $value; }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  list
     * @param  start
     */
    public function add_list($list, $start)
    {
     $count = $list->get_item_count();
     for ( $n=$start; $n < $count; $n++ )
     { $this->add_item( $list->data_array[$n] ); }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  list
     * @param  start
     */
    public function add_list_exclusive($list, $start)
    {
     $count = $list->get_item_count();
     for ( $n=$start; $n < $count; $n++ )
     { $this->add_exclusive( $list->data_array[$n] ); }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function add_item($item)
    {
     $this->data_array[] = $item;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  n
     */
    public function get_item($n)
    {
     return $this->data_array[ $n ];
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  n
     * @param  item
     */
    public function set_item($n, $item)
    {
     $this->data_array[ $n ] = $item;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_item_count()
    {
     return count( $this->data_array );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function delete_list()
    {
     for ( $n=0; $n < $this->get_item_count(); $n++ )
     {
     $item = $this->get_item( $n );
     $item->delete();
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function delete_array()
    {
     unset( $this->data_array );
     $this->data_array = array();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array
     */
    public function set_array($array)
    {
     $this->data_array = $array;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_array()
    {
     return $this->data_array;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function dublicate()
    {
     $list = new basic_list();
     for ( $n=0; $n < $this->get_item_count(); $n++ )
     { $list->add_item( $this->get_item( $n )); }
     return $list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function add_item_sort_up($item)
    {
     $this->data_array[] = $item;
     for ( $n=($this->get_item_count()-1 ); $n > 0; $n-- )
     {
     $element_n = $this->get_item($n);
     $element_i = $this->get_item($n-1);
     
     if( $element_n->get_id() == $element_i->get_id() )
     // the elements are identical, one has to be deleted
     {
     unset($this->data_array[$n]);
     $this->data_array = array_values( $this->data_array );
     }
     elseif( $element_n->get_sort_value() < $element_i->get_sort_value() )
     // the elements are in wrong sequence. We have to shift
     {
     $this->set_item( $n, $element_i );
     $this->set_item( $n-1, $element_n );
     }
     else
     // alles gut, das item liegt da wo es liegen soll.
     { ; }
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function add_item_sort_down($item)
    {
     $this->data_array[] = $item;
     for ( $n=($this->get_item_count()-1 ); $n > 0; $n-- )
     {
     $element_n = $this->get_item($n);
     $element_i = $this->get_item($n-1);
     
     if( $element_n->get_id() == $element_i->get_id() )
     // the elements are identical, one has to be deleted
     {
     unset($this->data_array[$n]);
     $this->data_array = array_values( $this->data_array );
     }
     elseif( $element_n->get_sort_value() > $element_i->get_sort_value() )
     // the elements are in wrong sequence. We have to shift
     {
     $this->set_item( $n, $element_i );
     $this->set_item( $n-1, $element_n );
     }
     else
     // alles gut, das item liegt da wo es liegen soll.
     { ; }
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function add_exclusive($item)
    {
     if ( !$this->is_element_of($item->get_id()) )
     { $this->add_item($item);}
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  list
     */
    public function merge_sort_up($list)
    {
     $list1 = $list;
     $list2 = $this->dublicate();
     $this->delete_array();
     $icount = $list1->get_item_count();
     $ncount = $list2->get_item_count();
     $i = 0;
     $n = 0;
     
     while (($n < $ncount) AND ($i < $icount))
     {
     $item1 = $list1->get_item( $i );
     $item2 = $list2->get_item( $n );
     if ( $item1->get_sort_value() > $item2->get_sort_value() )
     {
     $this->add_exclusive( $item2 );
     $n++;
     }
     else
     {
     $this->add_exclusive( $item1 );
     $i++;
     }
     }
     // fill up the remaining array
     $this->add_list_exclusive( $list2, $n );
     $this->add_list_exclusive( $list1, $i );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  list
     */
    public function merge_sort_down($list)
    {
     $list1 = $list;
     $list2 = $this->dublicate();
     $this->delete_array();
     $icount = $list1->get_item_count();
     $ncount = $list2->get_item_count();
     $i = 0;
     $n = 0;
     
     while (($n < $ncount) AND ($i < $icount))
     {
     $item1 = $list1->get_item( $i );
     $item2 = $list2->get_item( $n );
     if ( $item1->get_sort_value() < $item2->get_sort_value() )
     {
     $this->add_exclusive( $item2 );
     $n++;
     }
     else
     {
     $this->add_exclusive( $item1 );
     $i++;
     }
     }
     // fill up the remaining array
     $this->add_list_exclusive( $list2, $n );
     $this->add_list_exclusive( $list1, $i );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  id
     */
    public function is_element_of($id)
    {
     $is_element = FALSE;
     $item_count = $this->get_item_count();
     
     for(
     $i = 0;
     (( $i < $item_count ) AND ( $is_element == FALSE ));
     $i++ )
     {
     if ( $this->get_item( $i )->get_id() == $id )
     { $is_element = TRUE;}
     }
     return $is_element;
    }
}?>