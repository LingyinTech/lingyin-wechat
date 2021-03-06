<?php
/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/15
 * Time: 21:26
 */

namespace common\base;


class Controller extends \yii\web\Controller
{
    public $result = ['status' => 0, 'msg' => 'success'];


    protected function format($data = null)
    {
        $result = [];
        if (is_array($data)) {
            $result = $data;
        } elseif (is_bool($data) || is_int($data)) {
            $result['status'] = empty($data) ? 1 : 0;
            $result['msg'] = empty($data) ? 'fail' : 'success';
        } elseif (is_string($data)) {
            $result['data'] = $data;
        } elseif (is_object($data)) {
            $result = (array)$data;
        }

        return json_encode(array_merge($this->result, $result));
    }

    protected function fail($msg)
    {
        return $this->format(['status' => 1, 'msg' => $msg]);
    }

    protected function success($msg)
    {
        return $this->format(['msg' => $msg]);
    }

}