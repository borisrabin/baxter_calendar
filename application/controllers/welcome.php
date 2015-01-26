<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function show_calendar($year=NULL, $month=NULL)
	{
		$data['year']  = $year;
				$data['month']  = $month;
		
		
	 $prefs['template'] = '
{table_open}<table class="calendar">{/table_open}
	{week_day_cell}<th class="day_header">{week_day}</th>{/week_day_cell}
	{cal_cell_content}<span class="day_listing">{day}</span>&nbsp;&bull; {content}&nbsp;{/cal_cell_content}
	{cal_cell_content_today}<div class="today"><span class="day_listing">{day}</span>&bull; {content}</div>{/cal_cell_content_today}
	{cal_cell_no_content}<span class="day_listing">{day}</span>&nbsp;{/cal_cell_no_content}
	{cal_cell_no_content_today}<div class="today"><span class="day_listing">{day}</span></div>{/cal_cell_no_content_today}
  
';
		
		
		
		
		
		
		
		$prefs = array (
               'start_day'    => 'monday',
               'month_type'   => 'long',
               'day_type'     => 'long',
               'show_next_prev'  => TRUE,
               'next_prev_url'   => 'http://localhost/baxter/index.php/welcome/show_calendar'
             );
		$this->load->library('calendar', $prefs);

$data['entr'] = array(
               3  => 'http://example.com/news/article/2006/03/',
               7  => 'http://example.com/news/article/2006/07/',
               13 => 'http://example.com/news/article/2006/13/',
               26 => 'http://example.com/news/article/2006/26/'
             );
$this->load->view('welcome_message', $data);

	}


	



}

