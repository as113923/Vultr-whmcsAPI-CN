<?php
/* * ********************************************************** */
/**
 * Backups
 */
 //by FYWL -AS113923
$_LANG['backups']['index']['panel_title'] = '管理备份';
$_LANG['backups']['index']['name'] = '名称';
$_LANG['backups']['index']['status'] = '状态';
$_LANG['backups']['index']['size'] = '大小';
$_LANG['backups']['index']['desc'] = '描述';
$_LANG['backups']['index']['actions'] = '操作';
$_LANG['backups']['index']['confirm'] = '你确定要恢复吗?';
$_LANG['backups']['index']['restore'] = '恢复';
$_LANG['backups']['index']['vm_not_found'] = '找不到VM!';
$_LANG['backups']['index']['not_found'] = '列表是空的';
/**/
$_LANG['backups']['restore']['success'] = '恢复开始了!';
/**/
$_LANG['backups']['other']['not_available'] = '您的包装中没有功能!';
/**
 * DNS
 */
$_LANG['dns']['index']['panel_title'] = 'DNS管理器';
$_LANG['dns']['index']['add'] = '添加新的';
$_LANG['dns']['index']['domain'] = '域';
$_LANG['dns']['index']['created'] = '创建';
$_LANG['dns']['index']['actions'] = '操作';
$_LANG['dns']['index']['manage'] = '管理';
$_LANG['dns']['index']['confirm'] = '你确定你要删除?';
$_LANG['dns']['index']['delete'] = '删除';
$_LANG['dns']['index']['not_found'] = '列表是空的';
$_LANG['dns']['index']['dns_title'] = 'Name Servers';
$_LANG['dns']['index']['dns1'] = 'ns1.vultr.com';
$_LANG['dns']['index']['dns2'] = 'ns2.vultr.com';
/**/
$_LANG['dns']['create']['panel_title'] = 'DNS管理器 - 添加域';
$_LANG['dns']['create']['select_domain'] = '从列表中选择域:';
$_LANG['dns']['create']['input_domain'] = '或输入其他域名';
$_LANG['dns']['create']['input_domain2'] = '输入域名';
$_LANG['dns']['create']['ip'] = 'Server IP';
$_LANG['dns']['create']['create'] = '添加DNS区域';
$_LANG['dns']['create']['vm_not_found'] = '请先创建VM!';
$_LANG['dns']['create']['connection_error'] = '连接错误!';
$_LANG['dns']['create']['add_domain'] = '域已成功添加';
/**/
$_LANG['dns']['delete']['delete_success'] = '域名已成功删除!';
$_LANG['dns']['delete']['delete_error'] = '删除域时出错！ 请再试一次';
/**/
$_LANG['dns']['manage']['panel_title'] = 'DNS 管理';
$_LANG['dns']['manage']['delete'] = '删除';
$_LANG['dns']['manage']['type'] = '类型';
$_LANG['dns']['manage']['name'] = '名称';
$_LANG['dns']['manage']['data'] = '数据';
$_LANG['dns']['manage']['priority'] = 'Priority';
$_LANG['dns']['manage']['update'] = 'Update Domain';
$_LANG['dns']['manage']['add_new'] = 'Add New Record';
$_LANG['dns']['manage']['ttl'] = 'TTL (seconds)';
$_LANG['dns']['manage']['example'] = 'Example:';
$_LANG['dns']['manage']['add'] = 'Add';
$_LANG['dns']['manage']['delete_success'] = 'Record %var% has been deleted!';
$_LANG['dns']['manage']['update_success'] = 'Record %var% has been updated!';
$_LANG['dns']['manage']['delete_success_multi'] = 'Records: %var% have been deleted!';
$_LANG['dns']['manage']['update_success_multi'] = 'Records: %var% have been updated!';
$_LANG['dns']['manage']['add_success'] = '记录已成功添加!';
$_LANG['dns']['manage']['error'] = '您无法管理此域名!';
$_LANG['dns']['manage']['not_found'] = '列表是空的';
$_LANG['dns']['manage']['record'] = '记录ID';

/**
 * Graphs
 */
