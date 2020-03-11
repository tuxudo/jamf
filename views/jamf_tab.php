<h2>Jamf  <a data-i18n="jamf.recheck" class="btn btn-default btn-xs" href="<?php echo url('module/jamf/recheck_jamf/' . $serial_number);?>"></a>  <span id="jamf_view_in"></span></h2>

<div id="jamf-msg" data-i18n="listing.loading" class="col-lg-12 text-center"></div>

<div id="jamf-view" class="row hide">
    <div class="col-md-12">

        <!--Top nav tabs-->
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#jamf-inventory" data-i18n="jamf.inventory"></a></li>
          <li><a data-toggle="tab" href="#jamf-management" data-i18n="jamf.management"></a></li>
        </ul>

        <!--Top tabs content-->
        <div class="tab-content">
          <!--Inventory tab-->
          <div id="jamf-inventory" class="tab-pane in active">
            <!--Inventory side tabs-->
            <ul class="nav nav-tabs jamf-left">
              <li class="active" id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-General" id="jamf_general_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-Hardware" id="jamf_hardware_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-UserLocation" id="jamf_userlocation_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-Purchasing" id="jamf_purchasing_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-ExtensionAttributes" id="jamf_extension_attributes_button"></a></li>
            </ul>  
            <!--Inventory side tabs content-->
            <div class="tab-content jamf-tab-content">
                <!--General tab content-->
                <div id="Jamf-General" class="tab-pane in active">
                    <h4 data-i18n="jamf.general"></h4>
                    <!--General table-->
                    <table class="table table-striped">
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.name"></th>
                            <td class="jamf-table-left" id="jamf_name"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.report_date_epoch"></th>
                            <td class="jamf-table-left" id="jamf_report_date_epoch"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.last_contact_time_epoch"></th>
                            <td class="jamf-table-left" id="jamf_last_contact_time_epoch"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.initial_entry_date_epoch"></th>
                            <td class="jamf-table-left" id="jamf_initial_entry_date_epoch"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.ip_address"></th>
                            <td class="jamf-table-left" id="jamf_ip_address"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.last_reported_ip"></th>
                            <td class="jamf-table-left" id="jamf_last_reported_ip"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.jamf_version"></th>
                            <td class="jamf-table-left" id="jamf_version"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.managed"></th>
                            <td class="jamf-table-left" id="jamf_managed"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.last_cloud_backup_date_epoch"></th>
                            <td class="jamf-table-left" id="jamf_last_cloud_backup_date_epoch"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.last_enrolled_date_epoch"></th>
                            <td class="jamf-table-left" id="jamf_last_enrolled_date_epoch"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.mdm_capable"></th>
                            <td class="jamf-table-left" id="jamf_mdm_capable"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.enrolled_via_dep"></th>
                            <td class="jamf-table-left" id="jamf_enrolled_via_dep"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.user_approved_mdm"></th>
                            <td class="jamf-table-left" id="jamf_user_approved_mdm"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.user_approved_enrollment"></th>
                            <td class="jamf-table-left" id="jamf_user_approved_enrollment"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.mdm_capable_users"></th>
                            <td class="jamf-table-left" id="jamf_mdm_capable_users"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.jamf_id"></th>
                            <td class="jamf-table-left" id="jamf_id"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.asset_tag"></th>
                            <td class="jamf-table-left" id="jamf_asset_tag"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.barcode_1"></th>
                            <td class="jamf-table-left" id="jamf_barcode_1"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.barcode_2"></th>
                            <td class="jamf-table-left" id="jamf_barcode_2"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.ble_capable"></th>
                            <td class="jamf-table-left" id="jamf_ble_capable"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.itunes_store_account_is_active"></th>
                            <td class="jamf-table-left" id="jamf_itunes_store_account_is_active"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.distribution_point"></th>
                            <td class="jamf-table-left" id="jamf_distribution_point"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.sus"></th>
                            <td class="jamf-table-left" id="jamf_sus"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.netboot_server"></th>
                            <td class="jamf-table-left" id="jamf_netboot_server"></td>
                        </tr>
                    </table>
                </div>
                <!--Hardware tab content-->
                <div id="Jamf-Hardware" class="tab-pane">
                    <h4 data-i18n="hardware.hardware"></h4>
                    <!--Hardware table-->
                    <table class="table table-striped">
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.model"></th>
                            <td class="jamf-table-left" id="jamf_model"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.model_identifier"></th>
                            <td class="jamf-table-left" id="jamf_model_identifier"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.udid"></th>
                            <td class="jamf-table-left" id="jamf_udid"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="serial"></th>
                            <td class="jamf-table-left" id="jamf_serial_number"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.processor_speed"></th>
                            <td class="jamf-table-left" id="jamf_processor_speed"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.number_processors"></th>
                            <td class="jamf-table-left" id="jamf_number_processors"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.number_cores"></th>
                            <td class="jamf-table-left" id="jamf_number_cores"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.processor_type"></th>
                            <td class="jamf-table-left" id="jamf_processor_type"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.processor_architecture"></th>
                            <td class="jamf-table-left" id="jamf_processor_architecture"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.bus_speed"></th>
                            <td class="jamf-table-left" id="jamf_bus_speed"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.cache_size"></th>
                            <td class="jamf-table-left" id="jamf_cache_size"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.mac_address"></th>
                            <td class="jamf-table-left" id="jamf_mac_address"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.alt_mac_address"></th>
                            <td class="jamf-table-left" id="jamf_alt_mac_address"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.total_ram"></th>
                            <td class="jamf-table-left" id="jamf_total_ram"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.available_ram_slots"></th>
                            <td class="jamf-table-left" id="jamf_available_ram_slots"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.battery_capacity"></th>
                            <td class="jamf-table-left" id="jamf_battery_capacity"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.smc_version"></th>
                            <td class="jamf-table-left" id="jamf_smc_version"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.nic_speed"></th>
                            <td class="jamf-table-left" id="jamf_nic_speed"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.optical_drive"></th>
                            <td class="jamf-table-left" id="jamf_optical_drive"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.boot_rom"></th>
                            <td class="jamf-table-left" id="jamf_boot_rom"></td>
                        </tr>
                    </table>
                </div>
                <!--UserLocation tab content-->
                <div id="Jamf-UserLocation" class="tab-pane">
                  <h4 data-i18n="jamf.userlocation"></h4>
                  <!--UserLocation table-->
                    <table class="table table-striped">
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.username"></th>
                            <td class="jamf-table-left" id="jamf_username"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.realname"></th>
                            <td class="jamf-table-left" id="jamf_realname"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.email_address"></th>
                            <td class="jamf-table-left" id="jamf_email_address"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.phone"></th>
                            <td class="jamf-table-left" id="jamf_phone"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.position"></th>
                            <td class="jamf-table-left" id="jamf_position"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.department"></th>
                            <td class="jamf-table-left" id="jamf_department"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.building"></th>
                            <td class="jamf-table-left" id="jamf_building"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.room"></th>
                            <td class="jamf-table-left" id="jamf_room"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right hide" id="jamf_site_name_head" data-i18n="jamf.site_name"></th>
                            <td class="jamf-table-left hide" id="jamf_site_name"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right hide" id="jamf_site_id_head" data-i18n="jamf.site_id"></th>
                            <td class="jamf-table-left hide" id="jamf_site_id"></td>
                        </tr>
                    </table>
                </div>
                <!--Purchasing tab content-->
                <div id="Jamf-Purchasing" class="tab-pane">
                  <h4 data-i18n="jamf.purchasing"></h4>
                  <!--Purchasing table-->
                    <table class="table table-striped">
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.purchased_or_leased"></th>
                            <td class="jamf-table-left" id="jamf_is_purchased"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.po_number"></th>
                            <td class="jamf-table-left" id="jamf_po_number"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.po_date_epoch"></th>
                            <td class="jamf-table-left" id="jamf_po_date_epoch"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.vendor"></th>
                            <td class="jamf-table-left" id="jamf_vendor"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.warranty_expires_epoch"></th>
                            <td class="jamf-table-left" id="jamf_warranty_expires_epoch"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.applecare_id"></th>
                            <td class="jamf-table-left" id="jamf_applecare_id"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.lease_expires_epoch"></th>
                            <td class="jamf-table-left" id="jamf_lease_expires_epoch"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.purchase_price"></th>
                            <td class="jamf-table-left" id="jamf_purchase_price"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.life_expectancy"></th>
                            <td class="jamf-table-left" id="jamf_life_expectancy"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.purchasing_account"></th>
                            <td class="jamf-table-left" id="jamf_purchasing_account"></td>
                        </tr>
                        <tr>
                            <th class="jamf-table-right" data-i18n="jamf.purchasing_contact"></th>
                            <td class="jamf-table-left" id="jamf_purchasing_contact"></td>
                        </tr>
                    </table>
                </div>
                <!--ExtensionAttributes tab content-->
                <div id="Jamf-ExtensionAttributes" class="tab-pane">
                  <!--ExtensionAttributes table-->
                    <div id="Jamf-ExtensionAttributes-Table"></div>
                </div>
            </div>
          </div>      
          <!--Mangement tab-->
          <div id="jamf-management" class="tab-pane">
            <!--Mangement side tabs-->
            <ul class="nav nav-tabs jamf-left">
              <li class="active" id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-ManagementCommands" id="jamf_managementcommands_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-Policies" id="jamf_policies_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-eBooks" id="jamf_ebooks_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-MacAppStoreApps" id="jamf_mac_apps_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-ConfigurationProfiles" id="jamf_config_profiles_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-ManagedPreferences" id="jamf_man_prefs_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-RestrictedSoftware" id="jamf_restricted_software_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-ComputerGroups" id="jamf_computergroups_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-PatchMangement" id="jamf_patchmanagement_button"></a></li>
            </ul>
            <!--Mangement side tabs content-->
            <div class="tab-content jamf-tab-content">
                <!--ManagementCommands tab content-->
                <div id="Jamf-ManagementCommands" class="tab-pane in active">
                  <!--ManagementCommands table-->
                  <div id="Jamf-ManagementCommands-Table"></div>
                </div>
                <!--Policies tab content-->
                <div id="Jamf-Policies" class="tab-pane">
                  <!--Policies table-->
                  <div id="Jamf-Policies-Table"></div>
                </div>
                <!--eBooks tab content-->
                <div id="Jamf-eBooks" class="tab-pane">
                  <!--eBooks table-->
                  <div id="Jamf-eBooks-Table"></div>
                </div>
                <!--MacAppStoreApps tab content-->
                <div id="Jamf-MacAppStoreApps" class="tab-pane">
                  <!--MacAppStoreApps table-->
                  <div id="Jamf-MacApps-Table"></div>
                </div>
                <!--ConfigurationProfiles tab content-->
                <div id="Jamf-ConfigurationProfiles" class="tab-pane">
                  <!--ConfigurationProfiles table-->
                  <div id="Jamf-ConfigurationProfiles-Table"></div>
                </div>
                <!--ManagedPreferences tab content-->
                <div id="Jamf-ManagedPreferences" class="tab-pane">
                  <!--ManagedPreferences table-->
                  <div id="Jamf-ManagedPreferences-Table"></div>
                </div>
                <!--RestrictedSoftware tab content-->
                <div id="Jamf-RestrictedSoftware" class="tab-pane">
                  <!--RestrictedSoftware table-->
                  <div id="Jamf-RestrictedSoftware-Table"></div>
                </div>
                <!--ComputerGroups tab content-->
                <div id="Jamf-ComputerGroups" class="tab-pane">
                    <!--ComputerGroups table-->
                    <h4 data-i18n="jamf.computergroups"></h4>
                    <!--ComputerGroups button group-->
                    <div class="btn-group btn-group-justified">
                        <a data-toggle="tab" class="btn btn-primary active" href="#Jamf-Groups-Smart-Table" id="jamf_groups_smart_button"></a>
                        <a data-toggle="tab" class="btn btn-primary" href="#Jamf-Groups-Static-Table" id="jamf_groups_static_button"></a>
                    </div>
                    <br/>
                    <!--ComputerGroups tables-->
                    <div class="tab-content jamf-tab-content">
                        <div id="Jamf-Groups-Smart-Table" class="tab-pane in active"></div>
                        <div id="Jamf-Groups-Static-Table" class="tab-pane"></div>
                    </div>                
                </div>
                <!--PatchMangement tab content-->
                <div id="Jamf-PatchMangement" class="tab-pane">
                    <!--PatchMangement table-->
                    <h4 data-i18n="jamf.patch_management_logs_history"></h4>
                    <!--PatchMangement button group-->
                    <div class="btn-group btn-group-justified">
                        <a data-toggle="tab" class="btn btn-primary active" href="#Jamf-Software-Titles-Table" id="jamf_software_titles_button"></a>
                        <a data-toggle="tab" class="btn btn-primary" href="#Jamf-Patch-Policies-Table" id="jamf_patch_policies_button"></a>
                    </div>
                    <br/>
                    <!--PatchMangement tables-->
                    <div class="tab-content jamf-tab-content">
                        <div id="Jamf-Software-Titles-Table" class="tab-pane in active"></div>
                        <div id="Jamf-Patch-Policies-Table" class="tab-pane"></div>
                    </div>                    
                </div>
            </div>
          </div>
          <!--History tab-->
          <div id="jamf-history" class="tab-pane">
            <!--History side tabs-->
            <ul class="nav nav-tabs jamf-left">
              <li class="active" id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-ComputerUsage" id="jamf_computerusage_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-AuditLogs" id="jamf_auditlogs_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-PolicyLogs" id="jamf_policylogs_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-JamfRemote" id="jamf_jamfremote_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-ScreenSharingLogs" id="jamf_screensharinglogs_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-JamfImaging" id="jamf_jamfimaging_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-ManagementHistory" id="jamf_managementhistory_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-UserLocationHistory" id="jamf_userlocationhistory_button"></a></li>
              <li id="jamf-button"><a class="jamf-tablink" data-toggle="tab" href="#Jamf-MacAppStoreAppsHistory" id="jamf_macappshistory_button"></a></li>
            </ul>
          </div>
        </div>
    </div>
