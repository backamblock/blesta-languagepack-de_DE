<?php
/**
 * actually GOOD de_de Language definitions. Translated by backamblock on Github
 * 
 * @package blesta
 * @version 5.5.2
 * @copyright Copyright (c) 2023, backamblock on Github
 * @license https://github.com/backamblock/ backamblock on Github - FREE for everybody
 * @link https://github.com/backamblock/ backamblock on Github
 */

$lang['Solusvm.!actions.boot'] = "Boot";
$lang['Solusvm.!actions.shutdown'] = "Shutdown";
$lang['Solusvm.!error.server_name.empty'] = "Please enter a server label.";
$lang['Solusvm.!error.user_id.empty'] = "Please enter a user ID.";
$lang['Solusvm.!error.meta[type].valid'] = "Please select a valid virtualisation type.";
$lang['Solusvm.!error.meta[plan].empty'] = "Please select a plan.";
$lang['Solusvm.!error.meta[set_template].format'] = "Please set whether to select a template or to allow clients to set a template.";
$lang['Solusvm.!error.api.internal'] = "An internal error occurred, or the server did not respond to the request.";
$lang['Solusvm.!error.solusvm_template.valid'] = "Please select a valid template.";
$lang['Solusvm.!error.create_client.failed'] = "An internal error occurred and the client account could not be created.";
$lang['Solusvm.!error.api.confirm.valid'] = "You must acknowledge that you understand the reinstall action in order to perform the template re-installation.";
$lang['Solusvm.!error.solusvm_root_password.length'] = "The root password must be at least 6 characters in length.";
$lang['Solusvm.!error.solusvm_root_password.matches'] = "The root passwords do not match.";
$lang['Solusvm.name'] = "SolusVM";
$lang['Solusvm.module_row'] = "SolusVM Master Server";
$lang['Solusvm.module_row_plural'] = "Servers";
$lang['Solusvm.module_group'] = "SolusVM Master Group";
$lang['Solusvm.add_module_row'] = "Add Server";
$lang['Solusvm.add_module_group'] = "Add Server Group";
$lang['Solusvm.manage.module_rows_title'] = "SolusVM Master Servers";
$lang['Solusvm.manage.module_groups_title'] = "SolusVM Master Server Groups";
$lang['Solusvm.manage.module_rows_heading.server_label'] = "Server Label";
$lang['Solusvm.manage.module_rows_heading.host'] = "Hostname";
$lang['Solusvm.manage.module_rows_heading.options'] = "Options";
$lang['Solusvm.manage.module_groups_heading.name'] = "Group Name";
$lang['Solusvm.manage.module_groups_heading.servers'] = "Server Count";
$lang['Solusvm.manage.module_groups_heading.options'] = "Options";
$lang['Solusvm.manage.module_groups.edit'] = "Edit";
$lang['Solusvm.manage.module_rows.delete'] = "Delete";
$lang['Solusvm.manage.module_groups.confirm_delete'] = "Are you sure you want to delete this server group?";
$lang['Solusvm.manage.module_rows_no_results'] = "There are no servers.";
$lang['Solusvm.row_meta.server_name'] = "Server Label";
$lang['Solusvm.row_meta.user_id'] = "User ID";
$lang['Solusvm.row_meta.default_port'] = "5656";
$lang['Solusvm.types.openvz'] = "OpenVZ";
$lang['Solusvm.types.xen'] = "Xen";
$lang['Solusvm.types.xen_hvm'] = "Xen HVM";
$lang['Solusvm.types.kvm'] = "KVM";
$lang['Solusvm.add_row.basic_title'] = "Basic Settings";
$lang['Solusvm.add_row.add_btn'] = "Add Server";
$lang['Solusvm.edit_row.basic_title'] = "Basic Settings";
$lang['Solusvm.package_fields.admin_set_template'] = "Select a template";
$lang['Solusvm.package_fields.client_set_template'] = "Allow client set template";
$lang['Solusvm.package_fields.available_nodes'] = "Available Nodes";
$lang['Solusvm.service_field.solusvm_hostname'] = "Hostname";
$lang['Solusvm.service_field.solusvm_template'] = "Template";
$lang['Solusvm.service_info.solusvm_main_ip_address'] = "Primary IP Address";
$lang['Solusvm.tab_actions'] = "Server Actions";
$lang['Solusvm.tab_stats'] = "Stats";
$lang['Solusvm.tab_actions.heading_actions'] = "Actions";
$lang['Solusvm.tab_actions.status_offline'] = "Offline";
$lang['Solusvm.tab_actions.status_disabled'] = "Disabled";
$lang['Solusvm.tab_actions.server_status'] = "Server Status";
$lang['Solusvm.tab_actions.heading_reinstall'] = "Re-Install";
$lang['Solusvm.tab_actions.field_template'] = "Template";
$lang['Solusvm.tab_actions.field_confirm'] = "I understand that by reinstalling, all data on the server will be permanently deleted, and the selected template will be installed.";
$lang['Solusvm.tab_actions.field_reinstall_submit'] = "Reinstall";
$lang['Solusvm.tab_actions.heading_hostname'] = "Change Hostname";
$lang['Solusvm.tab_actions.text_hostname_reboot'] = "A change to the host name will only take effect after the server has been rebooted.";
$lang['Solusvm.tab_actions.field_hostname'] = "Hostname";
$lang['Solusvm.tab_actions.field_hostname_submit'] = "Change Hostname";
$lang['Solusvm.tab_actions.field_password'] = "New Root Password";
$lang['Solusvm.tab_actions.field_confirm_password'] = "Confirm Password";
$lang['Solusvm.tab_client_actions.heading_actions'] = "Actions";
$lang['Solusvm.tab_client_actions.status_online'] = "Online";
$lang['Solusvm.tab_client_actions.status_offline'] = "Offline";
$lang['Solusvm.tab_client_actions.status_disabled'] = "Disabled";
$lang['Solusvm.tab_client_actions.field_template'] = "Template";
$lang['Solusvm.tab_client_actions.field_confirm'] = "I understand that by reinstalling, all data on the server will be permanently deleted, and the selected template will be installed.";
$lang['Solusvm.tab_client_actions.heading_hostname'] = "Change Hostname";
$lang['Solusvm.tab_client_actions.text_hostname_reboot'] = "A change to the hostname will only take effect after the server has been rebooted.";
$lang['Solusvm.tab_client_actions.field_password_submit'] = "Change Password";
$lang['Solusvm.tab_stats.heading_stats'] = "Statistics";
$lang['Solusvm.tab_stats.memory_stats'] = "%1\$s/%2\$s"; // %1$s is the memory used, %2$s is the total memory available
$lang['Solusvm.tab_stats.space'] = "Disk Space:";
$lang['Solusvm.tab_stats.space_stats'] = "%1\$s/%2\$s"; // %1$s is the hard disk space used, %2$s is the total hard disk space available
$lang['Solusvm.tab_stats.space_percent_available'] = "(%1\$s%%)"; // %1$s is the percentage of hard disk space used. You MUST use two % signs to represent a single percent (i.e. %%)
$lang['Solusvm.tab_client_stats.heading_stats'] = "Statistics";
$lang['Solusvm.tab_client_stats.heading_graphs'] = "Graphs";
$lang['Solusvm.tab_console.console_username'] = "Console Username:";
$lang['Solusvm.tab_console.vnc_ip'] = "VNC Host:";
$lang['Solusvm.tab_console.vnc_port'] = "VNC Port:";
$lang['Solusvm.tab_console.vnc_password'] = "VNC Password:";
$lang['Solusvm.tab_client_console.heading_console'] = "Console";
$lang['Solusvm.package_fields.set_node'] = "Assign a set of nodes";
$lang['Solusvm.package_fields.node_group'] = "Node Group";
$lang['Solusvm.!error.meta[nodes].empty'] = "Please select at least one node or node group.";
$lang['Solusvm.!error.solusvm_vserver_id.format'] = "The Virtual Server ID must be an integer.";
$lang['Solusvm.service_field.solusvm_vserver_id'] = "Virtual Server ID";
$lang['Solusvm.service_field.tooltip.solusvm_vserver_id'] = "The Virtual Server ID specifies the VPS from SolusVM to which this service will be attached. Changing this value will only affect this service locally.";
$lang['Solusvm.tab_status.no_results'] = "Statistics are not currently available.";
$lang['Solusvm.tab_client_stats.memory'] = "Memory";
$lang['Solusvm.tab_client_stats.space'] = "Disk Space";
$lang['Solusvm.tab_client_console.console_username'] = "Console Username";
$lang['Solusvm.tab_client_console.console_password'] = "Console Password";
$lang['Solusvm.!error.configoptions[customextraip].valid'] = "The number of extra IPs may not be decreased without specifying which IPs to remove.";
$lang['Solusvm.tab_ips.heading_ips'] = "IP Addresses";
$lang['Solusvm.tab_ips.primary_ip'] = "Primary IP Address: %1\$s"; // %1$s is the IP address
$lang['Solusvm.tab_ips.heading_extra_ips'] = "Extra IP Addresses";
$lang['Solusvm.tab_ips.heading_ip'] = "IP Address";
$lang['Solusvm.tab_ips.heading_options'] = "Options";
$lang['Solusvm.tab_ips.confirm_remove'] = "Are you sure you want to permanently remove this IP address?";
$lang['Solusvm.tab_client_ips.heading_extra'] = "Extra IP Addresses";
$lang['Solusvm.tab_client_ips.heading_remove_ip'] = "Remove IP %1\$s"; // %1$s is the IP address
$lang['Solusvm.tab_client_ips.confirm_remove_ip'] = "Are you sure you want to permanently remove this IP Address?";
$lang['Solusvm.tab_client_ips.cancel'] = "Cancel";
$lang['Solusvm.tab_actions.node'] = "Node: %1\$s"; // %1$s is the name of the node
$lang['Solusvm.tab_client_actions.heading_node'] = "Node";
$lang['Solusvm.!error.meta[total_base_ip_addresses].format'] = "Please enter only digits for the IP address quantity, with a value of 1 or more.";
$lang['Solusvm.package_fields.total_base_ip_addresses'] = "Base IP Address Quantity";
?>