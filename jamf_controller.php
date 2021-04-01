<?php

/**
 * Jamf module class
 *
 * @package munkireport
 * @author tuxudo
 **/
class jamf_controller extends Module_controller
{
    public function __construct()
    {
        // No authentication, the client needs to get here
        // Store module path
        $this->module_path = dirname(__FILE__);

        // Add local config
        configAppendFile(__DIR__ . '/config.php');
    }

    public function index()
    {
        echo "You've loaded the Jamf module!";
    }

    // Add the admin page
    public function admin()
    {
        $obj = new View();
        $obj->view('jamf_admin', [], $this->module_path.'/views/');
    }

    /**
    * Get enrolled via DEP info
    *
    * @author tuxudo
    **/
    public function get_enrolled_via_dep()
    {
        $sql = "SELECT  COUNT(CASE WHEN `enrolled_via_dep` = '1' THEN 1 END) AS Yes,
                        COUNT(CASE WHEN `enrolled_via_dep` = '0' THEN 1 END) AS No
                        FROM `jamf`
                        LEFT JOIN reportdata USING (serial_number)
                        ".get_machine_group_filter();

        $queryobj = new Jamf_model();
        jsonView(current($queryobj->query($sql)));
    }

    /**
    * Get user approved enrollment info
    *
    * @author tuxudo
    **/
    public function get_user_approved_enrollment()
    {
        $sql = "SELECT  COUNT(CASE WHEN `user_approved_enrollment` = '1' THEN 1 END) AS Yes,
                        COUNT(CASE WHEN `user_approved_enrollment` = '0' THEN 1 END) AS No
                        FROM `jamf`
                        LEFT JOIN reportdata USING (serial_number)
                        ".get_machine_group_filter();

        $queryobj = new Jamf_model();
        jsonView(current($queryobj->query($sql)));
    }

    /**
    * Get user approved mdm info
    *
    * @author tuxudo
    **/
    public function get_user_approved_mdm()
    {
        $sql = "SELECT  COUNT(CASE WHEN `user_approved_mdm` = '1' THEN 1 END) AS Yes,
                        COUNT(CASE WHEN `user_approved_mdm` = '0' THEN 1 END) AS No
                        FROM `jamf`
                        LEFT JOIN reportdata USING (serial_number)
                        ".get_machine_group_filter();

        $queryobj = new Jamf_model();
        jsonView(current($queryobj->query($sql)));
    }

    /**
    * Get mdm capable user info
    *
    * @author tuxudo
    **/
    public function get_mdm_capable()
    {
        $sql = "SELECT  COUNT(CASE WHEN `mdm_capable` = '1' THEN 1 END) AS Yes,
                        COUNT(CASE WHEN `mdm_capable` = '0' THEN 1 END) AS No
                        FROM `jamf`
                        LEFT JOIN reportdata USING (serial_number)
                        ".get_machine_group_filter();

        $queryobj = new Jamf_model();
        jsonView(current($queryobj->query($sql)));
    }

    /**
    * Get purchased info
    *
    * @author tuxudo
    **/
    public function get_purchased_leased()
    {
        $sql = "SELECT  COUNT(CASE WHEN `is_purchased` = '1' THEN 1 END) AS Purchased,
                        COUNT(CASE WHEN `is_leased` = '1' THEN 1 END) AS Leased
                        FROM `jamf`
                        LEFT JOIN reportdata USING (serial_number)
                        ".get_machine_group_filter();

        $queryobj = new Jamf_model();
        jsonView(current($queryobj->query($sql)));
    }

    /**
    * Get pending failed info
    *
    * @author tuxudo
    **/
    public function get_pending_failed()
    {
        $sql = "SELECT  COUNT(CASE WHEN `comands_completed` = '1' THEN 1 END) AS Completed,
                        COUNT(CASE WHEN `comands_pending` = '1' THEN 1 END) AS Pending,
                        COUNT(CASE WHEN `comands_failed` = '1' THEN 1 END) AS Failed
                        FROM `jamf`
                        LEFT JOIN reportdata USING (serial_number)
                        ".get_machine_group_filter();

        $queryobj = new Jamf_model();
        jsonView(current($queryobj->query($sql)));
    }

    /**
    * Get automatic login info
    *
    * @author tuxudo
    **/
    public function get_automatic_login_disabled()
    {
        $sql = "SELECT  COUNT(CASE WHEN `disable_automatic_login` = '1' THEN 1 END) AS Yes,
                        COUNT(CASE WHEN `disable_automatic_login` = '0' THEN 1 END) AS No
                        FROM `jamf`
                        LEFT JOIN reportdata USING (serial_number)
                        ".get_machine_group_filter();

        $queryobj = new Jamf_model();
        jsonView(current($queryobj->query($sql)));
    }

    /**
     * Get XProtect version for widget
     *
     * @return void
     * @author tuxudo
     **/
    public function get_xprotect_version()
    {
        $sql = "SELECT COUNT(CASE WHEN xprotect_version <> '' AND xprotect_version IS NOT NULL THEN 1 END) AS count, xprotect_version 
                FROM jamf
                LEFT JOIN reportdata USING (serial_number)
                ".get_machine_group_filter()."
                GROUP BY xprotect_version
                ORDER BY count DESC";

        $out = [];
        $queryobj = new Jamf_model;
        foreach ($queryobj->query($sql) as $obj) {
            if ("$obj->count" !== "0") {
                $obj->xprotect_version = $obj->xprotect_version ? $obj->xprotect_version : 'Unknown';
                $out[] = $obj;
            }
        }

        jsonView($out);
    }
    