</div>

<script>    
$(document).on('appReady', function(e, lang) {

	// Get Jamf data
	$.getJSON( appUrl + '/module/jamf/get_data/' + serialNumber, function( data ) {
		if( ! data['jamf_id']){
			$('#jamf-msg').text(i18n.t('no_data'));
		}
		else{

			// Hide
			$('#jamf-msg').text('');
			$('#jamf-view').removeClass('hide');

            // Get the Jamf server address
            var jamf_server = "<?php echo rtrim(conf('jamf_server'), '/'); ?>";
            
            // Generate buttons and tabs
			$('#jamf_view_in').html('<a class="btn btn-default btn-xs" target="_blank" href="'+jamf_server+'/computers.html?id='+data['jamf_id']+'&o=r&v=inventory"> '+i18n.t("jamf.view_in_jamf")+'</a>'); // View in Jamf button
			$('#jamf_general_button').html('<i class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.general")); // General tab
			$('#jamf_hardware_button').html('<i class="fa fa-desktop"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("hardware.hardware")); // Hardware tab
			$('#jamf_operatingsystem_button').html('<i class="fa fa-apple"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.operatingsystem")); // Operating System tab
			$('#jamf_userlocation_button').html('<i class="fa fa-building"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.userlocation")); // User Location tab
			$('#jamf_security_button').html('<i class="fa fa-lock"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.security")); // Security tab
			$('#jamf_purchasing_button').html('<i class="fa fa-money"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.purchasing")); // Purchasing tab
			$('#jamf_extension_attributes_button').html('<i class="fa fa-puzzle-piece"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.extension_attributes")+'&nbsp;&nbsp;<span id="jamf-extensions-cnt" class="badge"></span>'); // Extension Attributes tab
			$('#jamf_managementcommands_button').html('<i class="fa fa-tachometer"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.managementcommands")); // Management Commands tab
			$('#jamf_policies_button').html('<i class="fa fa-window-restore"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.policies_management")+'&nbsp;&nbsp;<span id="jamf-policies-cnt" class="badge"></span>'); // Policies tab
			$('#jamf_ebooks_button').html('<i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.ebooks_management")+'&nbsp;&nbsp;<span id="jamf-ebooks-cnt" class="badge"></span>'); // eBooks tab
			$('#jamf_mac_apps_button').html('<i class="fa fa-caret-square-o-up"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.mac_app_store_applications_history")+'&nbsp;&nbsp;<span id="jamf-macapps-cnt" class="badge"></span>'); // Mac App Store tab
			$('#jamf_config_profiles_button').html('<i class="fa fa-cogs"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.configuration_profiles")+'&nbsp;&nbsp;<span id="jamf-profs-cnt2" class="badge"></span>'); // Configuration Profiles tab
			$('#jamf_man_prefs_button').html('<i class="fa fa-sliders"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.managed_preference_profiles_management")+'&nbsp;&nbsp;<span id="jamf-manprefs-cnt" class="badge"></span>'); // Managed Preferences tab
			$('#jamf_restricted_software_button').html('<i class="fa fa-shield"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.restricted_software_management")+'&nbsp;&nbsp;<span id="jamf-restsoft-cnt" class="badge"></span>'); // Restricted Software tab
			$('#jamf_computergroups_button').html('<i class="fa fa-desktop"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.computergroups")); // Computer Groups tab
			$('#jamf_patchmanagement_button').html('<i class="fa fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.patch_management_logs_history")); // Patch Management tab
            $('#jamf_computerusage_button').html('<i class="fa fa-desktop"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.computer_usage_logs_history")); // ComputerUsage tab
            $('#jamf_auditlogs_button').html('<i class="fa fa-clipboard"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.audits_history")); // AuditLogs tab
            $('#jamf_policylogs_button').html('<i class="fa fa-window-restore"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.policy_logs_history")); // PolicyLogs tab
            $('#jamf_jamfremote_button').html('<i class="fa fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.casper_remote_logs_history")); // JamfRemote tab
            $('#jamf_screensharinglogs_button').html('<i class="fa fa-window-restore"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.screen_sharing_logs_history")); // ScreenSharingLogs tab
            $('#jamf_jamfimaging_button').html('<i class="fa fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.casper_imaging_logs_history")); // JamfImaging tab
            $('#jamf_managementhistory_button').html('<i class="fa fa-tachometer"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.commands_history")); // ManagementHistory tab
            $('#jamf_userlocationhistory_button').html('<i class="fa fa-building"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.user_location_history")); // UserLocationHistory tab
            $('#jamf_macappshistory_button').html('<i class="fa fa-language"></i>&nbsp;&nbsp;&nbsp;'+i18n.t("jamf.mac_app_store_applications_history")); // MacAppStoreAppsHistory tab
            
            // Fix dates, after checking if date is set
            if ( data['last_contact_time_epoch'] !== null ){
                $('#jamf_last_contact_time_epoch').html(moment(parseInt(data['last_contact_time_epoch'])).format('llll')+' - '+moment(parseInt(data['last_contact_time_epoch'])).fromNow());
            }
            if ( data['initial_entry_date_epoch'] !== null ){
                $('#jamf_initial_entry_date_epoch').html(moment(parseInt(data['initial_entry_date_epoch'])).format('llll')+' - '+moment(parseInt(data['initial_entry_date_epoch'])).fromNow());
            }
            if ( data['po_date_epoch'] !== null ){
                $('#jamf_po_date_epoch').html(moment(parseInt(data['po_date_epoch'])).format('llll')+' - '+moment(parseInt(data['po_date_epoch'])).fromNow());
            }
            if ( data['report_date_epoch'] !== null ){
                $('#jamf_report_date_epoch').html(moment(parseInt(data['report_date_epoch'])).format('llll')+' - '+moment(parseInt(data['report_date_epoch'])).fromNow());
            }
            if ( data['last_enrolled_date_epoch'] !== null ){
                $('#jamf_last_enrolled_date_epoch').html(moment(parseInt(data['last_enrolled_date_epoch'])).format('llll')+' - '+moment(parseInt(data['last_enrolled_date_epoch'])).fromNow());
            }
            if ( data['warranty_expires_epoch'] !== null ){
                $('#jamf_warranty_expires_epoch').html(moment(parseInt(data['warranty_expires_epoch'])).format('llll')+' - '+moment(parseInt(data['warranty_expires_epoch'])).fromNow());
            }
            if ( data['lease_expires_epoch'] !== null ){
                $('#jamf_lease_expires_epoch').html(moment(parseInt(data['lease_expires_epoch'])).format('llll')+' - '+moment(parseInt(data['lease_expires_epoch'])).fromNow());
            }
            if ( data['last_cloud_backup_date_epoch'] !== null ){
                $('#jamf_last_cloud_backup_date_epoch').html(moment(parseInt(data['last_cloud_backup_date_epoch'])).format('llll')+' - '+moment(parseInt(data['last_cloud_backup_date_epoch'])).fromNow());
            }
            
            // Format battery percent
            if (parseInt(data['battery_capacity']) >= 0) {
                $('#jamf_battery_capacity').text(data['battery_capacity']+"%");
            } else {
                $('#jamf_battery_capacity').text("");
            }

            // Format managed row
            if ( data['managed'] == 1 ){
                $('#jamf_managed').html(i18n.t("yes")+', '+i18n.t("jamf.by")+'<span title="'+i18n.t("jamf.management_password_sha256")+': '+data['management_password_sha256']+'"> '+data['management_username']+'</span>');
            } else {
                $('#jamf_managed').text(i18n.t("no"));
            }
            
            // Format booleans
            if ( data['mdm_capable'] == 1 ){
                $('#jamf_mdm_capable').text(i18n.t("yes"));
            } else {
                $('#jamf_mdm_capable').text(i18n.t("no"));
            }
            if ( data['user_approved_enrollment'] == 1 ){
                $('#jamf_user_approved_enrollment').text(i18n.t("yes"));
            } else {
                $('#jamf_user_approved_enrollment').text(i18n.t("no"));
            }
            if ( data['user_approved_mdm'] == 1 ){
                $('#jamf_user_approved_mdm').text(i18n.t("yes"));
            } else {
                $('#jamf_user_approved_mdm').text(i18n.t("no"));
            }
            if ( data['enrolled_via_dep'] == 1 ){
                $('#jamf_enrolled_via_dep').text(i18n.t("yes"));
            } else {
                $('#jamf_enrolled_via_dep').text(i18n.t("no"));
            }
            if ( data['itunes_store_account_is_active'] == 1 ){
                $('#jamf_itunes_store_account_is_active').text(i18n.t("yes"));
            } else {
                $('#jamf_itunes_store_account_is_active').text(i18n.t("no"));
            }
            if ( data['ble_capable'] == 1 ){
                $('#jamf_ble_capable').text(i18n.t("yes"));
            } else {
                $('#jamf_ble_capable').text(i18n.t("no"));
            }
            if ( data['is_purchased'] == 1 ){
                $('#jamf_is_purchased').text(i18n.t("jamf.is_purchased"));
            } else {
                $('#jamf_is_purchased').text(i18n.t("jamf.is_leased"));
            }
			
            // Format hardware strings
			$('#jamf_processor_speed').html((parseInt(data['processor_speed'])/1000)+" Ghz");
			$('#jamf_cache_size').html('<span title="'+data['cache_size']+' KB">'+Math.round((parseInt(data['cache_size'])/1000), 0)+" MB</span>");
			$('#jamf_total_ram').html('<span title="'+data['total_ram']+' MB">'+Math.round((parseInt(data['total_ram'])/1000), 0)+" GB</span>");
            if ((parseInt(data['bus_speed'])) > 1000 ) { 
                $('#jamf_bus_speed').html((parseInt(data['bus_speed'])/1000)+" Ghz");
            } else if ((parseInt(data['bus_speed'])) > 0 ) { 
                $('#jamf_bus_speed').html(data['bus_speed']+" Mhz");
            } else {
                $('#jamf_bus_speed').html("")
            }
            
            // Format Site Name/ID            
            if (parseInt(data['site_id']) != -1 ){
                $('#jamf_site_name').html('<a title="'+i18n.t("jamf.view_in_jamf")+'" target="_blank" href="'+jamf_server+'/site.html?id='+data['site_id']+'"> '+data['site_name']+'</span>');
                $('#jamf_site_id').text(data['site_id']);
                $('#jamf_site_name_head').removeClass('hide');
                $('#jamf_site_name').removeClass('hide');
                $('#jamf_site_id_head').removeClass('hide');
                $('#jamf_site_id').removeClass('hide');
            } 


            // Make Extension Attributes table
            var extensionsdata = JSON.parse(data['extension_attributes']);
            // Set count of extension attributes
            $('#jamf-extensions-cnt').text(extensionsdata.length);
            // Make the table framework
            var extensionsrows = '<h4>'+i18n.t('jamf.extension_attributes')+'<a style="float: right;" class="btn btn-default btn-xs" target="_blank" href="'+jamf_server+'/computerExtensionAttributes.html"><i class="fa fa-cog"></i> '+i18n.t("jamf.extension_attributes")+'</a></h4><table class="table table-striped table-condensed"><tbody><th>'+i18n.t('jamf.name')+'</th><th>'+i18n.t('jamf.attribute')+'</th>'
            if (parseInt(extensionsdata.length) == 0 ){
                    extensionsrows = extensionsrows+'<tr><td>'+i18n.t('jamf.no_extension_attributes')+'</td><td></td></tr>';   
            } else {
                $.each(extensionsdata, function(i,d){
                    // Generate rows from data
                    extensionsrows = extensionsrows + '<tr><td><a target="_blank" href="'+jamf_server+'/computerExtensionAttributes.html?id='+d["id"]+'&o=r'+'">'+d['name']+'</a></td><td>'+d['value']+'</td></tr>';
                })
            }
            $('#Jamf-ExtensionAttributes-Table').html(extensionsrows+"</tbody></table>") // Close table framework and assign to HTML ID


            // Make Profiles table
            var profilesdata = JSON.parse(data['configuration_profiles']);
            // Set count of installed profiles
            $('#jamf-profs-cnt').text(profilesdata.length);
            $('#jamf-profs-cnt2').text(profilesdata.length);
            // Make the table framework
            var configprofilesrows = '<h4>'+i18n.t('jamf.profiles_scope')+'</h4><table class="table table-striped table-condensed"><tbody><th>'+i18n.t('jamf.name')+'</th>'
            // Make the table framework
            if (parseInt(profilesdata.length) == 0 ){
                configprofilesrows = configprofilesrows+'<tr><td>'+i18n.t('jamf.no_profiles')+'</td></tr>';   
            } else {
                $.each(profilesdata, function(i,d){
                    // Set yes/no
                    if (d['user_removable'] == 1){
                        var userremovebool = i18n.t('yes')
                    } else {
                        var userremovebool = i18n.t('no')
                    }
                    // Set level
                    if (d['level'] == 'computer'){
                        var profilelevel = i18n.t('jamf.computer')
                    } else if (d['level'] == 'user') {
                        var profilelevel = i18n.t('user.user')
                    } else {
                        var profilelevel = d['level']
                    }
                    // Generate rows from data
                    configprofilesrows = configprofilesrows + '<tr><td><a target="_blank" href="'+jamf_server+'/OSXConfigurationProfiles.html?id='+d["id"]+'&o=r'+'">'+d['name']+'</a></td></tr>';

                })
            }
            $('#Jamf-ConfigurationProfiles-Table').html(configprofilesrows+"</tbody></table>") // Close table framework and assign to HTML ID


            // Management Commands
            var commandsjson = JSON.parse(data['commands_history']);
            var commandscompleted = '<table class="table table-striped table-condensed"><tbody><th>'+i18n.t('jamf.command')+'</th><th>'+i18n.t('jamf.date_completed')+'</th><th>'+i18n.t('jamf.username')+'</th>'
            var commandsfailed = '<table class="table table-striped table-condensed"><tbody><th>'+i18n.t('jamf.command')+'</th><th>'+i18n.t('jamf.status')+'</th><th>'+i18n.t('jamf.date_issued')+'</th><th>'+i18n.t('jamf.date_last_push')+'</th><th>'+i18n.t('jamf.username')+'</th>'
            var commandspending = '<table class="table table-striped table-condensed"><tbody><th>'+i18n.t('jamf.command')+'</th><th>'+i18n.t('jamf.status')+'</th><th>'+i18n.t('jamf.date_issued')+'</th><th>'+i18n.t('jamf.date_last_push')+'</th><th>'+i18n.t('jamf.username')+'</th>'
            if (parseInt(commandsjson['completed'].length) == 0 ){
                commandscompleted = commandscompleted+'<tr><td>'+i18n.t('jamf.no_completed_commands')+'</td><td></td><td></td></tr>';   
            } else {
                $.each(commandsjson['completed'], function(i,d){ // Process completed commands
                // Fix date/time
                var timehuman = '<span title="'+moment(parseInt(d['completed_epoch'])).fromNow()+'">'+moment(parseInt(d['completed_epoch'])).format('llll')+'</span>'
                // Generate rows from data
                commandscompleted = commandscompleted+'<tr><td>'+d['name']+'</td><td>'+timehuman+'</td><td>'+d['username']+'</td></tr>';
                })
            }
            if (parseInt(commandsjson['failed'].length) == 0 ){
                commandsfailed = commandsfailed+'<tr><td>'+i18n.t('jamf.no_failed_commands')+'</td><td></td><td></td><td></td><td></td></tr>';   
            } else {
                $.each(commandsjson['failed'], function(i,d){ // Process failed commands
                    // Fix date/time
                    var timehuman = '<span title="'+moment(parseInt(d['issued_epoch'])).fromNow()+'">'+moment(parseInt(d['issued_epoch'])).format('llll')+'</span>'
                    var timehuman2 = '<span title="'+moment(parseInt(d['last_push_epoch'])).fromNow()+'">'+moment(parseInt(d['last_push_epoch'])).format('llll')+'</span>'
                    // Generate rows from data
                    commandsfailed = commandsfailed+'<tr><td>'+d['name']+'</td><td>'+d['status']+'</td><td>'+timehuman+'</td><td>'+timehuman2+'</td><td>'+d['username']+'</td></tr>';
                })
            }
            if (parseInt(commandsjson['pending'].length) == 0 ){
                    commandspending = commandspending+'<tr><td>'+i18n.t('jamf.no_pending_commands')+'</td><td></td><td></td><td></td><td></td></tr>';   
            } else {
                $.each(commandsjson['pending'], function(i,d){ // Process pending commands
                    // Fix date/time
                    var timehuman = '<span title="'+moment(parseInt(d['issued_epoch'])).fromNow()+'">'+moment(parseInt(d['issued_epoch'])).format('llll')+'</span>'
                    var timehuman2 = '<span title="'+moment(parseInt(d['last_push_epoch'])).fromNow()+'">'+moment(parseInt(d['last_push_epoch'])).format('llll')+'</span>'
                    // Generate rows from data
                    commandspending = commandspending+'<tr><td>'+d['name']+'</td><td>'+d['status']+'</td><td>'+timehuman+'</td><td>'+timehuman2+'</td><td>'+d['username']+'</td></tr>';
                })
            }
            $('#jamf_managementhistory_completed_button').text(data['comands_completed']+' '+i18n.t('jamf.completed_commands')); // Close table framework and assign to HTML ID 
            $('#jamf_managementhistory_failed_button').text(data['comands_failed']+' '+i18n.t('jamf.failed_commands')); // Close table framework and assign to HTML ID 
            $('#jamf_managementhistory_pending_button').text(data['comands_pending']+' '+i18n.t('jamf.pending_commands')); // Close table framework and assign to HTML ID 
            $('#Jamf-ManagementHistory-Completed-Table').html(commandscompleted) // Close table framework and assign to HTML ID            
            $('#Jamf-ManagementHistory-Failed-Table').html(commandsfailed) // Close table framework and assign to HTML ID            
            $('#Jamf-ManagementHistory-Pending-Table').html(commandspending) // Close table framework and assign to HTML ID            
            $('#Jamf-ManagementCommands-Table').html('<h4>'+i18n.t('jamf.pending_commands')+'&nbsp;&nbsp;<span class="badge">'+data['comands_pending']+'</h4>'+commandspending+"</tbody></table><h4>"+i18n.t('jamf.failed_commands')+'&nbsp;&nbsp;<span class="badge">'+data['comands_failed']+'</span>'+'</h4>'+commandsfailed+"</tbody></table>") // Close table framework and assign to HTML ID


            // Make Policies table
            var policiesdata = JSON.parse(data['policies_management']);
            // Set count of policies
            $('#jamf-policies-cnt').text(policiesdata.length);
            // Make the table framework
            var policiesrows = '<h4>'+i18n.t('jamf.policies_scope')+'</h4><table class="table table-striped table-condensed"><tbody><th>'+i18n.t('jamf.name')+'</th><th>'+i18n.t('jamf.triggers')+'</th>'
            if (parseInt(policiesdata.length) == 0 ){
                    policiesrows = policiesrows+'<tr><td>'+i18n.t('jamf.no_policies')+'</td></tr>';   
            } else {
                $.each(policiesdata, function(i,d){
                    // Generate rows from data
                    policiesrows = policiesrows + '<tr><td><a target="_blank" href="'+jamf_server+'/policies.html?id='+d["id"]+'&o=r'+'">'+d['name']+'</a></td><td>'+d['triggers']+'</td></tr>';
                })
            }
            $('#Jamf-Policies-Table').html(policiesrows+"</tbody></table>") // Close table framework and assign to HTML ID
                    
                    
            // Make eBooks table
            var ebooksdata = JSON.parse(data['ebooks_management']);
            // Set count of eBooks
            $('#jamf-ebooks-cnt').text(ebooksdata.length);
            // Make the table framework
            var ebooksrows = '<h4>'+i18n.t('jamf.ebooks_scope')+'</h4><table class="table table-striped table-condensed"><tbody><th>'+i18n.t('jamf.name')+'</th>'
            if (parseInt(ebooksdata.length) == 0 ){
                    ebooksrows = ebooksrows+'<tr><td>'+i18n.t('jamf.no_ebooks')+'</td></tr>';   
            } else {
                $.each(ebooksdata, function(i,d){
                    // Generate rows from data
                    ebooksrows = ebooksrows + '<tr><td><a target="_blank" href="'+jamf_server+'/eBooks.html?id='+d["id"]+'&o=r'+'">'+d['name']+'</a></td></tr>';
                })
            }
            $('#Jamf-eBooks-Table').html(ebooksrows+"</tbody></table>") // Close table framework and assign to HTML ID
                        
                
            // Make Mac App Store table
            var macappssdata = JSON.parse(data['mac_app_store_applications_history']);
            // Set count of Mac App Store Apps
            $('#jamf-macapps-cnt').text(macappssdata['installed'].length);
            // Make the table framework
            var macappsrows = '<h4>'+i18n.t('jamf.mac_apps_scope')+'</h4><table class="table table-striped table-condensed"><tbody><th>'+i18n.t('jamf.name')+'</th>'
            if (parseInt(macappssdata.length) == 0 ){
                    macappsrows = macappsrows+'<tr><td>'+i18n.t('jamf.no_mac_apps')+'</td></tr>';   
            } else {
                $.each(macappssdata['installed'], function(i,d){
                    // Generate rows from data
                    if (d["id"] !== undefined) {
                        macappsrows = macappsrows + '<tr><td><a target="_blank" href="'+jamf_server+'/macApps.html?id='+d["id"]+'&o=r'+'">'+d['name']+'</a></td></tr>';
                    } else {
                        macappsrows = macappsrows + '<tr><td>'+d['name']+'</td></tr>';
                    }
                })
            }
            $('#Jamf-MacApps-Table').html(macappsrows+"</tbody></table>") // Close table framework and assign to HTML ID
                        
                
            // Make Managed Preferences table
            var manprefsdata = JSON.parse(data['managed_preference_profiles_management']);
            // Set count of Managed Preferences
            $('#jamf-manprefs-cnt').text(manprefsdata.length);
            // Make the table framework
            var manprefsrows = '<h4>'+i18n.t('jamf.preferences_scope')+'</h4><table class="table table-striped table-condensed"><tbody><th>'+i18n.t('jamf.name')+'</th>'
            if (parseInt(manprefsdata.length) == 0 ){
                    manprefsrows = manprefsrows+'<tr><td>'+i18n.t('jamf.no_preferences')+'</td></tr>';   
            } else {
                $.each(manprefsdata, function(i,d){
                    // Generate rows from data
                    manprefsrows = manprefsrows + '<tr><td>'+d['name']+'</td></tr>';
                })
            }
            $('#Jamf-ManagedPreferences-Table').html(manprefsrows+"</tbody></table>") // Close table framework and assign to HTML ID   
                
                
            // Make Restricted Software table
            var restrictedsoftdata = JSON.parse(data['restricted_software_management']);
            // Set count of Restricted Software
            $('#jamf-restsoft-cnt').text(restrictedsoftdata.length);
            // Make the table framework
            var restrictedsoftrows = '<h4>'+i18n.t('jamf.restricted_scope')+'</h4><table class="table table-striped table-condensed"><tbody><th>'+i18n.t('jamf.name')+'</th>'
            if (parseInt(restrictedsoftdata.length) == 0 ){
                    restrictedsoftrows = restrictedsoftrows+'<tr><td>'+i18n.t('jamf.no_restricted')+'</td></tr>';   
            } else {
                $.each(restrictedsoftdata, function(i,d){
                    // Generate rows from data
                    restrictedsoftrows = restrictedsoftrows + '<tr><td><a target="_blank" href="'+jamf_server+'/restrictedSoftware.html?id='+d["id"]+'&o=r'+'">'+d['name']+'</a></td></tr>';
                })
            }
            $('#Jamf-RestrictedSoftware-Table').html(restrictedsoftrows+"</tbody></table>") // Close table framework and assign to HTML ID
                    
    
            // Smart Groups Table
            var groupssmartdata = JSON.parse(data['smart_groups_management']);
            // Set count of Smart Groups
            $('#jamf_groups_smart_button').text(i18n.t('jamf.smart_groups_management')+' ('+groupssmartdata.length+')');
            // Make the table framework
            var groupssmartrows = '<table class="table table-striped table-condensed"><tbody><th>'+i18n.t('jamf.name')+'</th>'
            if (parseInt(groupssmartdata.length) == 0 ){
                    groupssmartrows = groupssmartrows+'<tr><td>'+i18n.t('jamf.no_smart_groups')+'</td></tr>';   
            } else {
                $.each(groupssmartdata, function(i,d){
                    // Generate rows from data
                    groupssmartrows = groupssmartrows + '<tr><td><a target="_blank" href="'+jamf_server+'/smartComputerGroups.html?id='+d["id"]+'&o=r'+'">'+d['name']+'</a></td></tr>';
                })
            }
            $('#Jamf-Groups-Smart-Table').html(groupssmartrows+"</tbody></table>") // Close table framework and assign to HTML ID            
                
                
            // Static Groups Table
            var groupsstaticdata = JSON.parse(data['static_groups_management']);
            // Set count of Static Groups
            $('#jamf_groups_static_button').text(i18n.t('jamf.static_groups_management')+' ('+groupsstaticdata.length+')');
            // Make the table framework
            var groupsstaticrows = '<table class="table table-striped table-condensed"><tbody><th>'+i18n.t('jamf.name')+'</th>'
            if (parseInt(groupsstaticdata.length) == 0 ){
                    groupsstaticrows = groupsstaticrows+'<tr><td>'+i18n.t('jamf.no_static_groups')+'</td></tr>';   
            } else {
                $.each(groupsstaticdata, function(i,d){
                    // Generate rows from data
                    groupsstaticrows = groupsstaticrows + '<tr><td><a target="_blank" href="'+jamf_server+'/staticComputerGroups.html?id='+d["id"]+'&o=r'+'">'+d['name']+'</a></td></tr>';
                })
            }
            $('#Jamf-Groups-Static-Table').html(groupsstaticrows+"</tbody></table>") // Close table framework and assign to HTML ID
            
            
            // Software Titles Table
            var softwaretitlesdata = JSON.parse(data['patch_reporting_software_titles_management']);
            // Set count of Software Titles
            if (softwaretitlesdata.length !== undefined) {
                var softwaretitlescount = softwaretitlesdata.length;
            } else {
                var softwaretitlescount = 0
            }
            $('#jamf_software_titles_button').text(i18n.t('jamf.software_titles')+' ('+softwaretitlescount+')');
            // Make the table framework
            var softwaretitlesrows = '<table class="table table-striped table-condensed"><tbody><th>'+i18n.t('jamf.name')+'</th><th>'+i18n.t('jamf.latest_version')+'</th><th>'+i18n.t('jamf.installed_version')+'</th>'
            if (softwaretitlescount == 0 ){
                    softwaretitlesrows = softwaretitlesrows+'<tr><td>'+i18n.t('jamf.no_software_title')+'</td><td></td><td></td></tr>';   
            } else {
                $.each(softwaretitlesdata, function(i,d){
                    // Generate rows from data
                    softwaretitlesrows = softwaretitlesrows + '<tr><td>'+d['name']+'</td><td>'+d['latest_version']+'</td><td>'+d['installed_version']+'</td></tr>';
                })
            }
            $('#Jamf-Software-Titles-Table').html(softwaretitlesrows+"</tbody></table>") // Close table framework and assign to HTML ID            
            
            
            // Patch Policies Table
            var patchpoliciesdata = JSON.parse(data['patch_policies_management']);
            // Set count of Patch Policies
            if (patchpoliciesdata.length !== undefined) {
                var patchpoliciescount = patchpoliciesdata.length;
            } else {
                var patchpoliciescount = 0
            }
            $('#jamf_patch_policies_button').text(i18n.t('jamf.patch_policies')+' ('+patchpoliciescount+')');
            // Make the table framework
            var patchpoliciesrows = '<table class="table table-striped table-condensed"><tbody><th>'+i18n.t('jamf.name')+'</th><th>'+i18n.t('jamf.id')+'</th>'
            if (patchpoliciescount == 0 ){
                    patchpoliciesrows = patchpoliciesrows+'<tr><td>'+i18n.t('jamf.no_patch_policies')+'</td><td></td>';   
            } else {
                $.each(patchpoliciesdata, function(i,d){
                    // Generate rows from data
                    patchpoliciesrows = patchpoliciesrows + '<tr><td>'+d['name']+'</td><td>'+d['id']+'</td></tr>';
                })
            }
            $('#Jamf-Patch-Policies-Table').html(patchpoliciesrows+"</tbody></table>") // Close table framework and assign to HTML ID


			// Add strings
			$('#jamf_serial_number').text(data['serial_number']);
			$('#jamf_id').text(data['jamf_id']); 
			$('#jamf_name').text(data['name']);
			$('#jamf_mac_address').text(data['mac_address']);
			$('#jamf_alt_mac_address').text(data['alt_mac_address']);
			$('#jamf_ip_address').text(data['ip_address']);
			$('#jamf_last_reported_ip').text(data['last_reported_ip']);
			$('#jamf_version').text(data['jamf_version']);
			$('#jamf_barcode_1').text(data['barcode_1']);
			$('#jamf_barcode_2').text(data['barcode_2']);
			$('#jamf_asset_tag').text(data['asset_tag']);
			$('#jamf_mdm_capable_users').text(data['mdm_capable_users']);
			$('#jamf_distribution_point').text(data['distribution_point']);
			$('#jamf_sus').text(data['sus']);
			$('#jamf_netboot_server').text(data['netboot_server']);
			$('#jamf_udid').text(data['udid']);
			$('#jamf_username').text(data['username']);
			$('#jamf_realname').text(data['realname']);
			$('#jamf_email_address').text(data['email_address']);
			$('#jamf_position').text(data['position']);
			$('#jamf_phone').text(data['phone']);
			$('#jamf_department').text(data['department']);
			$('#jamf_building').text(data['building']);
			$('#jamf_room').text(data['room']);
			$('#jamf_po_number').text(data['po_number']);
			$('#jamf_vendor').text(data['vendor']);
			$('#jamf_applecare_id').text(data['applecare_id']);
			$('#jamf_purchase_price').text(data['purchase_price']);
			$('#jamf_purchasing_account').text(data['purchasing_account']);
			$('#jamf_purchasing_contact').text(data['purchasing_contact']);
			$('#jamf_life_expectancy').text(data['life_expectancy']);
			$('#jamf_available_ram_slots').text(data['available_ram_slots']);
			$('#jamf_boot_rom').text(data['boot_rom']);
			$('#jamf_disk_encryption_configuration').text(data['disk_encryption_configuration']);
			$('#jamf_institutional_recovery_key').text(data['institutional_recovery_key']);
			$('#jamf_model').text(data['model']);
			$('#jamf_model_identifier').text(data['model_identifier']);
			$('#jamf_nic_speed').text(data['nic_speed']);
			$('#jamf_number_cores').text(data['number_cores']);
			$('#jamf_number_processors').text(data['number_processors']);
			$('#jamf_optical_drive').text(data['optical_drive']);
			$('#jamf_processor_architecture').text(data['processor_architecture']);
			$('#jamf_processor_type').text(data['processor_type']);
			$('#jamf_smc_version').text(data['smc_version']);
			$('#jamf_licensed_software').text(data['licensed_software']);
			$('#jamf_available_software_updates').text(data['available_software_updates']);
			$('#jamf_computer_group_memberships').text(data['computer_group_memberships']);
		}

	});

});
    
// Make button groups active
$(".btn-group > .btn").click(function(){
    $(this).addClass("active").siblings().removeClass("active");
});

</script>
