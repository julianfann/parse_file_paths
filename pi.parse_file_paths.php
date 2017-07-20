<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Parse_file_paths
{
	public $return_data = '';

	public function Parse_file_paths()
	{
		ee()->load->library('typography');
		ee()->typography->parse_images = TRUE;
		$this->return_data = ee()->typography->parse_file_paths(ee()->TMPL->tagdata);
	}
	
	public static function usage()
	{
		ob_start(); 
?>
{exp:query sql="SELECT field_id_1 AS file FROM exp_channel_data"}
{exp:parse_file_paths}
	{file}
{/exp:parse_file_paths}
{/exp:query}
<?php
		$buffer = ob_get_contents();
		      
		ob_end_clean(); 
	      
		return $buffer;
	}
}
/* End of file pi.parse_file_paths.php */ 
/* Location: ./system/user/addons/parse_file_paths/pi.parse_file_paths.php */