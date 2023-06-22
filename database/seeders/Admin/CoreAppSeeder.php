<?php

namespace Database\Seeders\Admin;

use App\Models\CoreApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoreAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = database_path() . '/seeders/Admin/CoreApp.json';
        $str = file_get_contents($filePath);
        $json = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $str), true);
        foreach ($json as $value) {
            $rowdata = new CoreApp();
            $rowdata->id = $value["id"];
            $rowdata->app_code = $value["appCode"];
            $rowdata->app_name = $value["appName"];
            $rowdata->description = $value["appDescription"];
            $rowdata->app_icon = $value["appIcon"];
            $rowdata->status = $value["appStatus"];
            $rowdata->status_message = $value["statusMessage"];
            $rowdata->created_by = 0;
            $rowdata->save();
        }
    }

}
