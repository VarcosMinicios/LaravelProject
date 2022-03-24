<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
</p>

## About the Project

This project was made for learning purposes, it's my first project.

The project use Devil Box and Docker to run

It's about a CRUD application with MySQL DataBase, controllers, routes, and a toast provided by yoeunes
The forms has a person class Request for handling validations, after this the Request go for the Controller wich will
store in the Database, return to the list of all registers and make a toast to feedback the user the success of register.
The excludes has a confirmation Popup provided by a div with display none by default and activated by JavaScript, after clicking the "Excluir" button the controller return to default value of div and make a toast to feedback the user.
The Edit mode works as the register, otherwise route to update function in controller, and then follow the same logic, return and make a toast.
