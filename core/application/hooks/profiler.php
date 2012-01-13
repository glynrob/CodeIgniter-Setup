<?php 
function enable_profiler()
{
	$CI =& get_instance();
	$CI->output->enable_profiler(TRUE);
}

// end of file