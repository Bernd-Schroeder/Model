<?php

require_once('../../code_generation/class.basic_db_file.php');
require_once('../../code_generation/class.basic_list_file.php');

$files =
[
"address.php",
"control_time_table_item.php" ,
"document.php",
"event.php",
"event_article.php",
"event_article_comment.php",
"event_member.php",
"image.php",
"member.php",
"member_article.php",
"member_article_comment.php",
"member_follower.php",
"member_message.php",
"news.php",
"forbidden_word.php",
"private_information.php",
"task.php",
"team.php",
"team_article.php",
"team_article_comment.php",
"team_event.php",
"team_member.php",
"team_team.php",
"time_table_item.php",
"video.php",
//"message_media.php",
"room.php",
"media_connection.php",
"media.php",
"media_file.php"
];

foreach ($files as  $name )
{
    $code_generation = new basic_db_file();
    $code_generation->set_filename( $name );
    $code_generation->generate_basic_db_file(); 
    $code_generation->generate_db_file();
    
    $code_generation = new basic_list_file();
    $code_generation->set_filename( $name );
    $code_generation->generate_basic_list_file();
    $code_generation->generate_list_file();
}
?>