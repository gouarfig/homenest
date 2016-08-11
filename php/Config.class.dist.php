<?php

class Config {
	public $timezone = "UTC";
	public $town_id = 1;
	public $units = "metric";
	public $appid = "Your Open Weather Map APPID";
    public $base_url = "http://api.openweathermap.org/data/2.5/weather?";
	public $full_date_format = "D jS M Y H:i";
	public $hour_format = "H:i";

	public function setDefaultTimezone() {
		date_default_timezone_set($this->timezone);
	}

	public function getWeatherUrl() {
		return "{$this->base_url}id={$this->town_id}&units={$this->units}&APPID={$this->appid}";
	}
}