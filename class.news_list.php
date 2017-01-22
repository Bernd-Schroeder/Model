<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.news_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.06.2015, 10:33:17 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_news_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_news_list.php');

/* user defined includes */
// section 10-5-25--126--6b254b19:14c748051c2:-8000:000000000000167A-includes begin
// section 10-5-25--126--6b254b19:14c748051c2:-8000:000000000000167A-includes end

/* user defined constants */
// section 10-5-25--126--6b254b19:14c748051c2:-8000:000000000000167A-constants begin
// section 10-5-25--126--6b254b19:14c748051c2:-8000:000000000000167A-constants end

/**
 * Short description of class news_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class news_list
    extends generated_news_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute receiver_model
     *
     * @access public
     * @var Integer
     */
    public $receiver_model = null;

    /**
     * Short description of attribute entity_group
     *
     * @access public
     * @var Integer
     */
    public $entity_group = null;

    /**
     * Short description of attribute entity_id
     *
     * @access public
     * @var Integer
     */
    public $entity_id = null;

    /**
     * Short description of attribute function
     *
     * @access public
     * @var Integer
     */
    public $function = null;

    /**
     * Short description of attribute article_id
     *
     * @access public
     * @var Integer
     */
    public $article_id = null;

    /**
     * Short description of attribute uploader_id
     *
     * @access public
     * @var Integer
     */
    public $uploader_id = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $id = $this->get_owner_id();
     $this->stmt->bind_param('i', $id );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_member_news()
    {
     $where_statement = 
     "WHERE receiver_id=? ORDER BY upload_stamp DESC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_member_news_count()
    {
     $prepare_statement =
     "SELECT
     id FROM news
     WHERE receiver_id=?";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  receiver_model
     */
    public function set_receiver_model($receiver_model)
    {
     $this->receiver_model = $receiver_model;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  entity_group
     */
    public function set_entity_group($entity_group)
    {
     $this->entity_group = $entity_group;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  entity_id
     */
    public function set_entity_id($entity_id)
    {
     $this->entity_id = $entity_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  function
     */
    public function set_function($function)
    {
     $this->function = $function;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  article_id
     */
    public function set_article_id($article_id)
    {
     $this->article_id = $article_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  uploader_id
     */
    public function set_uploader_id($uploader_id)
    {
     $this->uploader_id = $uploader_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function insert()
    {
     include_once 'class.news.php';
     
     $receiver_list_count = $this->receiver_model->get_item_count();
     for ( $n = 0; $n < $receiver_list_count; $n++ )
     {
     $receiver = $this->receiver_model->get_item( $n );
     $news = new news();
     $news->set_receiver_id( $receiver->get_id() );
     $news->set_entity_group( $this->entity_group );
     $news->set_entity_id( $this->entity_id );
     $news->set_function( $this->function );
     $news->set_article_id( $this->article_id );
     $news->set_uploader_id( $this->uploader_id );
     $news->insert();
     }
    }
}?>