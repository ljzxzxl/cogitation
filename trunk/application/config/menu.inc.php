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
					'url'   => 'index.php?c=dashboard&m=welcome',
				),
				'aboutus'   => array(
					'text'  => '关于我们',
					'url'   => 'index.php?c=dashboard&m=aboutus',
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
					'url'   => 'index.php?c=order_manage&m=order_allot',
				),
				'order_log'=> array(
					'text'  => '订单日志',
					'url'   => 'index.php?c=order_manage&m=order_log',
				),
				'order_status'=> array(
					'text'  => '订单进度',
					'url'   => 'index.php?c=order_manage&m=order_status',
				),
				'order_edit'=> array(
					'text'  => '订单信息编辑',
					'url'   => 'index.php?c=order_manage&m=order_edit',
				),
				'shop_data'=> array(
					'text'  => '商家数据',
					'url'   => 'index.php?c=order_manage&m=shop_data',
				),
				'user_data'=> array(
					'text'  => '用户基本信息',
					'url'   => 'index.php?c=order_manage&m=user_data',
				),
				'charge_manage'=> array(
					'text'  => '收费管理',
					'url'   => 'index.php?c=order_manage&m=charge_manage',
				),
				'order_analysis'=> array(
					'text'  => '订单数据统筹',
					'url'   => 'index.php?c=order_manage&m=order_analysis',
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
					'url'   => 'index.php?c=call_manage&m=order_allot',
				),
				'order_manage'=> array(
					'text'  => '订单管理',
					'url'   => 'index.php?c=call_manage&m=order_manage',
				),
				'order_track'=> array(
					'text'  => '订单跟踪',
					'url'   => 'index.php?c=call_manage&m=order_track',
				),
				'order_deal'=> array(
					'text'  => '订单处理',
					'url'   => 'index.php?c=call_manage&m=order_deal',
				),
				'call_manage'=> array(
					'text'  => '呼叫管理',
					'url'   => 'index.php?c=call_manage&m=call_manage',
				),
				'data_analysis'=> array(
					'text'  => '数据统计',
					'url'   => 'index.php?c=call_manage&m=data_analysis',
				),
				'purview_manage'=> array(
					'text'  => '权限管理',
					'url'   => 'index.php?c=call_manage&m=purview_manage',
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
					'url'   => 'index.php?c=content_manage&m=message_manage',
				),
				'comment_manage'=> array(
					'text'  => '评论管理',
					'url'   => 'index.php?c=content_manage&m=comment_manage',
				),
				'qa_manage'=> array(
					'text'  => '问答管理',
					'url'   => 'index.php?c=content_manage&m=qa_manage',
				),
				'im_manage'=> array(
					'text'  => '通讯管理',
					'url'   => 'index.php?c=content_manage&m=im_manage',
				),
				'imgs_manage'=> array(
					'text'  => '图库管理',
					'url'   => 'index.php?c=content_manage&m=imgs_manage',
				),
				'cate_manage'=> array(
					'text'  => '类别管理',
					'url'   => 'index.php?c=content_manage&m=cate_manage',
				),
			),
		),
		// 商家管理
		'shop_manage' => array(
			'text'      => '商家管理',
			'default'   => 'shop_list',
			'children'  => array(
				'shop_list'=> array(
					'text'  => '商家列表',
					'url'   => 'index.php?c=shop_manage&m=shop_list',
				),
				'shop_attribute'=> array(
					'text'  => '商家属性',
					'url'   => 'index.php?c=shop_manage&m=shop_attribute',
				),
				'shop_resource'=> array(
					'text'  => '商家资源',
					'url'   => 'index.php?c=shop_manage&m=shop_resource',
				),
				'shop_account'=> array(
					'text'  => '商家账户',
					'url'   => 'index.php?c=shop_manage&m=shop_account',
				),
				'shop_designer'=> array(
					'text'  => '商家设计师',
					'url'   => 'index.php?c=shop_manage&m=shop_designer',
				),
				'shop_notice'=> array(
					'text'  => '公告通知',
					'url'   => 'index.php?c=shop_manage&m=shop_notice',
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
					'url'   => 'index.php?c=service_manage&m=supervision',
				),
				'activity_manage'=> array(
					'text'  => '活动管理',
					'url'   => 'index.php?c=service_manage&m=activity_manage',
				),
				'tags'=> array(
					'text'  => '商业标签',
					'url'   => 'index.php?c=service_manage&m=tags',
				),
				'sms_manage'=> array(
					'text'  => '短信管理',
					'url'   => 'index.php?c=service_manage&m=sms_manage',
				),
				'sns_manage'=> array(
					'text'  => 'SNS管理',
					'url'   => 'index.php?c=service_manage&m=sns_manage',
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
					'url'   => 'index.php?c=ad_manage&m=ad_position',
				),
				'sort_manage'=> array(
					'text'  => '排序管理',
					'url'   => 'index.php?c=ad_manage&m=sort_manage',
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
					'url'   => 'index.php?c=check_manage&m=free_shop',
				),
				'money_manage'=> array(
					'text'  => '虚拟币管理',
					'url'   => 'index.php?c=check_manage&m=money_manage',
				),
				'substation_manage'=> array(
					'text'  => '分站管理',
					'url'   => 'index.php?c=check_manage&m=substation_manage',
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
					'url'   => 'index.php?c=pv_manage&m=ald_report',
				),
				'ditch_manage'=> array(
					'text'  => '渠道管理',
					'url'   => 'index.php?c=pv_manage&m=ditch_manage',
				),
				'pv_repeat'=> array(
					'text'  => '重合流量',
					'url'   => 'index.php?c=pv_manage&m=pv_repeat',
				),
				'keyword'=> array(
					'text'  => 'KEYWORD',
					'url'   => 'index.php?c=pv_manage&m=keyword',
				),
				'page_view'=> array(
					'text'  => '页面流量',
					'url'   => 'index.php?c=pv_manage&m=page_view',
				),
				'ab_test'=> array(
					'text'  => 'A/B TEST',
					'url'   => 'index.php?c=pv_manage&m=ab_test',
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
					'url'   => 'index.php?c=data_manage&m=pv_report',
				),
				'apply_report'=> array(
					'text'  => '报名报表',
					'url'   => 'index.php?c=data_manage&m=apply_report',
				),
				'financial_report'=> array(
					'text'  => '财务报表',
					'url'   => 'index.php?c=data_manage&m=financial_report',
				),
				'analysis_report'=> array(
					'text'  => '分析报表',
					'url'   => 'index.php?c=data_manage&m=analysis_report',
				),
				'total_report'=> array(
					'text'  => '综合报表',
					'url'   => 'index.php?c=data_manage&m=total_report',
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
					'url'   => 'index.php?c=system_manage&m=areaflag_manage',
				),
				'purview_manage'=> array(
					'text'  => '权限管理',
					'url'   => 'index.php?c=system_manage&m=purview_manage',
				),
				'role_manage'=> array(
					'text'  => '角色管理',
					'url'   => 'index.php?c=system_manage&m=role_manage',
				),
				'content_structure'=> array(
					'text'  => '目录结构',
					'url'   => 'index.php?c=system_manage&m=content_structure',
				),
				'system_info'=> array(
					'text'  => '系统版本',
					'url'   => 'index.php?c=system_manage&m=system_info',
				),
			),
		),
	);
	return $nav_menu;
}
?>
