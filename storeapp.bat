@ECHO off
REM Assume php.exe is executable, and that frontcontroller.php will reside in the
REM same file as this one
SET PHP_BIN=php.exe
SET PHP_DIR=%~dp0
GOTO RUN

:RUN
SET STORE_SCRIPT=%PHP_DIR%\cli-scripts\frontcontroller.php
"%PHP_BIN%" -d safe_mode=Off -f "%STORE_SCRIPT%" -- %*