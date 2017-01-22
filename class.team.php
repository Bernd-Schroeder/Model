<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 29.08.2016, 11:41:00 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include team_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.team_navigation.php');

/* user defined includes */
// section 10-30-49-58-5019fa60:14a4d7b4062:-8000:0000000000001493-includes begin
// section 10-30-49-58-5019fa60:14a4d7b4062:-8000:0000000000001493-includes end

/* user defined constants */
// section 10-30-49-58-5019fa60:14a4d7b4062:-8000:0000000000001493-constants begin
// section 10-30-49-58-5019fa60:14a4d7b4062:-8000:0000000000001493-constants end

/**
 * Short description of class team
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team
    extends team_navigation
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
     return "C";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_owner_group()
    {
     return "t";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_basic_post_frame()
    {
     return "C_post_frame";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_link()
    {
     return
     "<a href=\"" . $_SESSION['C_control_base'] .
     "C0_pre_frame.php?id=" .
     $this->get_id() . "\">" .
     $this->get_name() .
     "</a>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_abs_link()
    {
     return
     "<a href=\"" .
     "http://www." . $_SESSION['domain'] . ".com" .
     $_SESSION['C_control_base'] .
     "C0_pre_frame.php?id=" .
     $this->get_id() . "\">" .
     $this->get_name() .
     "</a>";
    }
    /**
     * Short description of method remove_member
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function remove_member($member_id)
    {
     require_once('class.team_member.php');
     
     $con = new team_member();
     $id = $con->find_member_statusless( $this->get_id(), $member_id );
     if ( $id > 0 )
     {
     $con->set_id( $id );
     $con->delete();
     $this->remove_upteam_access( $member_id );
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_upteam()
    {
     $team_list = $this->get_upteam_list();
     if( $team_list->get_item_count() > 0 )
     { $up_team = $team_list->get_item( (int)0 ); }
     else
     { $up_team = null; }
     return $up_team;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_upteam_name()
    {
     $upteam = $this->get_upteam();
     if( $upteam == null )
     { $upteam_name = "root"; }
     else
     { $upteam_name = $upteam->get_name(); }
     return $upteam_name;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member_id
     */
    public function is_member_element_of($member_id)
    {
     $member_list = $this->get_member_list();
     return
     $member_list->is_member_element_of( $member_id );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function get_member_relation($member)
    {
     require_once('class.team_member.php');
     
     $team_member = new team_member();
     $relation = $team_member->
     get_relation( $this->get_id(), $member->get_id() );
     return $relation;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  article_id
     */
    public function get_article($article_id)
    {
     require_once('class.team_article.php');
     
     $article = new team_article();
     $article->set_id( $article_id );
     $article->load();
     return $article;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function remove_team()
    {
     require_once('class.control_time_table_item_list.php');
     require_once('class.time_table_item_list.php');
     require_once('class.team_team.php');
     
     // Darf keine Untergruppen haben.
     $subteam_list = $this->get_subteam_list();
     if ( $subteam_list->get_item_count() == (int)0 )
     {
     // Alle events löschen
     $eventlist = $this->get_event_list();
     for( $n = 0; $n < $eventlist->get_item_count(); $n++ )
     { $eventlist->get_item( $n )->remove_event(); }
     
     // Alle Mitglieder entfernen
     $memberlist = $this->get_all_member_list();
     for( $n = 0; $n < $memberlist->get_item_count(); $n++ )
     { $this->remove_member( $memberlist->get_item( $n )->get_id() ); }
     
     // Alle Artikel löschen
     $articlelist = $this->get_article_list();
     for( $n = 0; $n < $articlelist->get_item_count(); $n++ )
     { $articlelist->get_item( $n )->remove_article(); }
     
     // Alle Dokumente löschen
     $document_list = $this->get_document_list();
     for( $n = 0; $n < $document_list->get_item_count(); $n++ )
     {
     $document = $document_list->get_item( $n );
     $document->remove_file();
     $document->delete();
     }
     
     // Alle Hausaufgaben löschen
     $task_list = $this->get_task_list();
     for( $n = 0; $n < $task_list->get_item_count(); $n++ )
     { $task = $task_list->get_item( $n )->delete(); }
     
     // Alle Stunden löschen
     $control_list = new control_time_table_item_list();
     $control_list->set_owner_id( $this->get_id() );
     $control_list->load();
     for( $n = 0; $n < $control_list->get_item_count(); $n++ )
     {
     $control_item = $control_list->get_item( $n );
     $time_list = new time_table_item_list();
     $time_list->set_owner_id( $control_item->get_id() );
     $time_list->load();
     $time_list->delete_list();
     }
     $control_list->delete_list();
     
     // Alle Bilder löschen
     $image_list = $this->get_image_list();
     for( $n = 0; $n < $image_list->get_item_count(); $n++ )
     {
     $image = $image_list->get_item( $n );
     $image->remove_all_files();
     $image->delete();
     }
     
     // Alle Videos löschen
     $video_list = $this->get_video_list();
     for( $n = 0; $n < $video_list->get_item_count(); $n++ )
     {
     $video = $video_list->get_item( $n );
     $video->remove_file();
     $video->delete();
     }
     
     // Verbindung zum upteam
     $up_team_id = $this->get_upteam()->get_id();
     $team_team = new team_team();
     $id = $team_team->find_team( $up_team_id, $this->get_id(), (int)5);
     if ( $id > 0 )
     {
     $team_team->set_id( $id );
     $team_team->delete();
     }
     
     // selben Team löschen
     if( $this->get_address_id() > (int)0 )
     { $this->get_address()->delete(); }
     
     if( $this->get_private_information_id() > (int)0 )
     { $this->get_private_information()->delete(); }
     
     $this->delete();
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member_id
     */
    public function add_upteam_access($member_id)
    {
     require_once('class.team_member.php');
     
     $team_member = new team_member();
     $relation = $team_member->
     get_relation( $this->get_id(), $member_id );
     if ( $relation == (int)9 )
     { $this->add_sublevel_access( $member_id ); }
     
     $up_team = $this->get_upteam();
     if ( $up_team != null )
     { $up_team->add_upteam_access( $member_id );}
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member_id
     */
    public function add_sublevel_access($member_id)
    {
     require_once('class.team_member.php');
     
     $con = new team_member();
     $con->set_team_id( $this->get_id() );
     $con->set_member_id( $member_id );
     $con->set_status( (int)8 );
     $con->insert();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member_id
     */
    public function remove_upteam_access($member_id)
    {
     require_once('class.member.php');
     
     $member = new member( $member_id);
     $member->set_id( $member_id );
     $member->load();
     
     $relation = $this->get_member_relation($member);
     $subteam_count = $this->
     get_my_subteam_list($member)->get_item_count();
     
     if (( $relation == (int)8 ) AND ( $subteam_count == (int)0 ))
     { $this->remove_sublevel_access( $member->get_id() ); }
     
     $up_team = $this->get_upteam();
     if ( $up_team != null )
     { $up_team->remove_upteam_access( $member->get_id() );}
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member_id
     */
    public function remove_sublevel_access($member_id)
    {
     require_once('class.team_member.php');
     
     $con = new team_member();
     $id = $con->find_member( $this->get_id(), $member_id, (int)8  );
     if ( $id > 0 )
     {
     $con->set_id( $id );
     $con->delete();
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_toplevel_type()
    {
     $top_level = FALSE;
     if( $this->get_type() == (int)1 )
     { $top_level = TRUE; }
     return $top_level;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_organisatorisc_type()
    {
     $organisatorisc_type = FALSE;
     if( $this->get_type() == (int)2 )
     { $organisatorisc_type = TRUE; }
     return $organisatorisc_type;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_educational_type()
    {
     $educational_type = FALSE;
     if( $this->get_type() == (int)3 )
     { $educational_type = TRUE; }
     return $educational_type;
    }
}?>