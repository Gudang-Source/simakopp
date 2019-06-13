<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
        <div class="navbar-translate">
        <a class="navbar-brand" href="<?=base_URL()?>dashboard">Simakopp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="active nav-item">
            <a href="#" class="nav-link">
                <i class="material-icons">home</i> Home
            </a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="material-icons">business_center</i> Aset
            </a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="material-icons">assignment</i> Komplain
            </a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="material-icons">account_circle</i> Profile
            </a>
            </li>
        </ul>
        </div>
    </div>
</nav>