<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 07.03.2015, 15:45:16 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include member_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.member_navigation.php');

/* user defined includes */
// section 10-30-49-58-5019fa60:14a4d7b4062:-8000:0000000000001491-includes begin
// section 10-30-49-58-5019fa60:14a4d7b4062:-8000:0000000000001491-includes end

/* user defined constants */
// section 10-30-49-58-5019fa60:14a4d7b4062:-8000:0000000000001491-constants begin
// section 10-30-49-58-5019fa60:14a4d7b4062:-8000:0000000000001491-constants end

/**
 * Short description of class member
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member
    extends member_navigation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_entity_name()
    {
     return "B";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_owner_group()
    {
     return "m";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
     /*NEW*/
    public function get_basic_post_frame()
    {
     return "B_post_frame";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  parameter
     */
    public function get_link($parameter)
    {
     return
     "<a href=\"" . $_SESSION['B_control_base'] .
     "B0_pre_frame.php?id=" .
     $this->get_id() . $parameter . "\">" .
     $this->get_status_button() .
     $this->get_forename() . " " . $this->get_name() .
     "</a>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function remove_member()
    {
     ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
     /*NEW*/
    public function get_gender_symbol()
    {
     $male     = $_SESSION['icons'] . "male.png";
     $female   = $_SESSION['icons'] . "female.png";
     $question = $_SESSION['icons'] . "question.png";
     
     switch( $this->get_gender() )
     {
     case ( 0 ):
     $gender_symbol = "<img src=\"" . $question . "\"/>";
     break;
     case ( 1 ):
     $gender_symbol = "<img src=\"" . $male . "\"/>";
     break;
     case ( 2 ):
     $gender_symbol = "<img src=\"" . $female . "\"/>";
     break;
     case ( 3 ):
     $gender_symbol = "<img src=\"" . $question . "\"/>";
     break;
     default:
     $gender_symbol = "<img src=\"" . $question . "\"/>";
     break;
     }
     return $gender_symbol;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_flag()
    {
     $german = $_SESSION['languages'] . "flag/german.png";
     $english = $_SESSION['languages'] . "flag/english.png";
     $danish = $_SESSION['languages'] . "flag/danish.png";
     
     switch( $this->get_language() )
     {
     case ( "en" ):
     $language_flag = "<img src=\"" . $english . "\"/>";
     break;
     case ( "ge" ):
     $language_flag = "<img src=\"" . $german . "\"/>";
     break;
     case ( "da" ):
     $language_flag = "<img src=\"" . $danish . "\"/>";
     break;
     default:
     $language_flag = "<img src=\"" . $english . "\"/>";
     break;
     }
     return $language_flag;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_active()
    {
     $active = FALSE;
     if ( $this->get_offline_min() < (int)30 )
     { $active = TRUE; }
     return $active;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_inactive()
    {
     $inactive = FALSE;
     if ( ($this->get_offline_min() >= (int)30 ) AND
     ( $this->get_offline_min() < (int)60 ) )
     { $inactive = TRUE; }
     return $inactive;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_online()
    {
     $online = FALSE;
     if(( isset( $_SESSION['watch_id'] )) AND
     ($_SESSION['online'] == 1))
     { $online = TRUE; }
     return $online;
    }



    public function get_remote_language()
    {
     $language;
     $ip = $_SERVER['REMOTE_ADDR'];
     $details = json_decode( file_get_contents("http://ipinfo.io/{$ip}"));
     
     switch( $details->country )
     {
     case ( "DK" ):
     $language = "da";
     break;
     case ( "DE" ):
     $language = "ge";
     break;
     default:
     $language = "en";
     break;
     }
     return $language;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_offline_sec()
    {
     date_default_timezone_set('Europe/Berlin');
     $date_now = strtotime( "now" );
     $date_activity = strtotime( $this->get_last_activity() );
     $interval = $date_now-$date_activity;
     return $interval;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_offline_min()
    {
     return (int)( $this->get_offline_sec() / 60 );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_offline_hour()
    {
     return (int)( $this->get_offline_min() / 60 );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_offline_day()
    {
     return (int)( $this->get_offline_hour() / 24 );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_offline_week()
    {
     return (int)( $this->get_offline_day() / 7 );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_age()
    {
     date_default_timezone_set('Europe/Berlin');
     $birth_time = new DateTime();
     $birth_time->setdate($this->get_year(),
     $this->get_month(), $this->get_day() );
     
     $date_now = new DateTime('NOW');
     $interval = $date_now->diff($birth_time);
     
     return (int)$interval->y;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
     /*NEW*/
    public function get_status_button()
    {
     $image_link = "";
     if ( $this->is_active())
     { $image_link = "<img src=\"" . 
     $_SESSION['icons'] . "online.png\" />"; }
     elseif ( $this->is_inactive())
     { $image_link = "<img src=\"" . 
     $_SESSION['icons'] . "inactive.png\" />"; }
     else
     { $image_link = "<img src=\"" . 
     $_SESSION['icons'] . "offline.png\" />"; }
     return $image_link;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_status_text()
    {
     $week = 168;
     $day = 24;
     $hour = 1;
     $offline_hours = 0;
     $status_text = "";
     
     $offline_hours = $this->get_offline_hour();
     if ( $offline_hours > $week )
     { $status_text = 'C3_offline_gt_week'; }
     else if ( $offline_hours > $day )
     { $status_text = 'C3_offline_gt_day'; }
     else if ( $offline_hours > $hour )
     { $status_text = 'C3_offline_gt_hour'; }
     else
     { $status_text = 'C3_active'; }
     return $status_text;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_first_unaccepted_event_id()
    {
     require_once('class.event_member_list.php');
     
     $event_id = (int)0;
     $event_list = new event_member_list();
     $event_list->set_owner_id( $this->get_id() );
     $event_list->load_unaccepted_events();
     
     if( $event_list->get_item_count() > 0 )
     { $event_id = $event_list->get_item(0)->get_event_id();}
     
     return $event_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_first_unaccepted_team_id()
    {
     require_once('class.team_member_list.php');
     
     $team_id = (int)0;
     $team_list = new team_member_list();
     $team_list->set_owner_id( $this->get_id() );
     $team_list->load_unaccepted_teams();
     
     if( $team_list->get_item_count() > 0 )
     { $team_id = $team_list->get_item(0)->get_team_id();}
     
     return $team_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_first_unaccepted_follower_id()
    {
     require_once('class.member_follower_list.php');
     
     $member_id = (int)0;
     $member_list = new member_follower_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_unaccepted_follower();
     
     if( $member_list->get_item_count() > 0 )
     { $member_id = $member_list->get_item(0)->get_member_id();}
     
     return $member_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function reset_last_activity()
    {
     $this->load();
     $timezone = new DateTimeZone('Europe/Berlin' );
     $last_activity = new DateTime( "now", $timezone );
     $last_activity = $last_activity->format('Y-m-d H:i:s');
     $this->set_last_activity( $last_activity );
     $this->update();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function find_id_by_address()
    {
     require "generated/data_connect.php";
     $found_member_id = 0;
     $member_mail = $this->get_mail_address();
     if ( $stmt = $mysqli->prepare("SELECT id FROM member
     WHERE mail_address = ?"))
     {
     $stmt->bind_param( "s", $member_mail );
     $stmt->execute();
     $stmt->bind_result($id);
     if ($stmt->fetch())
     {
     $found_member_id = $id;
     }
     $stmt->close();
     }
     $mysqli->close();
     return $found_member_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function find_id()
    {
     require "generated/data_connect.php";
     $found_member_id = 0;
     $member_mail = $this->get_mail_address();
     $member_password = $this->get_password();
     if ( $stmt = $mysqli->prepare("SELECT id FROM member
     WHERE mail_address = ? AND password = ?"))
     {
     $stmt->bind_param( "ss", $member_mail, $member_password );
     $stmt->execute();
     $stmt->bind_result($id);
     if ($stmt->fetch())
     {
     $found_member_id = $id;
     }
     else
     { $this->db_warning->not_found();}
     $stmt->close();
     }
     else
     { $this->db_warning->not_found(); }
     $mysqli->close();
     $this->db_warning->serialize();
     return $found_member_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  article_id
     */
    public function get_article($article_id)
    {
     require_once('class.member_article.php');
     
     $article = new member_article();
     $article->set_id( $article_id );
     $article->load();
     return $article;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function add_upteam_access()
    {
     $member_id = $this->get_id();
     $team_list = $this->get_team_list();
     for ( $i = 0; $i < $team_list->get_item_count(); $i++ )
     {        
     $team = $team_list->get_item($i);
     $team->add_upteam_access( $member_id );
     }
    }
}?>