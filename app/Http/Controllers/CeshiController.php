<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Reglist, DB, phpQuery;

use App\Http\Libraries\BearyChatRobot; //机器人通知

class CeshiController extends Controller
{
		/**
     * 首页
     *
     * @return void
     */
    public function index(Request $request)
		{
				$html = get_url_content('http://www.5118.com/toutiao/weixinyingxiao');
				echo $html;
		}
}