$_LANG['graphs']['index']['panel_title_incoming'] = '入站带宽';
$_LANG['graphs']['index']['panel_title_outgoing'] = '出站带宽';
$_LANG['graphs']['index']['empty_data'] = '用法图尚未准备好。 请待会再过来.';
/**
 * Main
 */
$_LANG['main']['index']['control_panel'] = '控制面板';
$_LANG['main']['index']['boot'] = '开始';
$_LANG['main']['index']['reboot'] ='重启';
$_LANG['main']['index']['stop'] ='停止';
$_LANG['main']['index']['reinstall'] ='重新安装';
$_LANG['main']['index']['console'] ='控制台';
$_LANG['main']['index']['vps_name'] ='VM名称';
$_LANG['main']['index']['cpus'] ='CPU Count';
$_LANG['main']['index']['memory'] ='记忆';
$_LANG['main']['index']['confirm_reinstall'] ='您确定要重新安装服务器吗？您服务器上的任何数据都将永久丢失！';
$_LANG['main']['index']['hdd'] ='存储';
$_LANG['main']['index']['template'] ='OS模板';
$_LANG['main']['index']['templateISO'] ='ISO模板';
$_LANG['main']['index']['ipaddress'] ='IP地址';
$_LANG['main']['index']['root_password'] ='Root Password';
$_LANG['main']['index']['root_pass_show'] ='显示';
$_LANG['main']['index']['root_pass_hide'] ='隐藏';
$_LANG['main']['index']['stats'] ='统计';
$_LANG['main']['index']['bandwidth'] ='带宽';
$_LANG['main']['index']['usage_graphs'] ='使用图';
$_LANG['main']['index']['details'] ='详情';
$_LANG['main']['index']['app_info'] ='申请信息';
$_LANG['main']['index']['status'] ='状态';
$_LANG['main']['index']['vm_not_found'] ='找不到VM！';
$_LANG['main']['index']['vm_status_is'] ='VM状态为：';
$_LANG['main']['index']['change_os'] ='更改操作系统';
$_LANG['main']['index']['change_iso'] ='更改ISO';
$_LANG['main']['index']['detach_iso'] ='分离ISO';
$_LANG['main']['index']['power_status'] ='电源状态';
$_LANG['main']['index']['server_status'] ='服务器状态';
$_LANG['main']['index']['main_ip'] ='主要IP：';
$_LANG['main']['index']['internal_ip'] ='内部IP：';
$_LANG['main']['index']['networks'] ='网络';
$_LANG['main']['index']['netmask'] ='网络掩码';
$_LANG['main']['index']['address'] ='地址';
$_LANG['main']['index']['gateway'] ='网关';
$_LANG['main']['index']['vm_status'] ='VM状态';
$_LANG['main']['index']['pass_undefined'] ='未知。密码是通过快照恢复设置的。';
$_LANG['main']['index']['reverse_dns'] ='反向DNS';
$_LANG['main']['index']['rev_dns_success'] ='反向DNS更新。变更可能需要6-12个小时才能生效';
$_LANG['main']['index']['detach_iso_success'] ='ISO文件已成功分离';
$_LANG['main']['index']['default_ip'] ='默认IP';
$_LANG['main']['index']['network'] ='网络';
$_LANG['main']['index']['cidr'] ='CIDR';
$_LANG['main']['index']['ip'] ='IP';
$_LANG['main']['index']['reverse'] ='反向';
$_LANG['main']['index']['actions'] ='动作';
$_LANG['main']['index']['confirm'] ='您确定要删除此记录吗？';
$_LANG['main']['index']['delete'] ='删除';
$_LANG['main']['index']['edit'] ='编辑';
$_LANG['main']['index']['add'] ='添加';
$_LANG['main']['index']['ipv6rev_set_success'] ='反向DNS更新';
$_LANG['main']['index']['ipv6rev_bad_ip'] ='无效的IPv6地址！';
$_LANG['main']['index']['connection_error'] ='连接错误！';
$_LANG['main']['index']['ipv6rev_delete_success'] ='删除反向记录';
$_LANG['main']['index']['label_change'] ='改变';
$_LANG['main']['index']['save'] ='保存';
$_LANG['main']['index']['label_change_cancel'] ='取消';
$_LANG['main']['index']['label_success'] ='标签已更改！';
$_LANG['main']['index']['label_error'] ='请输入其他标签';
$_LANG['main']['index']['change_app'] ='更改APP';
$_LANG['main']['index']['change_os'] ='更改操作系统';

