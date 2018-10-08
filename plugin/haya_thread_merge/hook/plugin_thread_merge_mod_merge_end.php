<?php exit;

if (function_exists("notice_send")) {
	
	if (!empty($haya_thread_merge_threadlist)) {
		foreach ($haya_thread_merge_threadlist as &$thread) {
			$haya_thread_merge_fid = $thread['fid'];
			$haya_thread_merge_tid = $thread['tid'];
			if ($haya_thread_merge_tid == $haya_thread_merge_merge_tid) {
				continue;
			}
			
			if (forum_access_mod($haya_thread_merge_fid, $gid, 'allowmove')) {
				$thread['subject'] = notice_substr($thread['subject'], 20);
				
				$haya_thread_merge_notice_msg = str_replace(
					array(
						'{old_thread_subject}', 
						'{new_thread_subject}', 
						'{new_thread_url}', 
					),
					array(
						$thread['subject'], 
						$haya_thread_merge_thread['subject'], 
						url("thread-$haya_thread_merge_thread[tid]"), 
					),
					lang('haya_thread_merge_send_notice')
				);
				
				$haya_thread_merge_notice_nid = notice_send($user['uid'], $thread['uid'], $haya_thread_merge_notice_msg, 3);
			}
		}
	}
	
}
	
?>