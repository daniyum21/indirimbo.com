<?php
/**
 * Created by PhpStorm.
 * User: daniyum21
 * Date: 9/4/14
 * Time: 9:12 PM
 */
?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Home</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
            <form class="navbar-form navbar-right" name="SomeSearch">
                <input id="search"  type="text" class="form-control" name="search"/>
            </form>
        </div>
    </div>
</div>
