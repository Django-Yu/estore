<?php
require_once 'admin-header.php';
$btypes = $adminDB->executeSQL("select id, typename from tb_bigtype order by addtime", $connID);
for ($i = 0; $i < count($btypes); $i ++) {
    $arrayBtypeOption[$btypes[$i]['id']] = $btypes[$i]['typename'];
}
$smarty->assign('arrayBtypeOption', $arrayBtypeOption);
if (isset($_POST['filename']) && $_POST['filename'] != '') {
    if (! $adminDB->executeSQL("select id, filename from tb_read where bookinfoid='" . $_POST['bookid'] . "'", $connID)) {
        if (! $adminDB->executeSQL("insert into tb_read(bookinfoid, filename,  addtime) values('" . $_POST['bookid'] . "', '" . $_POST['filename'] . "', '" . date('Y-m-d H:i:s') . "')", $connID)) {
            echo "<scriipt>alert('试读添加失败！');</script>";
        } else {
            echo "<script>alert('试读添加成功！');</script>";
        }
    } else {
        echo "<script>alert('已经为该图书添加试读！');</script>";
    }
}
$smarty->display('admin-read.phtml');
require_once 'admin-footer.php';



