<?php
class API extends CodonModule
{
	public function NavBar()
        {
            echo '<li><a href="'.SITE_URL.'/admin/index.php/API">API Manager</a></li>';
			$this->set('sidebar', '/api/sidebar_api.php');
        }
	
	public function index()
		{
			$this->show('api/api_main.php');
			$filename = $_SERVER['DOCUMENT_ROOT'].'/admin/templates/api/api.php';
			
			if(file_exists($filename))
				{
					$this->render('api/api.php');
				}
			else
				{
					echo'No Published File Yet';
				}
		}
	
	public function popdata()
		{
			$json = new stdClass();
			$fp = fopen('templates/api/api.php', 'w');
			$json->totalpilots = APIData::pilots_count();
			$json->totalflights = APIData::flights_count();
			$json->totalschedules = APIData::schedules_count();
			$json->pendingpilots = APIData::pendingpilots_count();
			$json->totalfuelburned = round(APIData::airlinefuelsum(), 0);
			fwrite($fp, json_encode($json));
			fclose($fp);
			$this->show('api/api_main.php');
			$this->render('api/api.php');
		}
	
	public function fileremove()
		{
			unlink('templates/api/api.php');
			$this->show('api/api_main.php');
			$filename = $_SERVER['DOCUMENT_ROOT'].'/admin/templates/api/api.php';
			if(file_exists($filename))
				{
					$this->render('api/api.php');
				}
			else
				{
					echo'No Published File Yet';
				}
		}
}			
?>