<html>
    <head>
        <title>{$pageTitle}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
        <link rel="stylesheet" href="/{$templateWebPath}css/owl.carousel.min.css">
        <link rel="stylesheet" href="/{$templateWebPath}css/slick.css">
        <link rel="stylesheet" href="/{$templateWebPath}css/style.css" type="text/css"/>
    </head>
    <body>
        {include file='nav.tpl'} 
        
        
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">SEARCH HERE</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <form method="get" class="searchform" action="/search" role="search">
                            <input type="hidden" name="type" value="product">
                            <input type="text" name="q" class="form-control control-search">
                            <span class="input-group-btn">
                              <button class="btn btn-default button_search" type="button"><i data-toggle="dropdown" class="fa fa-search"></i></button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
  {include file='user-menu.tpl'} 
  
        <div class="wrappage">
            <header id="header" class="header-v5  home-simple">
            <div class="topbar">
                <div class="container container-40">
                    <div class="topbar-left " style="margin-top: 15px;">
                        <div class="logo">
                            <a href="/" title="home-logo"><img src="/{$templateWebPath}img/cosre.png" alt="logo" class="img-reponsive"></a>
                        </div>
                        <!--end topbar-option-->
                    </div>
                    <!--end topbar-left-->
                    <div class="topbar-right">
                        <div class="topbar-option">
                            <div class="topbar-search">
                                <div class="search-popup dropdown" data-toggle="modal" data-target="#myModal">
                                    <a href="#"><i class="icon-magnifier f-15"></i></a>
                                </div>
                            </div>
                            <div class="topbar-account">
                                <a href="#"><i class="icon-user f-15"></i></a>
                            </div>
                            <div class="topbar-menu icon-pushmenu js-push-menu">
                                <a href="#">                                 
                                <span class="icon-menu"></span>
                                </a>
                            </div>
                        </div>
                        <!--end topbar-option-->
                    </div>
                    <!--end topbar-right-->
                </div>
            </div>
        </header>
{*<header id="header" class="header-v1 ">
            <div class="topbar hidden-xs hidden-sm">
                <div class="container container-40">
                    <div class="logo hidden-xs hidden-sm">
                        <a href="/" title="home-logo"><img src="{$templateWebPath}img/cosre.png" alt="logo" class="img-reponsive"></a>
                    </div>
                    <!--end logo-->
                    <div class="topbar-right">
                        <div class="topbar-option">
                             <div class="topbar-account ">
                                <a href="#"><i class="icon-user f-15"></i></a>
                            </div>
                        </div>
                        <!--end topbar-option-->
                    </div>
                    <!--end topbar-right-->
                </div>
            </div>
</header>*}
        


