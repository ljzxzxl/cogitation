<?php
/**
 *    导航栏初始化
 *
 *    @return	array
 */
function Nav_Menu()
{
	$nav_menu = array(
		'dashboard' => array(
			'text'      => '控制台',
			'subtext'   => '常用操作',
			'default'   => 'welcome',
			'children'  => array(
				'welcome'   => array(
					'text'  => '欢迎页面',
					'url'   => 'index.php?c=welcome',
				),
				'aboutus'   => array(
					'text'  => '关于我们',
					'url'   => 'index.php?c=aboutus',
				),
			),
		),
		// 订单管理
		'order_manage' => array(
			'text'      => '订单管理',
			'default'   => 'order_allot',
			'children'  => array(
				'order_allot'=> array(
					'text'  => '订单分配',
					'url'   => 'index.php?c=order_allot',
				),
			),
		),
		// 呼叫管理
		'call_manage' => array(
			'text'      => '呼叫管理',
			'default'   => 'order_allot',
			'children'  => array(
				'order_allot'=> array(
					'text'  => '订单分配',
					'url'   => 'index.php?c=order_allot',
				),
			),
		),
		// 内容管理
		'content_manage' => array(
			'text'      => '内容管理',
			'default'   => 'message_manage',
			'children'  => array(
				'message_manage'=> array(
					'text'  => '留言管理',
					'url'   => 'index.php?c=message_manage',
				),
			),
		),
		// 公司管理
		'company_manage' => array(
			'text'      => '公司管理',
			'default'   => 'company_list',
			'children'  => array(
				'company_list'=> array(
					'text'  => '公司列表',
					'url'   => 'index.php?c=company_list',
				),
			),
		),
		// 服务管理
		'service_manage' => array(
			'text'      => '服务管理',
			'default'   => 'supervision',
			'children'  => array(
				'supervision'=> array(
					'text'  => '监理服务',
					'url'   => 'index.php?c=supervision',
				),
			),
		),
		// 广告管理
		'ad_manage' => array(
			'text'      => '广告管理',
			'default'   => 'ad_position',
			'children'  => array(
				'ad_position'=> array(
					'text'  => '广告位',
					'url'   => 'index.php?c=ad_position',
				),
			),
		),
		// 审核管理
		'check_manage' => array(
			'text'      => '审核管理',
			'default'   => 'free_shop',
			'children'  => array(
				'free_shop'=> array(
					'text'  => '免费开店',
					'url'   => 'index.php?c=free_shop',
				),
			),
		),
		// 流量管理
		'pv_manage' => array(
			'text'      => '流量管理',
			'default'   => 'ald_report',
			'children'  => array(
				'ald_report'=> array(
					'text'  => '阿拉丁',
					'url'   => 'index.php?c=ald_report',
				),
			),
		),
		// 数据管理
		'data_manage' => array(
			'text'      => '数据管理',
			'default'   => 'pv_report',
			'children'  => array(
				'pv_report'=> array(
					'text'  => '流量报表',
					'url'   => 'index.php?c=pv_report',
				),
			),
		),
		// 系统管理
		'system_manage' => array(
			'text'      => '系统管理',
			'default'   => 'areaflag_manage',
			'children'  => array(
				'areaflag_manage'=> array(
					'text'  => '区域管理',
					'url'   => 'index.php?c=areaflag_manage',
				),
			),
		),
	);
	return $nav_menu;
}
?>
