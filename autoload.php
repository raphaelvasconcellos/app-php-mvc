<?php

spl_autoload_register(function ($classname) {

    $class_controller = 'Controller/' . $classname . '.php';
    $class_model = 'Model/' . $classname . '.php';
    $class_dao = 'DAO/' . $classname . '.php';

    if (file_exists($class_controller)) {
        include $class_controller;
    } else
    if (file_exists($class_model)) {
        include $class_model;
    } else
    if (file_exists($class_dao)) {
        include $class_dao;
    }
});
