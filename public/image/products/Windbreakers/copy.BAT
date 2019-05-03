@echo off
for /D %%a in ("C:\xampp\htdocs\Lining\laravel\public\image\products\Windbreakers\*.*") do xcopy /y /d C:\xampp\htdocs\Lining\laravel\public\image\products\1.jpg "%%a\"