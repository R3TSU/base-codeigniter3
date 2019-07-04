<?php (defined('BASEPATH')) OR exit('No direct script access allowed');


class MY_Exceptions extends CI_Exceptions {

    /**
     * [show_404 description]
     *
     * @param  string  $page      [description]
     * @param  boolean $log_error [description]
     * @return [type]             [description]
     */
    function show_404($page = '', $log_error = TRUE)
    {
        // By default we log this, but allow a dev to skip it
        if ($log_error)
        {
            log_message('error', '404 Page Not Found --> '.$page);
        }

        header('Content-type: text/json');
        set_status_header(404);

        $array = array('status_code' => '404', 'message' => '404 Page Not Found');

        echo json_encode($array);
        exit;
    }
}
