<?php 
/**
 * Convert timestamp to ', il y a x y(s)'
 * @param timestamp $ptime
 * @return ', il y a x y(s)
 */
function time_elapsed_string($ptime){
	$etime = time() - $ptime;

	if ($etime < 1)
	{
		return '0 seconds';
	}

	$a = array( 12 * 30 * 24 * 60 * 60  =>  'année',
			30 * 24 * 60 * 60       =>  'mois',
			24 * 60 * 60            =>  'jours',
			60 * 60                 =>  'heure',
			60                      =>  'minute',
			1                       =>  'seconde'
	);

	foreach ($a as $secs => $str)
	{
		$d = $etime / $secs;
		if ($d >= 1)
		{
			$r = round($d);
			return ', il y a ' . $r . ' ' . $str . ($r > 1 ? 's' : '');
		}
	}
}

