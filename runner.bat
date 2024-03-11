@echo off
%~dp0/webserver/php.exe -S localhost:8000 -t %~dp0/webserver_files
