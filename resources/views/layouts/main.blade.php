<?php
use App\Models\Setting;

$setting = Setting::first();
// settings main template

$template_folder = $setting->template;
?>
@include('layouts.'.$template_folder.'.main');