$_LANG['main']['create']['hostname_empty'] ='请输入主机名！';
$_LANG['main']['create']['hostname_not_valid'] ='主机名无效！';
/**/
$_LANG['main']['create']['panel_title'] ='设置您的服务器';
$_LANG['main']['create']['server_label'] ='服务器标签：';
$_LANG['main']['create']['server_label_placeholder'] ='输入您的服务器标签';
$_LANG['main']['create']['server_hostname'] ='主机名：';
$_LANG['main']['create']['server_hostname_placeholder'] ='输入您的服务器主机名';
$_LANG['main']['create']['create'] ='创建';
$_LANG['main']['create']['yes'] ='是';
$_LANG['main']['create']['no'] ='不';
$_LANG['main']['create']['notify_mail'] ='创建后通知（邮件）：';
$_LANG['main']['create']['backups'] ='自动备份：';
$_LANG['main']['create']['ssh_cert'] ='选择SSH证书：';
$_LANG['main']['create']['ssh_install'] ='添加SSH密钥：';
$_LANG['main']['create']['priv_net'] ='打开/关闭私人网络：';
$_LANG['main']['create']['ipv6'] ='打开/关闭IPv6：';
$_LANG['main']['create']['script'] ='选择启动脚本：';
$_LANG['main']['create']['script_install'] ='启动脚本：';
$_LANG['main']['create']['manage'] ='管理';
$_LANG['main']['create']['ipxe'] ='iPXE自定义脚本';
$_LANG['main']['create']['ipxe_url'] ='iPXE链接网址';
$_LANG['main']['create']['iso'] ='ISO';
$_LANG['main']['create']['app'] ='选择APP：';
$_LANG['main']['create']['snapshot'] ='选择快照：';
$_LANG['main']['create']['system'] ='选择操作系统类型：';
$_LANG['main']['create']['location'] ='选择位置：';
$_LANG['main']['create']['ipxe_not_found'] ='IPXE Url not found！';
$_LANG['main']['create']['pxe_script_error'] ='IPXE脚本必须以＃！ipxe开头';
$_LANG['main']['create']['iso_not_found'] ='ISO未选中！';
$_LANG['main']['create']['pxe_script_error'] ='IPXE脚本必须以＃！ipxe开头';
$_LANG['main']['create']['ipxe_script_not_found'] ='未选择IPXE脚本！';
$_LANG['main']['create']['boot_script_not_found'] ='未选择启动脚本！';
$_LANG['main']['create']['iso_type_not_found'] ='未定义的操作系统类型';
$_LANG['main']['create']['created_success'] ='创建VPS已经开始。请稍候';
$_LANG['main']['create']['no_script_found'] ='找不到启动脚本。请先创建它';
$_LANG['main']['create']['no_ssh_found'] ='找不到SSH密钥。请先创建它';
$_LANG['main']['create']['reload_info'] ='当VM准备就绪时，页面将自动重新加载。';
/**
 * SSHKeys
 */
$_LANG['sshkeys']['index']['panel_title'] ='管理SSH密钥';
$_LANG['sshkeys']['index']['id'] ='ID';
$_LANG['sshkeys']['index']['name'] ='姓名';
$_LANG['sshkeys']['index']['created'] ='创建';
$_LANG['sshkeys']['index']['actions'] ='动作';
$_LANG['sshkeys']['index']['add'] ='添加新';
$_LANG['sshkeys']['index']['delete'] ='删除';
$_LANG['sshkeys']['index']['confirm'] ='你确定要删除吗？';
$_LANG['sshkeys']['index']['not_found'] ='列表为空';
/**/
$_LANG['sshkeys']['delete']['delete_success'] ='SSH密钥已成功删除！';
$_LANG['sshkeys']['delete']['delete_error'] ='删除ssh密钥时出错！请再试一次';
/**/
$_LANG['sshkeys']['add']['name'] ='姓名';
$_LANG['sshkeys']['add']['ssh_key'] ='SSH密钥';
$_LANG['sshkeys']['add']['create'] ='创建';
$_LANG['sshkeys']['add']['script_name'] ='SSH密钥名称';
$_LANG['sshkeys']['add']['panel_title'] ='管理SSH密钥 - 创建新';
$_LANG['sshkeys']['add']['add_success'] ='SSH密钥已成功创建！';
$_LANG['sshkeys']['add']['add_error'] ='创建SSH密钥时出错！';
/**
 * 脚本
 */
