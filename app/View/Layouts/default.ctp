<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>
    <?php if ($this->fetch('title_for_layout') != '') echo $this->fetch('title_for_layout') . ' | '; ?>Shunity
  </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <?php echo $this->Html->css('style'); ?>
  <?php echo $this->Html->css('top'); ?>
  <?php echo $this->Html->js('bootstrap.min'); ?>
  <?php echo $this->Html->js('scripts.min'); ?>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
  <div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">


            <!-- sidebar -->
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">

                <ul class="nav">
                <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
              </ul>

                <ul class="nav hidden-xs" id="lg-menu">
                    <li class="active"><a href="/questions/add"><i class="glyphicon glyphicon-plus"></i> 問題追加</a></li>
                    <li><a href="/questions"><i class="glyphicon glyphicon-list"></i> 問題一覧</a></li>
                    <li><a href="/answers"><i class="glyphicon glyphicon-list-alt"></i> 解答一覧</a></li>
                    <li><a href="/offers"><i class="glyphicon glyphicon-user"></i> オファー一覧</a></li>
                </ul>

                <!-- tiny only nav-->
              <ul class="nav visible-xs" id="xs-menu">
                    <li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                    <li><a href="#stories" class="text-center"><i class="glyphicon glyphicon-list"></i></a></li>
                    <li><a href="#" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a></li>
                    <li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li>
                </ul>

            </div>
            <!-- /sidebar -->

            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">

              <?php if (empty($company)) { ?>

              <?php } else { ?>
                <!-- top nav -->
                <div class="navbar navbar-blue navbar-static-top">
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                      </button>
                      <!-- <a href="/" class="navbar-brand logo">Shunity</a> -->
                      <a href="/companies" class="navbar-brand"><b style='color:white;'><img width='25' height='25' src="/images/logo.jpg"> Shunity</b></a>
                      <!-- <a href="/companies" class="navbar-brand"><b style='color:white;'>Shunity</b></a> -->
                    </div>
                    <nav class="collapse navbar-collapse" role="navigation">
                    
                    <ul class="nav navbar-nav">
                      <li>
                        <a href="/companies"><i class="glyphicon glyphicon-home"></i> Home</a>
                      </li>
                      
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <?php echo $company['name']; ?></a>
                        <ul class="dropdown-menu">
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="/companies/logout" class="dropdown-toggle" data-toggle="dropdown">ログアウト</a>
                        <ul class="dropdown-menu">
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                        </ul>
                      </li>
                    </ul>
                    </nav>
                </div>
                <!-- /top nav -->
                <?php } ?>

                <div class="padding">
                    <div class="full col-sm-9">
                      <?php echo $this->Session->flash(); ?>
                      <?php echo $this->fetch('content'); ?>
                    </div>
                </div><!-- /padding -->
            </div>
            <!-- /main -->

        </div>
    </div>
</div>


<!--post modal-->
<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      Update Status
      </div>
      <div class="modal-body">
          <form class="form center-block">
            <div class="form-group">
              <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div>
          <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
            <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
      </div>
      </div>
  </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>
