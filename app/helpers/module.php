<?php

function DS()
{
    return DIRECTORY_SEPARATOR; //means => '/'
}

function getModuleName(string $moduleName)
{
    return app_path('modules'.DS().$moduleName.DS());
}

function loadConfigFile(string $moduleName, string $fileName)
{
    return getModuleName($moduleName).'config/'.$fileName.'.php';
}

function loadRoutes(string $moduleName, string $fileName)
{
    return getModuleName($moduleName).'routes/'.$fileName.'.php';
}

function loadViews(string $moduleName)
{
    return getModuleName($moduleName).'resources/views';
}

function loadTranslations(string $moduleName)
{
    return getModuleName($moduleName).'resources/lang';
}

function loadMigrations(string $moduleName)
{
    return getModuleName($moduleName).'database/migrations';
}