$_LANG['scripts']['index']['panel_title'] ='Startup Scripts';
$_LANG['scripts']['index']['add'] ='新建';
$_LANG['scripts']['index']['id'] ='ID';
$_LANG['scripts']['index']['name'] ='姓名';
$_LANG['scripts']['index']['type'] ='类型';
$_LANG['scripts']['index']['created'] ='创建';
$_LANG['scripts']['index']['actions'] ='动作';
$_LANG['scripts']['index']['confirm'] ='你确定要删除吗？';
$_LANG['scripts']['index']['delete'] ='删除';
$_LANG['scripts']['index']['undefined'] ='undefined';
$_LANG['scripts']['index']['show'] ='显示';
$_LANG['scripts']['index']['hide'] ='隐藏';
$_LANG['scripts']['index']['not_found'] ='列表为空';
/**/
$_LANG['scripts']['add']['panel_title'] ='创建新的启动脚本';
$_LANG['scripts']['add']['name'] ='姓名';
$_LANG['scripts']['add']['type'] ='类型';
$_LANG['scripts']['add']['script'] ='脚本';
$_LANG['scripts']['add']['create'] ='创建';
$_LANG['scripts']['add']['boot_script_error'] ='启动脚本必须以＃！/ bin / sh开头';
$_LANG['scripts']['add']['pxe_script_error'] ='IPXE脚本必须以＃！ipxe开头';
$_LANG['scripts']['add']['undefined_script_type'] ='未定义的脚本类型';
$_LANG['scripts']['add']['success_add'] ='启动脚本已成功创建';
$_LANG['scripts']['add']['error_add'] ='创建脚本时出错！请再试一次';
/**/
$_LANG['scripts']['delete']['success_delete'] ='启动脚本已成功删除！';
$_LANG['scripts']['delete']['error_delete'] ='删除脚本时出错！请再试一次';
/**/
$_LANG['scripts']['core']['connection_error'] ='连接错误！请稍后再试。';
/**
 * 快照
 */
$_LANG['snapshots']['index']['panel_title'] ='快照（使用％use％from％available％）';
$_LANG['snapshots']['index']['create_new'] ='新建';
$_LANG['snapshots']['index']['id'] ='ID';
$_LANG['snapshots']['index']['description'] ='描述';
$_LANG['snapshots']['index']['size'] ='尺寸';
$_LANG['snapshots']['index']['status'] ='状态';
$_LANG['snapshots']['index']['created'] ='创建';
$_LANG['snapshots']['index']['actions'] ='动作';
$_LANG['snapshots']['index']['confirm'] ='您确定要删除吗？';
$_LANG['snapshots']['index']['confirmrestore'] ='你确定要恢复吗？';
$_LANG['snapshots']['index']['delete'] ='删除';
$_LANG['snapshots']['index']['restore'] ='还原';
$_LANG['snapshots']['index']['not_found'] ='列表为空';
$_LANG['snapshots']['index']['pending'] ='（正在进行快照）';
/**/
$_LANG['snapshots']['other']['not_available'] ='您的套餐中没有功能！';
/**/
$_LANG['snapshots']['add']['panel_title'] ='创建新快照';
$_LANG['snapshots']['add']['description'] ='描述';
$_LANG['snapshots']['add']['create'] ='创建快照';
$_LANG['snapshots']['add']['snapshot_limit'] ='你已达到快照限制！';
$_LANG['snapshots']['add']['created'] ='快照已成功创建';
$_LANG['snapshots']['add']['delete_error'] ='创建快照时出错！请再试一次';
/**/
$_LANG['snapshots']['delete']['success'] ='快照已成功删除！';
$_LANG['snapshots']['delete']['error'] ='删除快照时出错！请再试一次';
/**/
$_LANG['snapshots']['restore']['success'] ='恢复快照已经开始。这可能需要一段时间。';
$_LANG['snapshots']['restore']['error'] ='恢复快照时出错！请再试一次';
/**
 * 操作系统变更
 */
