<?php

class Helper 
{
	public static function qDate($date)
	{
		return date_format($date,"YYYY-mm-dd");
	}	
	
	public static function executeScalar($strquery)
	{
		$rs = DB::select(DB::raw($strquery));
		foreach ($rs as $row)
		{
			return $row->value;
		}
	}
}


?>