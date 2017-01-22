<?php

error_reporting(E_ALL);

/**
 * // representation af the basic data model of all members, teams and events
 * // Initial date: 01.01.1970;
 *
 * @author Bernd Schröder
 * @version 1.0
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_db
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_db.php');

/* user defined includes */
// section 10-30-8--60--7184044c:1379d7e3277:-8000:0000000000000866-includes begin
// section 10-30-8--60--7184044c:1379d7e3277:-8000:0000000000000866-includes end

/* user defined constants */
// section 10-30-8--60--7184044c:1379d7e3277:-8000:0000000000000866-constants begin
// section 10-30-8--60--7184044c:1379d7e3277:-8000:0000000000000866-constants end

/**
 * // representation af the basic data model of all members, teams and events
 * // Initial date: 01.01.1970;
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class entity_group
    extends basic_db
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute top_navigation_list
     *
     * @access private
     * @var Integer
     */
    private $top_navigation_list = null;

    /**
     * Short description of attribute left_navigation_list
     *
     * @access private
     * @var Integer
     */
    private $left_navigation_list = null;

    /**
     * Short description of attribute right_navigation_list
     *
     * @access private
     * @var Integer
     */
    private $right_navigation_list = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_top_navigation_list()
    {
     return $this->top_navigation_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  navigation_list
     */
    public function set_top_navigation_list($navigation_list)
    {
     $this->top_navigation_list = $navigation_list;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_left_navigation_list()
    {
     return $this->left_navigation_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  navigation_list
     */
    public function set_left_navigation_list($navigation_list)
    {
     $this->left_navigation_list = $navigation_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_right_navigation_list()
    {
     return $this->right_navigation_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  navigation_list
     */
    public function set_right_navigation_list($navigation_list)
    {
     $this->right_navigation_list = $navigation_list;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_address()
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.address.php');
     $new_address = new address();
     $new_address->set_id( $this->get_address_id() );
     $new_address->load();
     return $new_address;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_avatar()
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.image.php');
     $new_image = new image();
     $new_image->set_id( $this->get_image_id() );
     $new_image->load();
     return $new_image->get_avatar_thumb();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
/*NEW*/
    public function get_avatar_icon_path()
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.image.php');
     $new_image = new image();
     $new_image->set_id( $this->get_image_id() );
     $new_image->load();
     return
     "http://www.3appy.com" .
     $new_image->get_avatar_icon();
    }


    public function get_avatar_icon()
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.image.php');
     $new_image = new image();
     $new_image->set_id( $this->get_image_id() );
     $new_image->load();
     return
     "<img src=\"". $new_image->get_avatar_icon() .
     "\" alt=\"ads\" class=\"flexible\"/>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_avatar_thumb()
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.image.php');
     $new_image = new image();
     $new_image->set_id( $this->get_image_id() );
     $new_image->load();
     return
     "<img src=\"". $new_image->get_avatar_thumb() .
     "\" alt=\"ads\" class=\"flexible\"/>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_private_information()
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.private_information.php');
     $new_private_information = new private_information();
     $new_private_information->set_id( $this->get_private_information_id() );
     $new_private_information->load();
     return $new_private_information;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_image()
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.image.php');
     $new_image = new image();
     $new_image->set_id( $this->get_image_id() );
     $new_image->load();
     return $new_image;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_image_list()
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.image_list.php');
     $image_list = new image_list();
     $image_list->set_owner_id( $this->get_id() );
     $image_list->set_owner_group( $this->get_owner_group() );
     $image_list->load();
     return $image_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_image_list_count()
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.image_list.php');
     $image_list = new image_list();
     $image_list->set_owner_id( $this->get_id() );
     $image_list->set_owner_group( $this->get_owner_group() );
     return $image_list->get_count();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_document_list()
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.document_list.php');
     $document_list = new document_list();
     $document_list->set_owner_id( $this->get_id() );
     $document_list->set_owner_group( $this->get_owner_group() );
     $document_list->load();
     return $document_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_document_list_count()
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.document_list.php');
     $document_list = new document_list();
     $document_list->set_owner_id( $this->get_id() );
     $document_list->set_owner_group( $this->get_owner_group() );
     return $document_list->get_count();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  video_id
     */
    public function get_video($video_id)
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.video.php');
     $new_video = new video();
     $new_video->set_id( $video_id );
     $new_video->load();
     return $new_video;
    }
    /**
     *
     * @access public
     * @author Bernd schröder
     * @version 1.0
     */
    public function get_video_list()
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.video_list.php');
     $video_list = new video_list();
     $video_list->set_owner_id( $this->get_id() );
     $video_list->set_owner_group( $this->get_owner_group() );
     $video_list->load();
     return $video_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_video_list_count()
    {
     if( defined('__GEN_ROOT__') == FALSE )
     { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
     require_once(__GEN_ROOT__.'/class.video_list.php');
     $video_list = new video_list();
     $video_list->set_owner_id( $this->get_id() );
     $video_list->set_owner_group( $this->get_owner_group() );
     return $video_list->get_count();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  member
     * @version 1.0
     */
    public function perform_relation($member)
    {
     $relation = $this->get_relation( $member );
     switch($relation)
     {
     case ( (int)1 ):
     // 1 
     // owner of a profile 
     // founder of a team
     $this->generate_owner_navigation($member);
     break;
     case ( (int)2 ):
     // 2 
     // admin of a team 
     // admin of an event
     $this->generate_admin_navigation($member);
     break;
     case ( (int)3 ):
     // 3 
     // requested follower of a member 
     // requested member of team from admin 
     // requested member of event from admin
     $this->generate_requested_navigation($member);
     break;
     case ( (int)4 ):
     // 4 
     // waiting for follower approval from ask member 
     // waiting for team approval from the admin 
     // waiting for event approval from the admin
     $this->generate_approving_navigation($member);
     break;
     case ( (int)5 ):
     // 5 
     // approved follower 
     // approved member of a team 
     // approved  member of an event
     $this->generate_approved_navigation($member);
     break;
     case ( (int)6 ):
     // 6 
     // Member of the same group
     $this->generate_is_same_group_navigation($member);
     break;
     case ( (int)7 ):
     // 7 
     // requested admin of team from admin 
     // requested admin of event from admin
     $this->generate_requested_admin_navigation($member);
     break;
     case ( (int)8 ):
     // 8 
     // Member of a sub group ( team / event )
     $this->generate_is_sub_group_navigation($member);
     break;
     case ( (int)11 ):
     // 11
     // member access to admin
     $this->generate_member_globadmin_navigation($member);
     break;
     case ( (int)12 ):
     // 12
     // admin access
     $this->generate_globadmin_navigation($member);
     break;
     default:
     case ( (int)9 ):
     // 9 
     // Member with a profile but not member of the organisational structure
     $this->generate_without_connection_navigation($member);
     break;
     default:
     $this->generate_without_connection_navigation($member);
     break;
     }
     return $relation;
    }
}?>