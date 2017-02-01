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
"forbidden_word.php",
"image.php",
"media.php",
"media_counter.php",
"media_file.php",
"member.php",
"member_follower.php",
"member_message.php",
//"message_media.php",
"news.php",
"private_information.php",
"room.php",
"task.php",
"team.php",
"team_article.php",
"team_article_comment.php",
"team_event.php",
"team_member.php",
"team_network_id.php",
"team_team.php",
"time_table_item.php",
"video.php"
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