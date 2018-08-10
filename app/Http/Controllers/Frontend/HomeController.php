<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Sms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Common\Rules\FormatCheck;

class HomeController extends Controller
{

    /**
     * 进入主页
     * @return
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * 登陆 支持免注册登陆
     * POST
     * @param Request $request
     */
    public function login(Request $request)
    {
        $postdata = $request->post();// 参数获取

        // 参数校验
        if (isset($postdata['accountnumber']))
        {
            // 手机号登陆
            if (FormatCheck::isCellPhone($postdata['accountnumber']) && isset($postdata['smscode']))
            {
                // 判断手机号--验证码
                $st = Sms::getMobileSmsCode($postdata['accountnumber'],$postdata['smscode']);
                var_dump($st);
            }

            // 邮箱登陆

            // 微信扫码登陆

            // qq登陆

            // 其他登陆
        }
        return [
            'code' => '1',
            'message' => '参数缺失'
        ];



        // 查看手机号是否已经注册 未注册 根据
        $info = Customer::searchByPhone($postdata['phone']);
        var_dump($postdata);
        die;
    }
}
