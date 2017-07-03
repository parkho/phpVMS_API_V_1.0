<?php
class APIData extends CodonData
{
	public static function pilots_count()
	{
		$sql ="SELECT COUNT(*) as total FROM ".TABLE_PREFIX."pilots";
		$row = DB::get_row($sql);
		return 	$row->total;	
	}
	
	public static function flights_count()
	{
		$sql ="SELECT COUNT(*) as total FROM ".TABLE_PREFIX."pireps";
		$row = DB::get_row($sql);
		return 	$row->total;	
	}
	
	public static function schedules_count()
	{
		$sql ="SELECT COUNT(*) as total FROM ".TABLE_PREFIX."schedules";
		$row = DB::get_row($sql);
		return 	$row->total;	
	}
	
	public static function pendingpilots_count()
	{
		$sql ="SELECT COUNT(*) as total FROM ".TABLE_PREFIX."pilots WHERE confirmed = 0 ";
		$row = DB::get_row($sql);
		return 	$row->total;	
	}
	
	public static function airlinefuelsum()
	{
		$sql ="SELECT SUM(fuelprice) AS total FROM ".TABLE_PREFIX."pireps";
		$row = DB::get_row($sql);		
		return $row->total;
	}
}