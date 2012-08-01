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
			'text'      => 'dashboard',
			'subtext'   => 'offen_used',
			'default'   => 'welcome',
			'children'  => array(
				'welcome'   => array(
					'text'  => 'welcome_page',
					'url'   => 'index.php?act=welcome',
				),
				'aboutus'   => array(
					'text'  => 'aboutus_page',
					'url'   => 'index.php?act=aboutus',
				),
				'base_setting'  => array(
					'parent'=> 'setting',
					'text'  => 'base_setting',
					'url'   => 'index.php?app=setting&act=base_setting',
				),
				'user_manage' => array(
					'text'  => 'user_manage',
					'parent'=> 'user',
					'url'   => 'index.php?app=user',
				),
				'store_manage'  => array(
					'text'  => 'store_manage',
					'parent'=> 'store',
					'url'   => 'index.php?app=store',
				),
				'goods_manage'  => array(
					'text'  => 'goods_manage',
					'parent'=> 'goods',
					'url'   => 'index.php?app=goods',
				),
				'order_manage' => array(
					'text'  => 'order_manage',
					'parent'=> 'trade',
					'url'   => 'index.php?app=order'
				),
			),
		),
		// 设置
		'setting'   => array(
			'text'      => 'setting',
			'default'   => 'base_setting',
			'children'  => array(
				'base_setting'  => array(
					'text'  => 'base_setting',
					'url'   => 'index.php?app=setting&act=base_setting',
				),
				'region' => array(
					'text'  => 'region',
					'url'   => 'index.php?app=region',
				),
				'payment' => array(
					'text'  => 'payment',
					'url'   => 'index.php?app=payment',
				),
				'theme' => array(
					'text'  => 'theme',
					'url'   => 'index.php?app=theme',
				),
				'template' => array(
					'text'  => 'template',
					'url'   => 'index.php?app=template',
				),
				'mailtemplate' => array(
					'text'  => 'noticetemplate',
					'url'   => 'index.php?app=mailtemplate',
				),
			),
		),
		// 商品
		'goods' => array(
			'text'      => 'goods',
			'default'   => 'goods_manage',
			'children'  => array(
				'gcategory' => array(
					'text'  => 'gcategory',
					'url'   => 'index.php?app=gcategory',
				),
				'brand' => array(
					'text'  => 'brand',
					'url'   => 'index.php?app=brand',
				),
				'goods_manage' => array(
					'text'  => 'goods_manage',
					'url'   => 'index.php?app=goods',
				),
				'recommend_type' => array(
					'text'  => 'recommend_type',
					'url'   => 'index.php?app=recommend'
				),

			),
		),
		// 店铺
		'store'     => array(
			'text'      => 'store',
			'default'   => 'store_manage',
			'children'  => array(
				'sgrade' => array(
					'text'  => 'sgrade',
					'url'   => 'index.php?app=sgrade',
				),
				'scategory' => array(
					'text'  => 'scategory',
					'url'   => 'index.php?app=scategory',
				),
				'store_manage'  => array(
					'text'  => 'store_manage',
					'url'   => 'index.php?app=store',
				),
			),
		),
		// 会员
		'user' => array(
			'text'      => 'user',
			'default'   => 'user_manage',
			'children'  => array(
				'user_manage' => array(
					'text'  => 'user_manage',
					'url'   => 'index.php?app=user',
				),
				'admin_manage' => array(
					'text' => 'admin_manage',
					 'url'   => 'index.php?app=admin',
				 ),
				 'user_notice' => array(
					'text' => 'user_notice',
					'url'  => 'index.php?app=notice',
				 ),
			),
		),
		// 交易
		'trade' => array(
			'text'      => 'trade',
			'default'   => 'order_manage',
			'children'  => array(
				'order_manage' => array(
					'text'  => 'order_manage',
					'url'   => 'index.php?app=order'
				),
			),
		),
		// 网站
		'website' => array(
			'text'      => 'website',
			'default'   => 'acategory',
			'children'  => array(
				'acategory' => array(
					'text'  => 'acategory',
					'url'   => 'index.php?app=acategory',
				),
				'article' => array(
					'text'  => 'article',
					'url'   => 'index.php?app=article',
				),
				'partner' => array(
					'text'  => 'partner',
					'url'   => 'index.php?app=partner',
				),
				'navigation' => array(
					'text'  => 'navigation',
					'url'   => 'index.php?app=navigation',
				),
				'db' => array(
					'text'  => 'db',
					'url'   => 'index.php?app=db&amp;act=backup',
				),
				'groupbuy' => array(
					'text' => 'groupbuy',
					'url'  => 'index.php?app=groupbuy',
				),
				'consulting' => array(
					'text'  =>  'consulting',
					'url'   => 'index.php?app=consulting',
				),
				'share_link' => array(
					'text'  =>  'share_link',
					'url'   => 'index.php?app=share',
				),
			),
		),
		// 扩展
		'extend' => array(
			'text'      => 'extend',
			'default'   => 'plugin',
			'children'  => array(
				'plugin' => array(
					'text'  => 'plugin',
					'url'   => 'index.php?app=plugin',
				),
				'module' => array(
					'text'  => 'module',
					'url'   => 'index.php?app=module&act=manage',
				),
				'widget' => array(
					'text'  => 'widget',
					'url'   => 'index.php?app=widget',
				),
			),
		),
	);
	return $nav_menu;
}
?>
