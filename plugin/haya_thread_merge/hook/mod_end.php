<?php
exit;

elseif($action == 'merge') {
	
	if ($method == 'GET') {
		
		include _include(APP_PATH . 'plugin/haya_thread_merge/view/htm/mod_merge.htm');
	
	} else {
		$haya_thread_merge_merge_tid = param(2);
		if (empty($haya_thread_merge_merge_tid)) {
			message(-1, lang('haya_thread_merge_thread_tip'));
		}
		
		$haya_thread_merge_thread = thread__read($haya_thread_merge_merge_tid);
		if (empty($haya_thread_merge_thread)) {
			message(-1, lang('haya_thread_merge_thread_empty_tip'));
		}
		
		$haya_thread_merge_thread_allowmerge = forum_access_mod($haya_thread_merge_thread['fid'], $gid, 'allowmove');
		if (!$haya_thread_merge_thread_allowmerge) {
			message(-1, lang('haya_thread_merge_thread_no_allowmerge_tip'));
		}
		
		$haya_thread_merge_tids = param('tids');
		$haya_thread_merge_arr = explode('_', $haya_thread_merge_tids);
		$haya_thread_merge_tidarr = param_force($haya_thread_merge_arr, array(0));
		
		$haya_thread_merge_other_tids_arr = array();
		$haya_thread_merge_other_tids = param('other_tids');
		if (!empty($haya_thread_merge_other_tids)) {
			$haya_thread_merge_other_tid_arr = explode(',', $haya_thread_merge_other_tids);
			$haya_thread_merge_other_tids_arr = param_force($haya_thread_merge_other_tid_arr, array(0));
		}
		
		$haya_thread_merge_merge_tids = array_merge($haya_thread_merge_tidarr, $haya_thread_merge_other_tids_arr);
		$haya_thread_merge_merge_tids_arr = param_force($haya_thread_merge_merge_tids, array(0));
		
		// hook plugin_thread_merge_mod_merge_start.php
		
		if (count($haya_thread_merge_merge_tids_arr) < 2) {
			message(-1, lang('haya_thread_merge_two_thread_tip'));
		}
		
		$haya_thread_merge_threadlist = thread_find_by_tids($haya_thread_merge_merge_tids_arr);
		
		$haya_thread_merge_merge_tids_arr = array();
		foreach ($haya_thread_merge_threadlist as $haya_thread_merge_thread_one) {
			$haya_thread_merge_fid = $haya_thread_merge_thread_one['fid'];
			$haya_thread_merge_tid = $haya_thread_merge_thread_one['tid'];
			
			if (forum_access_mod($haya_thread_merge_fid, $gid, 'allowmove')) {
				if ($haya_thread_merge_merge_tid == $haya_thread_merge_tid) {
					continue;
				}
		
				$haya_thread_merge_merge_tids_arr[] = $haya_thread_merge_tid;
				thread__delete($haya_thread_merge_tid);
			}
		}
		
		$haya_thread_merge_merge_tids_arr = array_values($haya_thread_merge_merge_tids_arr);
		
		$haya_thread_merge_posts_count = post_count(array('tid' => $haya_thread_merge_merge_tids_arr));
		$haya_thread_merge_posts = post__find(array('tid' => $haya_thread_merge_merge_tids_arr), array('pid' => 1), 1, $haya_thread_merge_posts_count, 'pid');
		if (!empty($haya_thread_merge_posts)) {
			foreach ($haya_thread_merge_posts as $haya_thread_merge_post) {
				post__update($haya_thread_merge_post['pid'], array('tid' => $haya_thread_merge_merge_tid, 'isfirst' => 0));
			}
		}		
		
		// 更新合并后的主题统计信息
		$haya_thread_merge_count = post_count(array('tid' => $haya_thread_merge_merge_tid, 'isfirst' => 0));
		if (isset($haya_thread_merge_post)
			&& $haya_thread_merge_thread['last_date'] < $haya_thread_merge_post['create_date']
		) {
			thread__update($haya_thread_merge_merge_tid, array(
				'posts' => $haya_thread_merge_count,
				'lastuid' => $haya_thread_merge_post['uid'],
				'lastpid' => $haya_thread_merge_post['pid'],
				'last_date' => $haya_thread_merge_post['create_date'],
			));
		} else {
			thread__update($haya_thread_merge_merge_tid, array(
				'posts' => $haya_thread_merge_count,
			));
		}
		
		// 清理下缓存
		forum_list_cache_delete();		
		
		// hook plugin_thread_merge_mod_merge_end.php
		
		message(0, lang('haya_thread_merge_success_tip'));
	
	}
}

?>