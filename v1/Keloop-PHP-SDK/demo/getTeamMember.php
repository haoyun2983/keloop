<?php

/*
 *   Copyright (c) 2012—2016 成都零点信息技术有限公司 All 
 */

/**
 * 获取快跑者商户关联的合作配送团体及配送团体下的配送群和配送员信息
 *
 * @author xuhaha
 */

// 引用keloopSDK文件
require '../KeloopSdk.php';

// TODO:: 从数据库中获取 access_key 和 access_sec，下面直接定义两个变量
$accessKey = '600FKO6O';
$accessSec = '1PXUKW65';
// 创建 SDK 实例
$sdk = new KeloopCnSdk($accessKey, $accessSec);
// 调用 getTeamMember 方法
$result = $sdk->getTeamMember();
// 业务逻辑处理
if (is_null($result)) {
    exit('获取配送团队成员信息接口异常');
} else if (is_array($result)) {
    if ($result['code'] == 200) {
        $data = $result['data'];
        // 打印获取到的配送团队成员信息
        var_dump($data);
        // TODO:: 进行业务处理
        exit('Success');
    } else {
        exit($result['message']);
    }
} else {
    exit('接口调用异常');
}
