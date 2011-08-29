<?php

function admin_pagesResort($db) {
	$statement=$db->query('getPageListOrdered','admin_pages');
	$list=$statement->fetchAll();
	$statement=$db->prepare('updatePageSortOrderById','admin_pages');
	$count=1;
	foreach ($list as $item) {
		if ($item['sortOrder']!=$count) {
			$statement->execute(array(
				':sortOrder' => $count,
				':id' => $item['id']
			));
		}
		if ($item['parent']<1) {
			$count+=4;
		} else {
			$count+=2; /* by sorting every other we can cheat our depth sorting */
		}
	}
}

function admin_buildContent($data,$db) {
	if (empty($data->action[2])) {
		$data->action[2]='list';
	}
	$target='admin/pages.include.'.$data->action[2].'.php';
	if (file_exists($target)) {
		common_include($target);
		$data->output['function']=$data->action[2];
	}
	if (function_exists('admin_pagesBuild')) admin_pagesBuild($data,$db);
	$data->output['pageTitle']='Static Pages';
}

function admin_content($data) {
	if ($data->output['abort']) {
		echo $data->output['abortMessage'];
	} else {
		if (!empty($data->output['function'])) {
			admin_pagesShow($data);
		} else admin_unknown();
	}
}
?>