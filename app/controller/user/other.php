<?php

/*
 *
 * 用户的信息修改
 *
 * 用户密码找回
 */

define('INIT_NO_USERS', true);

require(EC_PATH . '/includes/init.php');
include_once(EC_PATH.'/includes/lib_common.php');

if (empty($tmp[0])) {
    GZ_Api::outPut(101);
}

if ($tmp[0] == 'edit_profile') {
    GZ_Api::authSession();

    $sex = _POST('sex', '');
    $birth = _POST('birth', '');
    $nick_name = _POST('nick_name', '');
    $user_id = $_SESSION['user_id'];

    if (empty($birth) ) {
        $birth = 0;
    }

    $profile = array(
        'user_id' => $user_id,
        'email' => '',
        'sex' => $sex ? intval($_POST['sex']) : 0,
        'nick_name' => $nick_name ? $nick_name : '',
        'birthday' => $birth,
    );
    $users  =& init_users();

    if (edit_profile($users,$profile)) {
        include_once(EC_PATH . '/includes/lib_order.php');

        $user_info = GZ_user_info($_SESSION['user_id']);

        GZ_Api::outPut(array('data'=>$user_info));
    } else {
        if ($user->error == ERR_EMAIL_EXISTS) {
            $msg = sprintf($_LANG['email_exist'], $profile['email']);
        } else {
            $msg = $_LANG['edit_profile_failed'];
        }
        GZ_Api::outPut(0);
    }
} else if ($tmp[0] == 'send_pwd_email') {
    include_once(EC_PATH . '/includes/lib_passport.php');
    include_once(EC_PATH . '/includes/lib_common.php');
    /* 初始化会员用户名和邮件地址 */
    $user_name = _POST('user_name', '');
    $email = _POST('email', '');

    $user  =& init_users();

    //用户名和邮件地址是否匹配
    $user_info = $user->get_user_info($user_name);

    if ($user_info && $user_info['email'] == $email) {
        $code = md5($user_info['user_id'] . $_CFG['hash_code'] . $user_info['reg_time']);
        //发送邮件的函数

        if (sendEmail($user_info['user_id'], $user_name, $email, $code)) {
            GZ_Api::outPut(array('data'=>array()));
        } else {
            //发送邮件出错
            GZ_Api::outPut(10011);
        }
    } else {
        //用户名与邮件地址不匹配
        GZ_Api::outPut(10010);
    }
}else if($tmp[0]=='send_msg_code'){//发送短信验证码
    $phone = _POST('phone','');

    if(empty($phone)||!is_numeric($phone)){
        GZ_Api::outPut(101);
    }

    $msg = '【知了购物】亲爱的用户，你的验证码是%s，在5分钟内有效。验证短信请勿转发至其他人。知了购物，更多惊喜等着你！';
    $code = rand(100000,999999);
    $data = sprintf($msg,$code) ;

    require(GZ_PATH . '/library/Memcache.php');

    $seKey = 'code:'.$phone;
    AppMemcache::factory()->set($seKey,json_encode(array('code'=>$code,'time'=>time())),300);

   
    $result = sendMessage($data,$phone);
    if($result==0){
        GZ_Api::outPut(array('data'=>array()));
    }else{
        GZ_Api::outPut(0,'','短信发送失败');
    }
}

function sendMessage($msg,$phone){

    include_once('../library/CurlHelper.php');

    $post_data = array();
    $post_data['account'] = iconv('GB2312', 'GB2312',"dianzan_zhiliao");
    $post_data['pswd'] = iconv('GB2312', 'GB2312',"Dianzan1688");
    $post_data['mobile'] =$phone;
    $post_data['msg']=mb_convert_encoding("{$msg}",'UTF-8', 'auto');
    $url='http://222.73.117.158/msg/HttpBatchSendSM?';

    foreach ($post_data as &$v)
    {
        $v = urlencode($v);
    }

    $result = CurlHelper::postUrlOut($url,$post_data);

    $resultArr = explode(',',$result);
    if(!empty($resultArr) && count($resultArr)==2){
        return $resultArr[1];
    }
    return $result;
}

/**
 * @param $uid
 * @param $user_name
 * @param $email
 * @param $code
 * @return bool
 *
 * 由于地址关系，单独拿出来
 *
 */
function sendEmail($uid, $user_name, $email, $code)
{

    include_once("/includes/lib_common.php");

    $template = get_mail_template('send_password');
    $reset_email = $GLOBALS['ecs']->url() . '../user.php?act=get_password&uid=' . $uid . '&code=' . $code;

    $GLOBALS['smarty']->assign('user_name', $user_name);
    $GLOBALS['smarty']->assign('reset_email', $reset_email);
    $GLOBALS['smarty']->assign('shop_name', $GLOBALS['_CFG']['shop_name']);
    $GLOBALS['smarty']->assign('send_date', date('Y-m-d'));
    $GLOBALS['smarty']->assign('sent_date', date('Y-m-d'));
    $content = $GLOBALS['smarty']->fetch('str:' . $template['template_content']);

    /* 发送确认重置密码的确认邮件 */
    if (send_mail($user_name, $email, $template['template_subject'], $content, $template['is_html'])) {
        return true;
    } else {
        return false;
    }
}

/**
 * 修改个人资料（Email, 性别，生日)
 *
 * @access  public
 * @param   array       $profile       array_keys(user_id int, email string, sex int, birthday string);
 *
 * @return  boolen      $bool
 */
function edit_profile($user,$profile)
{
    if (empty($profile['user_id']))
    {
        $GLOBALS['err']->add($GLOBALS['_LANG']['not_login']);

        return false;
    }

    $cfg = array();
    $cfg['username'] = $GLOBALS['db']->getOne("SELECT user_name FROM " . $GLOBALS['ecs']->table('users') . " WHERE user_id='" . $profile['user_id'] . "'");
    if (isset($profile['sex']))
    {
        $cfg['gender'] = intval($profile['sex']);
    }
    if (!empty($profile['email']))
    {
        if (!is_email($profile['email']))
        {
            $GLOBALS['err']->add(sprintf($GLOBALS['_LANG']['email_invalid'], $profile['email']));

            return false;
        }
        $cfg['email'] = $profile['email'];
    }
    if (!empty($profile['birthday']))
    {
        $cfg['bday'] = $profile['birthday'];
    }

    if (!empty($profile['nick_name']))
    {
        $cfg['nick_name'] = $profile['nick_name'];
    }

    if (!$user->edit_user($cfg))
    {
        if ($user->error == ERR_EMAIL_EXISTS)
        {
            $GLOBALS['err']->add(sprintf($GLOBALS['_LANG']['email_exist'], $profile['email']));
        }
        else
        {
            $GLOBALS['err']->add('DB ERROR!');
        }

        return false;
    }


    return true;
}

?>