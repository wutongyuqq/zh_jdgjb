<?php
global $_GPC, $_W;
$operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
$GLOBALS['frames'] = $this->getMainMenu();



if ($operation == 'display') {
    $strwhere = '';
    $pindex = max(1, intval($_GPC['page']));
    $psize = 10;
    $list = pdo_fetchall("SELECT a.*,b.username AS username,b.status AS status,c.name as user_name FROM " . tablename('zh_jdgjb_account') . " a LEFT JOIN
" . tablename('users') . " b ON a.uid=b.uid left join".tablename('zh_jdgjb_seller')."c on a.storeid=c.id  WHERE a.weid = :weid AND a.role=1 $strwhere ORDER BY id DESC LIMIT
" . ($pindex - 1) * $psize . ',' . $psize, array(':weid' =>$_W['uniacid']));

    if (!empty($list)) {
        $total = pdo_fetchcolumn('SELECT COUNT(1) FROM ' . tablename('zh_jdgjb_account') . " WHERE weid = :weid $strwhere", array(':weid' => $_W['uniacid']));
        $pager = pagination($total, $pindex, $psize);
    }
} else if ($operation == 'delete') {
    $id = intval($_GPC['id']);
    $item = pdo_fetch("SELECT * FROM " . tablename('zh_jdgjb_account') . " WHERE id = '$id'");
    if (empty($item)) {
        message('抱歉，不存在或是已经被删除！', $this->createWebUrl('account', array('op' => 'display')), 'error');
    }
     pdo_delete('users', array('uid' => $item['uid']));
    pdo_delete('zh_jdgjb_account', array('id' => $id, 'weid' => $_W['uniacid']));
   
    message('删除成功！', $this->createWebUrl('account', array('op' => 'display')), 'success');
}
include $this->template('web/account');