<?php

/**
 * 帖子增强 更新文件
 *
 * @create 2018-2-26
 * @author deatil
 */
 
!defined('DEBUG') AND exit('Forbidden');

// 更新插件配置
$haya_post_info_config = array(
	"show_post_sort" => 0,
	"show_see_him" => 0,
	"show_see_first_floor" => 0,
	"show_list_views" => 0,
	"show_index_list_forum" => 0,
	"show_index_list_forum_username_before" => 0,
	"at_user_to_notice" => 0,
	"post_default_sort" => 'asc',
	"post_show_first_floor" => 0,
	"forum_show_pagination" => 0,
	"show_setting_forum" => 0,
	"index_show_fids" => '',
	"today_thread_hightlighter" => 0,
);
setting_set('haya_post_info', $haya_post_info_config); 

?>