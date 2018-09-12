<?php
exit;

if (isset($haya_post_info_config['at_user_to_notice']) 
	&& $haya_post_info_config['at_user_to_notice'] == 1
) { 

	if (function_exists("notice_send")) {
		$haya_post_info_pagesize = $conf['postlist_pagesize'];
		$haya_post_info_page = ceil(($thread['posts'] + 1) / $haya_post_info_pagesize);
		$haya_post_info_page = max(1, $haya_post_info_page);
		
		$notice_thread_subject = $thread['subject'];
		$notice_thread_substr_subject = notice_substr($thread['subject'], 20);
		$notice_thread_url = url('thread-'.$thread['tid']);
		$notice_thread = '<a target="_blank" href="'.$notice_thread_url.'">《'.$notice_thread_subject.'》</a>';
		
		$notice_post_message = $post['message'];
		$notice_post_substr_message = notice_substr($post['message'], 40, FALSE);
		$notice_post_url = url('thread-'.$thread['tid'].'-'.$haya_post_info_page).'#'.$post['pid'];
		
		$notice_user_url = url('user-'.$user['uid']);
		$notice_user_avatar_url = $user['avatar_url'];
		$notice_user_username = $user['username'];
		$notice_user = '<a href="'.$notice_user_url.'" target="_blank"><img class="avatar-1" src="'.$notice_user_avatar_url.'"> '.$notice_user_username.'</a>';
		
		$notice_msg_tpl = '<div class="comment-info">在主题 <a target="_blank" href="{thread_url}" title="{thread_subject}">《{thread_substr_subject}》</a> 的回复中提到了你：</div> '
			.'<div class="single-comment pt-1"><a target="_blank" href="{post_url}">{post_substr_message}</a></div>';
		$notice_msg = str_replace(
			array(
				'{thread_subject}', '{thread_substr_subject}', '{thread_url}', '{thread}', 
				'{post_message}', '{post_substr_message}', '{post_url}', 
				'{user_url}', '{user_avatar_url}', '{user_username}', '{user}'
			),
			array(
				$notice_thread_subject, $notice_thread_substr_subject, $notice_thread_url, $notice_thread, 
				$notice_post_message, $notice_post_substr_message, $notice_post_url,  
				$notice_user_url, $notice_user_avatar_url, $notice_user_username, $notice_user
			),
			$notice_msg_tpl
		);
	}

	preg_match_all('/@([^\s|\/|:|@]+)/', $post['message_fmt'], $haya_post_info_usernames_fmt);
	preg_match_all('/@([^\s|\/|:|@]+)/', $post['message'], $haya_post_info_usernames);
	$haya_post_info_usernames_count = count($haya_post_info_usernames[1]);
	if ($haya_post_info_usernames_count > 0) {
		for ($i = 0; $i < $haya_post_info_usernames_count; $i++) {
			$haya_post_info_username = trim($haya_post_info_usernames[1][$i]);
			$haya_post_info_user = haya_post_info_user_read_by_username($haya_post_info_username);
			if (!$haya_post_info_user || empty($haya_post_info_user['uid'])) {
				continue;
			}
			
			$post['message_fmt'] = str_replace($haya_post_info_usernames_fmt[0][$i], '<a href="' . url('user-' . $haya_post_info_user['uid']) . '" target="_blank" class="haya-post-info-at"><em>@' . $haya_post_info_user['username'] . '</em></a>', $post['message_fmt']);
			$post['message'] = str_replace($haya_post_info_usernames[0][$i], '<a href="' . url('user-' . $haya_post_info_user['uid']) . '" target="_blank" class="haya-post-info-at"><em>@' . $haya_post_info_user['username'] . '</em></a>', $post['message']);
			
			if (function_exists("notice_send")) {				
				notice_send($user['uid'], $haya_post_info_user['uid'], $notice_msg, 156);
			}
		}
	}
	
	post__update($pid, array(
		"message_fmt" => $post['message_fmt'],
		"message" => $post['message'],
	));
}

?>
