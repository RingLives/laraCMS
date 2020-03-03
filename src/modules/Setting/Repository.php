<?php

class Repository
{
	private $settings;

	public function __construct($settings)
	{
		$this->settings = $settings;
	}

	/**
     * Get all settings.
     *
     * @return array
     */
    public function all()
    {
        return $this->settings->all();
    }

    /**
     * Get setting for the given key.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function get($key, $default = null)
    {
        return $this->settings->get($key) ?: $default;
    }

    /**
     * Set the given settings.
     *
     * @param array $settings
     * @return void
     */
    public function set($settings = [])
    {
        Setting::setMany($settings);
    }
}