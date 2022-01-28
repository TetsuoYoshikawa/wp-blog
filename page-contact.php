<?php
/*

Template Name:お問い合わせ

*/
?>
<?php get_header(); ?>
<div class="contact">
  <form class="form" method="post">
    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="user_name" />
    </div>
    <div>
      <label for="mail">E-mail:</label>
      <input type="email" id="mail" name="user_mail" />
    </div>
    <div>
      <label for="tel">Tell:</label>
      <input type="tel" id="tel" name="user_name" />
    </div>
    <div>
      <label for="msg">Message:</label>
      <textarea id="msg" name="user_message"></textarea>
    </div>
    <div class="button-submit">
      <button class="button" type="submit">Button</button>
    </div>
  </form>
</div>
<?php get_footer(); ?>
