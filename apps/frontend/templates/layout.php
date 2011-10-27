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
        <?php if ($sf_user->isAuthenticated()): ?>
        <li>Bienvenido <?php echo $sf_user->getGuardUser()->getName(); ?></li>
        <?php endif; ?>
      </ul>
    </div>

    <header>
<!--      <div id="logo">
        <a href="#">Harinas</a>
      </div>-->
      <div id="header">
        
      </div>
    </header>

    <nav>
      <ul id="nav">
        <li class="i_calculator"><a <?php if($sf_context->getActionName()=='wizard' && $sf_context->getModuleName()=='static') echo "class='active'"; ?>><span>Mezclas</span></a>
          <ul <?php if($sf_context->getActionName()=='wizard' && $sf_context->getModuleName()=='static') echo "style='display:block;'"; ?>>
            <li>
              <a href="<?php echo url_for('static/wizard'); ?>" <?php if($sf_context->getActionName()=='wizard' && $sf_context->getModuleName()=='static') echo "class='active'"; ?>>
                <span>Nueva mezcla</span>
              </a>
            </li>
            
          </ul>
        </li>
        <li class="i_cog_3"><a><span>Configuraci&oacute;n</span></a>
          <ul>
            <li><a href="#"><span>Usuarios</span></a></li>
            <li><a href="#"><span>Par&aacute;metros</span></a></li>
          </ul>
        </li>
      </ul>
    </nav>



    <section id="content">
      <?php echo $sf_content; ?>
    </section>
    <footer>Copyright by <a href="http://www.webdevel.cl" target="_blank">WebDevel.cl</a> - 2011</footer>
  </body>
</html>