$_LANG['oschange']['index']['panel_title'] ='更改操作系统';
$_LANG['oschange']['index']['panel_title_app'] ='更改申请';
$_LANG['oschange']['index']['label'] ='选择新操作系统';
$_LANG['oschange']['index']['label_app'] ='选择新应用';
$_LANG['oschange']['index']['change'] ='改变';
$_LANG['oschange']['index']['confirm_os'] ='您确定要更改此服务器吗？';
$_LANG['oschange']['index']['confirm_app'] ='您确定要将此服务器更改为其他应用程序吗？所有数据都将在此过程中丢失！';
$_LANG['oschange']['index']['current'] ='当前操作系统';
$_LANG['oschange']['index']['success'] ='操作系统成功更改！';
$_LANG['oschange']['index']['success_app'] ='申请成功更改！';
$_LANG['oschange']['index']['no_available_oses'] ='没有可用的操作系统可以更改！';
$_LANG['oschange']['index']['no_available_app'] ='没有可用的应用程序可以更改！';
$_LANG['oschange']['index']['vm_not_found'] ='找不到VM！';
$_LANG['oschange']['index']['back'] ='返回';
/**
 * ISO变更
 */
$_LANG['isochange']['index']['panel_title'] ='更改ISO';
$_LANG['isochange']['index']['label'] ='选择新的ISO文件';
$_LANG['isochange']['index']['current'] ='当前ISO是';
$_LANG['isochange']['index']['success'] ='ISO已成功更改！';
$_LANG['isochange']['index']['no_available_isos'] ='没有ISO文件可供更改！';
/**
 * 其他
 */
$_LANG['elements']['buttons']['main_page'] ='主页';
$_LANG['elements']['buttons']['snapshots'] ='快照';
$_LANG['elements']['buttons']['scripts'] ='启动脚本';
$_LANG['elements']['buttons']['ssh_keys'] ='SSH密钥';
$_LANG['elements']['buttons']['dns'] ='DNS';
$_LANG['elements']['buttons']['backups'] ='备份';
/**
 *
 */
$_LANG['core']['client']['create_vm_first'] ='请先创建VM！';
$_LANG['core']['client']['action_not_found'] ='未找到行动（404）';
$_LANG['core']['client']['controller_not_found'] ='未找到模块（404）';
$_LANG['core']['client']['api_connection_error'] ='无法连接到Vultr！';
/**
 * AJAX
 */
$_LANG['core']['ajax']['start_success'] ='服务器正在运行！';
$_LANG['core']['ajax']['reboot_success'] ='重新启动！';
$_LANG['core']['ajax']['stop_success'] ='服务器已停止！';
$_LANG['core']['ajax']['reinstall_success'] ='重新安装操作系统已启动！';
$_LANG['core']['ajax']['checkStatus'] ='服务器状态为：';
$_LANG['core']['ajax']['start_success'] ='服务器正在运行！';
$_LANG['core']['ajax']['service_not_active'] ='服务未激活！';
/**
 * Hooks
 */
$_LANG['core']['hook']['upgrade_empty'] ='没有可用于升级产品的选项！';
$_LANG['core']['hook']['connection_error'] ='请检查您的API密钥！连接错误！';
$_LANG['core']['hook']['save_key'] ='请先保存您的API密钥！';
$_LANG['core']['hook']['configurable_options_success'] ='Vultr可配置选项已成功创建！请配置定价。';
$_LANG['core']['hook']['custom_field_success'] ='自定义字段已成功创建！';
$_LANG['core']['hook']['custom_field_exist'] ='自定义字段已经存在！';
/**
 *其他
 */
$_LANG['core']['action']['action_not_supported'] ='动作不受支持！';
$_LANG['core']['action']['not_found_subid'] ='未找到VPS ID';
$_LANG['core']['action']['no_upgrades_available'] ='目前没有可用于此套餐的升级。';
$_LANG['core']['action']['cant_upgrade'] ='你不能升级到这个包。';
$_LANG['core']['action']['template_not_found'] ='未找到模板文件';
$_LANG['vps_ajax']['unknown'] ='';