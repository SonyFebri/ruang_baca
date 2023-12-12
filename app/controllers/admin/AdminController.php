<?php
class AdminController
{
    public function dashboardPage()
    {
        $data = [

        ];
        return Helper::view("admin/dashboard", $data);
    }


}