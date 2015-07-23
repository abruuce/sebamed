@extends('seba')

@section('content')
<header class="navbar navbar-bright navbar-fixed-top" role="banner" data-spy="affix" data-offset-top="80">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="brand" href="http://www.bootstrapzero.com" title="Bootstrap Zero is free themes for Bootstrap">Bootstrap <span style="color:#f9f9f9;font-weight:200;">Zero</span></a>
        </div>
        <nav class="collapse navbar-collapse" role="navigation" id="navbar">
            <ul class="nav navbar-nav">
                <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Free Templates <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/bootstrap-templates/starter">Starter Templates</a></li>
                    <li><a href="/bootstrap-templates/theme">Bootstrap Themes</a></li>
                    <li><a href="/bootstrap-templates" title="All themes are responsive">Responsive Templates + Themes</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">More Templates</li>
                    <li><a href="/bootstrap-template/sidebar">Sidebar</a></li>
                    <li><a href="/bootstrap-template/affix-sidebar" title="Sticky sidebar example">Affix</a></li>
                    <li><a href="/bootstrap-templates/landing">Landing Page</a></li>
                    <li><a href="/bootstrap-templates/one-page" title="Single page app templates">One Page</a></li>
                    <li><a href="/bootstrap-templates/portfolio">Portfolio</a></li>
                    <li><a href="/bootstrap-templates/admin" title="Admin and dashboard themes">Admin</a></li>
                    <li><a href="/bootstrap-template/off-canvas-sidebar">Off-canvas</a></li>
                    <li><a href="/bootstrap-template/blog">Blog</a></li>
                    <li><a href="/bootstrap-template/fixed-width">Fixed Width</a></li>
                    <li><a href="/bootstrap-template/sign-in">Login</a></li>
                    <li><a href="/bootstrap-template/app">App</a></li>
                    <li><a href="/bootstrap-template/full-example">Full Example</a></li>
                    <li class="dropdown-header">More Themes</li>
                    <li><a href="/bootstrap-template/facebook">Facebook Theme</a></li>
                    <li><a href="/bootstrap-template/google-plus">Google Plus Theme</a></li>
                    <li><a href="/bootstrap-template/holo">Android Holo Theme</a></li>
                    <li><a href="/bootstrap-template/happy-scroll">Happy Scroll Theme</a></li>
                  </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://bootstrapbay.com/?ref=skelly" rel="nofollow" target="ext">Premium</a></li>
                <li><a href="#footer" id="btnAbout">About</a></li>
            </ul>
        </nav>
      </div>
    </header>
    @stop