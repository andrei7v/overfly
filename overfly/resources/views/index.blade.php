@extends('layouts.formato')

@section('titulo', 'Inicio')

@section('contenido')
<div class="uk-offcanvas-content">
  {{--menu superior--}}
  <div uk-sticky="media: 960" class="uk-navbar-container tm-navbar-container uk-sticky uk-sticky-fixed" style="position: fixed; top: 0px; width: 1360px;">
    <div class="uk-container uk-container-expand">
      <nav class="uk-navbar">
        <div class="uk-navbar-left">
          <a href="../" class="uk-navbar-item uk-logo">
            <img uk-svg="" src="../images/uikit-logo.svg" class="uk-margin-small-right" hidden="hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="34" viewBox="0 0 28 34" ratio="1" class="uk-margin-small-right uk-svg">
              <polygon fill="#fff" points="19.1,4.1 13.75,1 8.17,4.45 13.6,7.44 "></polygon>
              <path fill="#fff" d="M21.67,5.43l-5.53,3.34l6.26,3.63v9.52l-8.44,4.76L5.6,21.93v-7.38L0,11.7v13.51l13.75,8.08L28,25.21V9.07 L21.67,5.43z"></path>
            </svg> UIkit</a>
        </div>
        <div class="uk-navbar-right">
          <ul class="uk-navbar-nav uk-visible@m">
            <li><a href="../pro">Pro</a></li>
            <li class="uk-active"><a href="../docs/">Documentation</a></li>
            <li><a href="../changelog">Changelog</a></li>
          </ul>
          <div class="uk-navbar-item uk-visible@m">
            <a href="../download" class="uk-button uk-button-default tm-button-default uk-icon">Download
              <canvas uk-icon="icon: download" width="20" height="20" class="uk-icon" hidden="hidden"></canvas><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" ratio="1"> <polyline fill="none" stroke="#000" points="14,10 9.5,14.5 5,10"></polyline> <rect x="3" y="17" width="13" height="1"></rect> <line fill="none" stroke="#000" x1="9.5" y1="13.91" x2="9.5" y2="3"></line></svg></a>
          </div>
          <a uk-navbar-toggle-icon="" href="#offcanvas" uk-toggle="" class="uk-navbar-toggle uk-hidden@m uk-navbar-toggle-icon uk-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" ratio="1"><rect y="9" width="20" height="2"></rect><rect y="3" width="20" height="2"></rect><rect y="15" width="20" height="2"></rect></svg></a>
        </div>
      </nav>
    </div>
  </div>
  {{-- menu izquierda --}}
  <div class="uk-sticky-placeholder" style="height: 80px; margin: 0px;"></div>
  <div class="tm-sidebar-left uk-visible@m">
    <h3>Documentation</h3>
    <ul class="uk-nav uk-nav-default tm-nav">
      <li class="uk-nav-header">Getting started</li>
      <li class=""><a href="/docs/introduction">Introduction</a></li>
      <li class=""><a href="/docs/installation">Installation</a></li>
      <li class=""><a href="/docs/less">Less</a></li>
      <li class=""><a href="/docs/sass">Sass</a></li>
      <li class=""><a href="/docs/javascript">JavaScript</a></li>
      <li class=""><a href="/docs/webpack">Webpack</a></li>
      <li class=""><a href="/docs/custom-icons">Custom icons</a></li>
      <li class=""><a href="/docs/avoiding-conflicts">Avoiding conflicts</a></li>
      <li class=""><a href="/docs/rtl">RTL support</a></li>
      <li class=""><a href="/docs/migration">Migration</a></li>
    </ul>
    <ul class="uk-nav uk-nav-default tm-nav uk-margin-top">
      <li class="uk-nav-header">Components</li>
      <li class=""><a href="/docs/accordion">Accordion</a></li>
      <li class=""><a href="/docs/alert">Alert</a></li>
      <li class=""><a href="/docs/align">Align</a></li>
      <li class=""><a href="/docs/animation">Animation</a></li>
      <li class=""><a href="/docs/article">Article</a></li>
      <li class=""><a href="/docs/background">Background</a></li>
      <li class=""><a href="/docs/badge">Badge</a></li>
      <li class=""><a href="/docs/base">Base</a></li>
      <li class=""><a href="/docs/breadcrumb">Breadcrumb</a></li>
      <li class=""><a href="/docs/button">Button</a></li>
      <li class=""><a href="/docs/card">Card</a></li>
      <li class=""><a href="/docs/close">Close</a></li>
      <li class=""><a href="/docs/column">Column</a></li>
      <li class=""><a href="/docs/comment">Comment</a></li>
      <li class=""><a href="/docs/container">Container</a></li>
      <li class=""><a href="/docs/countdown">Countdown</a></li>
      <li class=""><a href="/docs/cover">Cover</a></li>
      <li class=""><a href="/docs/description-list">Description List</a></li>
      <li class=""><a href="/docs/divider">Divider</a></li>
      <li class=""><a href="/docs/dotnav">Dotnav</a></li>
      <li class=""><a href="/docs/drop">Drop</a></li>
      <li class=""><a href="/docs/dropdown">Dropdown</a></li>
      <li class=""><a href="/docs/flex">Flex</a></li>
      <li class=""><a href="/docs/form">Form</a></li>
      <li class=""><a href="/docs/grid">Grid</a></li>
      <li class=""><a href="/docs/grid-parallax">Grid Parallax</a></li>
      <li class=""><a href="/docs/heading">Heading</a></li>
      <li class=""><a href="/docs/icon">Icon</a></li>
      <li class=""><a href="/docs/iconnav">Iconnav</a></li>
      <li class=""><a href="/docs/inverse">Inverse</a></li>
      <li class=""><a href="/docs/label">Label</a></li>
      <li class=""><a href="/docs/lightbox">Lightbox</a></li>
      <li class=""><a href="/docs/link">Link</a></li>
      <li class=""><a href="/docs/list">List</a></li>
      <li class=""><a href="/docs/margin">Margin</a></li>
      <li class=""><a href="/docs/marker">Marker</a></li>
      <li class=""><a href="/docs/modal">Modal</a></li>
      <li class=""><a href="/docs/nav">Nav</a></li>
      <li class=""><a href="/docs/navbar">Navbar</a></li>
      <li class="router-link-exact-active uk-active"><a href="/docs/notification">Notification</a></li>
      <li class=""><a href="/docs/offcanvas">Off-canvas</a></li>
      <li class=""><a href="/docs/overlay">Overlay</a></li>
      <li class=""><a href="/docs/padding">Padding</a></li>
      <li class=""><a href="/docs/pagination">Pagination</a></li>
      <li class=""><a href="/docs/parallax">Parallax</a></li>
      <li class=""><a href="/docs/placeholder">Placeholder</a></li>
      <li class=""><a href="/docs/position">Position</a></li>
      <li class=""><a href="/docs/print">Print</a></li>
      <li class=""><a href="/docs/progress">Progress</a></li>
      <li class=""><a href="/docs/scroll">Scroll</a></li>
      <li class=""><a href="/docs/scrollspy">Scrollspy</a></li>
      <li class=""><a href="/docs/search">Search</a></li>
      <li class=""><a href="/docs/section">Section</a></li>
      <li class=""><a href="/docs/slidenav">Slidenav</a></li>
      <li class=""><a href="/docs/sortable">Sortable</a></li>
      <li class=""><a href="/docs/spinner">Spinner</a></li>
      <li class=""><a href="/docs/sticky">Sticky</a></li>
      <li class=""><a href="/docs/subnav">Subnav</a></li>
      <li class=""><a href="/docs/switcher">Switcher</a></li>
      <li class=""><a href="/docs/tab">Tab</a></li>
      <li class=""><a href="/docs/table">Table</a></li>
      <li class=""><a href="/docs/text">Text</a></li>
      <li class=""><a href="/docs/tile">Tile</a></li>
      <li class=""><a href="/docs/toggle">Toggle</a></li>
      <li class=""><a href="/docs/tooltip">Tooltip</a></li>
      <li class=""><a href="/docs/totop">Totop</a></li>
      <li class=""><a href="/docs/transition">Transition</a></li>
      <li class=""><a href="/docs/upload">Upload</a></li>
      <li class=""><a href="/docs/utility">Utility</a></li>
      <li class=""><a href="/docs/visibility">Visibility</a></li>
      <li class=""><a href="/docs/width">Width</a></li>
    </ul>
  </div>
  <div class="tm-main uk-section uk-section-default">
    <div class="uk-container uk-container-small uk-position-relative">



      <div class="tm-sidebar-right uk-visible@l">
        <div uk-sticky="offset: 160" class="uk-sticky uk-active uk-sticky-fixed" style="position: fixed; top: 160px; width: 200px;">
          <ul uk-scrollspy-nav="closest: li; scroll: true; offset: 100" class="uk-nav uk-nav-default tm-nav uk-nav-parent-icon">
            <li class="uk-active"><a href="#usage">Usage</a></li>
            <li><a href="#html-message">HTML message</a></li>
            <li><a href="#position">Position</a></li>
            <li><a href="#style">Style</a></li>
            <li><a href="#close-all">Close all</a></li>
            <li><a href="#component-options">Component options</a></li>
            <li><a href="#javascript">JavaScript</a></li>
            <li class="uk-nav-divider"></li>
            <li>
              <a href="../assets/uikit/tests/notification.html" target="_blank">
                <span uk-icon="icon: push" class="uk-margin-small-right uk-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" ratio="1"> <polygon points="12.15,4 9.5,1.4 6.85,4 6.15,3.3 9.5,0 12.85,3.3"></polygon> <line fill="none" stroke="#000" x1="9.5" y1="10" x2="9.5" y2="1"></line> <polyline fill="none" stroke="#000" points="6 5.5 3.5 5.5 3.5 18.5 15.5 18.5 15.5 5.5 13 5.5"></polyline></svg></span>
                <span class="uk-text-middle">Open test</span>
              </a>
            </li>
            <li>
              <a href="https://github.com/uikit/uikit/issues" target="_blank">
                <span uk-icon="icon: warning" class="uk-margin-small-right uk-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" ratio="1"> <circle cx="10" cy="14" r="1"></circle> <circle fill="none" stroke="#000" stroke-width="1.1" cx="10" cy="10" r="9"></circle> <path d="M10.97,7.72 C10.85,9.54 10.56,11.29 10.56,11.29 C10.51,11.87 10.27,12 9.99,12 C9.69,12 9.49,11.87 9.43,11.29 C9.43,11.29 9.16,9.54 9.03,7.72 C8.96,6.54 9.03,6 9.03,6 C9.03,5.45 9.46,5.02 9.99,5 C10.53,5.01 10.97,5.44 10.97,6 C10.97,6 11.04,6.54 10.97,7.72 L10.97,7.72 Z"></path></svg></span>
                <span class="uk-text-middle">Report issue</span>
              </a>
            </li>
            <li>
              <a href="https://gitter.im/uikit/uikit" target="_blank">
                <span uk-icon="icon: commenting" class="uk-margin-small-right uk-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" ratio="1"> <polygon fill="none" stroke="#000" points="1.5,1.5 18.5,1.5 18.5,13.5 10.5,13.5 6.5,17.5 6.5,13.5 1.5,13.5"></polygon> <circle cx="10" cy="8" r="1"></circle> <circle cx="6" cy="8" r="1"></circle> <circle cx="14" cy="8" r="1"></circle></svg></span>
                <span class="uk-text-middle">Get help</span>
              </a>
            </li>
            <li>
              <a href="https://github.com/uikit/uikit-site/tree/develop/docs/pages/notification.md" target="_blank">
                <span uk-icon="icon: pencil" class="uk-margin-small-right uk-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" ratio="1"> <path fill="none" stroke="#000" d="M17.25,6.01 L7.12,16.1 L3.82,17.2 L5.02,13.9 L15.12,3.88 C15.71,3.29 16.66,3.29 17.25,3.88 C17.83,4.47 17.83,5.42 17.25,6.01 L17.25,6.01 Z"></path> <path fill="none" stroke="#000" d="M15.98,7.268 L13.851,5.148"></path></svg></span>
                <span class="uk-text-middle">Edit this page</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="uk-sticky-placeholder" style="height: 105px; margin: 0px;"></div>
      </div>
    </div>
  </div>
  <div id="offcanvas" uk-offcanvas="mode: push; overlay: true" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
      <div class="uk-panel">
        <ul class="uk-nav uk-nav-default tm-nav">
          <li class="uk-nav-header">General</li>
          <li><a href="../index">Home</a></li>
          <li><a href="../pro">Pro</a></li>
          <li><a href="../changelog">Changelog</a></li>
          <li><a href="../download">Download</a></li>
        </ul>
        <ul class="uk-nav uk-nav-default tm-nav uk-margin-top">
          <li class="uk-nav-header">Getting started</li>
          <li exact=""><a href="./introduction">Introduction</a></li>
          <li exact=""><a href="./installation">Installation</a></li>
          <li exact=""><a href="./less">Less</a></li>
          <li exact=""><a href="./sass">Sass</a></li>
          <li exact=""><a href="./javascript">JavaScript</a></li>
          <li exact=""><a href="./webpack">Webpack</a></li>
          <li exact=""><a href="./custom-icons">Custom icons</a></li>
          <li exact=""><a href="./avoiding-conflicts">Avoiding conflicts</a></li>
          <li exact=""><a href="./rtl">RTL support</a></li>
          <li exact=""><a href="./migration">Migration</a></li>
        </ul>
        <ul class="uk-nav uk-nav-default tm-nav uk-margin-top">
          <li class="uk-nav-header">Components</li>
          <li exact=""><a href="./accordion">Accordion</a></li>
          <li exact=""><a href="./alert">Alert</a></li>
          <li exact=""><a href="./align">Align</a></li>
          <li exact=""><a href="./animation">Animation</a></li>
          <li exact=""><a href="./article">Article</a></li>
          <li exact=""><a href="./background">Background</a></li>
          <li exact=""><a href="./badge">Badge</a></li>
          <li exact=""><a href="./base">Base</a></li>
          <li exact=""><a href="./breadcrumb">Breadcrumb</a></li>
          <li exact=""><a href="./button">Button</a></li>
          <li exact=""><a href="./card">Card</a></li>
          <li exact=""><a href="./close">Close</a></li>
          <li exact=""><a href="./column">Column</a></li>
          <li exact=""><a href="./comment">Comment</a></li>
          <li exact=""><a href="./container">Container</a></li>
          <li exact=""><a href="./countdown">Countdown</a></li>
          <li exact=""><a href="./cover">Cover</a></li>
          <li exact=""><a href="./description-list">Description List</a></li>
          <li exact=""><a href="./divider">Divider</a></li>
          <li exact=""><a href="./dotnav">Dotnav</a></li>
          <li exact=""><a href="./drop">Drop</a></li>
          <li exact=""><a href="./dropdown">Dropdown</a></li>
          <li exact=""><a href="./flex">Flex</a></li>
          <li exact=""><a href="./form">Form</a></li>
          <li exact=""><a href="./grid">Grid</a></li>
          <li exact=""><a href="./grid-parallax">Grid Parallax</a></li>
          <li exact=""><a href="./heading">Heading</a></li>
          <li exact=""><a href="./icon">Icon</a></li>
          <li exact=""><a href="./iconnav">Iconnav</a></li>
          <li exact=""><a href="./inverse">Inverse</a></li>
          <li exact=""><a href="./label">Label</a></li>
          <li exact=""><a href="./lightbox">Lightbox</a></li>
          <li exact=""><a href="./link">Link</a></li>
          <li exact=""><a href="./list">List</a></li>
          <li exact=""><a href="./margin">Margin</a></li>
          <li exact=""><a href="./marker">Marker</a></li>
          <li exact=""><a href="./modal">Modal</a></li>
          <li exact=""><a href="./nav">Nav</a></li>
          <li exact=""><a href="./navbar">Navbar</a></li>
          <li exact=""><a href="./notification">Notification</a></li>
          <li exact=""><a href="./offcanvas">Off-canvas</a></li>
          <li exact=""><a href="./overlay">Overlay</a></li>
          <li exact=""><a href="./padding">Padding</a></li>
          <li exact=""><a href="./pagination">Pagination</a></li>
          <li exact=""><a href="./parallax">Parallax</a></li>
          <li exact=""><a href="./placeholder">Placeholder</a></li>
          <li exact=""><a href="./position">Position</a></li>
          <li exact=""><a href="./print">Print</a></li>
          <li exact=""><a href="./progress">Progress</a></li>
          <li exact=""><a href="./scroll">Scroll</a></li>
          <li exact=""><a href="./scrollspy">Scrollspy</a></li>
          <li exact=""><a href="./search">Search</a></li>
          <li exact=""><a href="./section">Section</a></li>
          <li exact=""><a href="./slidenav">Slidenav</a></li>
          <li exact=""><a href="./sortable">Sortable</a></li>
          <li exact=""><a href="./spinner">Spinner</a></li>
          <li exact=""><a href="./sticky">Sticky</a></li>
          <li exact=""><a href="./subnav">Subnav</a></li>
          <li exact=""><a href="./switcher">Switcher</a></li>
          <li exact=""><a href="./tab">Tab</a></li>
          <li exact=""><a href="./table">Table</a></li>
          <li exact=""><a href="./text">Text</a></li>
          <li exact=""><a href="./tile">Tile</a></li>
          <li exact=""><a href="./toggle">Toggle</a></li>
          <li exact=""><a href="./tooltip">Tooltip</a></li>
          <li exact=""><a href="./totop">Totop</a></li>
          <li exact=""><a href="./transition">Transition</a></li>
          <li exact=""><a href="./upload">Upload</a></li>
          <li exact=""><a href="./utility">Utility</a></li>
          <li exact=""><a href="./visibility">Visibility</a></li>
          <li exact=""><a href="./width">Width</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
