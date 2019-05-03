@echo off
for /D %%a in ("C:\xampp\htdocs\Lining\laravel\public\image\products\Accessories&Equipments\*.*") do xcopy /y /d C:\xampp\htdocs\Lining\laravel\public\image\products\2.jpg "%%a\"