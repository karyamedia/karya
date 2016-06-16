<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once( FCPATH.'vendor/smarty/smarty/libs/SmartyBC.class.php' );

class SmartyLib extends SmartyBC {
public function __construct()
    {
        parent::__construct();

        $this->compile_dir = APPPATH . "cache/Smarty/compile";
        $this->template_dir = APPPATH . "/views/";
        $this->setTemplateDir(APPPATH . "/views/");
        $this->assign( 'APPPATH', APPPATH );
        $this->assign( 'BASEPATH', BASEPATH );

        // Assign CodeIgniter object by reference to CI
        if ( method_exists( $this, 'assignByRef') )
        {
            $ci =& get_instance();
            $this->assignByRef("ci", $ci);
            
        }

        log_message('debug', "Smarty Class Initialized");
    }
function view($template, $data = array(), $return = FALSE)
    {
        foreach ($data as $key => $val)
        {
            $this->assign($key, $val);
        }
        
        if ($return == FALSE)
        {
            $CI =& get_instance();
            if (method_exists( $CI->output, 'set_output' ))
            {
                $CI->output->set_output( $this->fetch($template) );
            }
            else
            {
                $CI->output->final_output = $this->fetch($template);
            }
            return;
        }
        else
        {
            return $this->fetch($template);
        }
    }
}

/* End of file CI_Smarty.php */
/* Location: ./application/libraries/CI_Smarty.php */