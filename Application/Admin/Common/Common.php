<?php

/*
 * 格式化返回结果
 * */
function responseToJson($code = 0, $message = '', $paras = null)
{
    $res["code"] = $code;
    $res["message"] = $message;
    if (!empty($paras)) {
        $res["result"] = $paras;
    }
    echo json_encode($res);
    exit;
}



?>