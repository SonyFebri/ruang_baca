<?php
class GlobalController
{
	public function landing()
	{
		return Helper::redirect("/auth/login");
	}
}