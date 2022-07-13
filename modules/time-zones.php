<?php
/**
 * The list of time zones (UTC offsets)
 *
 * @link https://en.wikipedia.org/wiki/Time_zone
 */

class Listo_Time_Zones implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'utc-1200' => "UTC-12:00",
			'utc-1100' => "UTC-11:00",
			'utc-1000' => "UTC-10:00",
			'utc-0930' => "UTC-09:30",
			'utc-0900' => "UTC-09:00",
			'utc-0800' => "UTC-08:00",
			'utc-0700' => "UTC-07:00",
			'utc-0600' => "UTC-06:00",
			'utc-0500' => "UTC-05:00",
			'utc-0430' => "UTC-04:30",
			'utc-0400' => "UTC-04:00",
			'utc-0330' => "UTC-03:30",
			'utc-0300' => "UTC-03:00",
			'utc-0200' => "UTC-02:00",
			'utc-0100' => "UTC-01:00",
			'utc+0000' => "UTC±00:00",
			'utc+0100' => "UTC+01:00",
			'utc+0200' => "UTC+02:00",
			'utc+0300' => "UTC+03:00",
			'utc+0330' => "UTC+03:30",
			'utc+0400' => "UTC+04:00",
			'utc+0430' => "UTC+04:30",
			'utc+0500' => "UTC+05:00",
			'utc+0530' => "UTC+05:30",
			'utc+0545' => "UTC+05:45",
			'utc+0600' => "UTC+06:00",
			'utc+0630' => "UTC+06:30",
			'utc+0700' => "UTC+07:00",
			'utc+0800' => "UTC+08:00",
			'utc+0830' => "UTC+08:30",
			'utc+0845' => "UTC+08:45",
			'utc+0900' => "UTC+09:00",
			'utc+0930' => "UTC+09:30",
			'utc+1000' => "UTC+10:00",
			'utc+1030' => "UTC+10:30",
			'utc+1100' => "UTC+11:00",
			'utc+1130' => "UTC+11:30",
			'utc+1200' => "UTC+12:00",
			'utc+1245' => "UTC+12:45",
			'utc+1300' => "UTC+13:00",
			'utc+1400' => "UTC+14:00",
		);
	}

	public static function groups() {
		return array();
	}
}
