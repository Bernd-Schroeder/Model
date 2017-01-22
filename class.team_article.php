<?php

error_reporting(E_ALL);

/**
 * require_once('class.article_comment_list.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_team_article
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_team_article.php');

/* user defined includes */
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:000000000000167E-includes begin
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:000000000000167E-includes end

/* user defined constants */
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:000000000000167E-constants begin
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:000000000000167E-constants end

/**
 * require_once('class.article_comment_list.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_article
    extends generated_team_article
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_article_comment_list()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.team_article_comment_list.php');
     
     $article_list = new team_article_comment_list();
     $article_list->set_owner_id( $this->get_id() );
     $article_list->load();
     return $article_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_article_comment_list_count()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.team_article_comment_list.php');
     
     $article_list = new team_article_comment_list();
     $article_list->set_owner_id( $this->get_id() );
     $count = $article_list->get_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_text()
    {
     return str_replace("\n","<br />", parent::get_text() );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_article_image()
    {
     return $this->get_image()->get_article_thumb();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_image()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.image.php');
     
     $new_image = new image();
     $new_image->set_id( $this->get_image_id() );
     $new_image->load();
     return $new_image;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function remove_article()
    {
     $comment_list = $this->get_article_comment_list();
     $comment_list->delete_list();
     $this->delete();
    }
}?>