    /**
     * Get Jamf version for widget
     *
     * @return void
     * @author tuxudo
     **/
    public function get_jamf_version()
    {
        $sql = "SELECT COUNT(CASE WHEN jamf_version <> '' AND jamf_version IS NOT NULL THEN 1 END) AS count, jamf_version 
                FROM jamf
                LEFT JOIN reportdata USING (serial_number)
                ".get_machine_group_filter()."
                GROUP BY jamf_version
                ORDER BY count DESC";

        $out = [];
        $queryobj = new Jamf_model;
        foreach ($queryobj->query($sql) as $obj) {
            if ("$obj->count" !== "0") {
                $obj->jamf_version = $obj->jamf_version ? $obj->jamf_version : 'Unknown';
                $out[] = $obj;
            }
        }

        jsonView($out);
    }

    /**
     * Get departments for widget
     *
     * @return void
     * @author tuxudo
     **/
    public function get_jamf_departments()
    {
        $sql = "SELECT COUNT(CASE WHEN department <> '' AND department IS NOT NULL THEN 1 END) AS count, department
                FROM jamf
                LEFT JOIN reportdata USING (serial_number)
                ".get_machine_group_filter()."
                GROUP BY department
                ORDER BY count DESC";

        $out = [];
        $queryobj = new Jamf_model;
        foreach ($queryobj->query($sql) as $obj) {
            if ("$obj->count" !== "0") {
                $obj->department = $obj->department ? $obj->department : 'Unknown';
                $out[] = $obj;
            }
        }

        jsonView($out);
    }

    /**
     * Get buildings for widget
     *
     * @return void
     * @author tuxudo
     **/
    public function get_jamf_buildings()
    {
        $sql = "SELECT COUNT(CASE WHEN building <> '' AND building IS NOT NULL THEN 1 END) AS count, building
                FROM jamf
                LEFT JOIN reportdata USING (serial_number)
                ".get_machine_group_filter()."
                GROUP BY building
                ORDER BY count DESC";

        $out = [];
        $queryobj = new Jamf_model;
        foreach ($queryobj->query($sql) as $obj) {
            if ("$obj->count" !== "0") {
                $obj->building = $obj->building ? $obj->building : 'Unknown';
                $out[] = $obj;
            }
        }

        jsonView($out);
    }

    /**
     * REST API for retrieving last checkin data for widget
     * @tuxudo
     *
     **/
     public function get_last_checkin()
     {        
         $currentdate = date_timestamp_get(date_create());
         $week = $currentdate - 604800;
         $month = $currentdate - 2592000;

         $sql = "SELECT COUNT( CASE WHEN ".$month." >= last_contact_time_epoch THEN 1 END) AS red,
						COUNT( CASE WHEN ".$week." >= last_contact_time_epoch AND last_contact_time_epoch > ".$month." THEN 1 END) AS yellow,
						COUNT( CASE WHEN last_contact_time_epoch > ".$week." AND last_contact_time_epoch > 0 THEN 1 END) AS green
						FROM jamf
                        LEFT JOIN reportdata USING (serial_number)
						".get_machine_group_filter();

         $queryobj = new Jamf_model();
         jsonView($queryobj->query($sql));
     }

    /**
     * Pull in Jamf data for all serial numbers :D
     *
     * @return void
     * @author tuxudo
     **/
    public function pull_all_jamf_data($incoming_serial = '')
    {
        // Check if we are returning a list of all serials or processing a serial
        // Returns either a list of all serial numbers in MunkiReport OR
        // a JSON of what serial number was just ran with the status of the run
        if ( $incoming_serial == ''){
            // Get all the serial numbers in an object
            $machine = new Jamf_model();
            $filter = get_machine_group_filter();

            $sql = "SELECT machine.serial_number
                FROM machine
                LEFT JOIN reportdata USING (serial_number)
                $filter";

            // Loop through each serial number for processing
            $out = array();
            foreach ($machine->query($sql) as $serialobj) {
                $out[] = $serialobj->serial_number;
            }
            jsonView($out);
        } else {

            $jamf = new Jamf_model($incoming_serial);
            $jamf_status = $jamf->run_jamf_stats();

            // Check if machine exists in Jamf
            if ($jamf_status->rs['jamf_id'] == 0 ){
                $out = array("serial"=>$incoming_serial,"status"=>"Machine not found in Jamf!");
            } else {
                $out = array("serial"=>$incoming_serial,"status"=>"Machine processed");
            }
            jsonView($out);
        }
    }

    /**
     * Force data pull from Jamf
     *
     * @return void
     * @author tuxudo
     **/
    public function recheck_jamf($serial = '')
    {
        if (authorized_for_serial($serial)) {
            $jamf = new Jamf_model($serial);
            $jamf->run_jamf_stats();
        }

        redirect("clients/detail/$serial#tab_jamf-tab");
    }

    /**
     * Get Jamf information for serial_number
     *
     * @param string $serial serial number
     **/
    public function get_data($serial_number = '')
    {
        $jamf = new Jamf_model($serial_number);
        jsonView($jamf->rs);
    }
} // End class jamf_module
