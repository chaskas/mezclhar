<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <!--    <link rel="shortcut icon" href="/favicon.ico" />-->
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="pageoptions">
      <ul>
        <li><a href="<?php echo url_for('@sf_guard_signout'); ?>">Logout</a></li>
      </ul>
    </div>

    <header>
      <div id="logo">
        <a href="#">Logo Here</a>
      </div>
      <div id="header">

      </div>
    </header>

    <nav>
      <ul id="nav">
        <li class="i_house"><a href="#" class="active"><span>Dashboard</span></a></li>
        <li class="i_book"><a><span>Documentation</span></a>
          <ul>
            <li><a href="sf_guard_signout"><span>Alert Boxes</span></a></li>
            <li><a href="sf_guard_signout"><span>Breadcrumb</span></a></li>
          </ul>
        </li>
        <li class="i_create_write"><a href="sf_guard_signout"><span>Form</span></a></li>
        <li class="i_graph"><a href="sf_guard_signout"><span>Charts</span></a></li>
      </ul>
    </nav>



    <section id="content">
      <?php echo $sf_content; ?>
    </section>
    <footer>Copyright by WebDevel.cl - 2011</footer>
  </body>
</html>
