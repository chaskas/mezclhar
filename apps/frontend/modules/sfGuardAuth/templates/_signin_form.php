<?php use_helper('I18N') ?>

<header>
<!--  <div id="logo">
    <a href="<?php echo url_for('@homepage'); ?>">Login</a>
  </div>-->
</header>
<section id="content">
  <form action="<?php echo url_for('@sf_guard_signin') ?>" id="loginform"  method="post">
    <fieldset>
      <section>
        <label for="username">Username</label>
        <div><?php echo $form['username']->render(); ?></div>
      </section>
      <section>
        <label for="password">Password</label>
        <div>
          <?php echo $form['password']->render(); ?>
          <?php $routes = $sf_context->getRouting()->getRoutes() ?>
          <?php if (isset($routes['sf_guard_forgot_password'])): ?>
            <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>
          <?php endif; ?>
          <?php if (isset($routes['sf_guard_register'])): ?>
            &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>
          <?php endif; ?>
        </div>
      </section>
      <section>
        <label for="remember" class="checkbox">Recordarme &nbsp;<?php echo $form['remember']->render(); ?></label>
      </section>
      <section>
        <div><button class="fr submit"><?php echo __('Login', null, 'sf_guard') ?></button></div>
      </section>
    </fieldset>
    <?php echo $form->renderHiddenFields(); ?>
  </form>
</section>