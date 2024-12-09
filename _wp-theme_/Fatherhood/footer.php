  <footer class="border-t-2 border-gray-500 bg-black">
    <ul class="flex flex-wrap justify-center items-center xl:gap-c-2 lg:gap-c-89 md:gap-c-90 gap-c-91 xl:py-c-11 lg:py-c-94 md:py-c-95 py-c-96 xl:px-c-93 lg:px-c-132 md:px-c-152 px-c-153">
      <?php
        $params= array(
          'orderby' => 't.post_title DESC',
          'limit' => 0,
        );
        $media_pod= pods( 'fatherhood_content', $params );
        $items= $media_pod->data();
        foreach( $items as $item ){
          $social_media_group = pods_field( 'fatherhood_content', $item->ID, 'social_media' );
          foreach( $social_media_group as $social_media){
            echo '<li>
              <a target="_blank" href="' . $social_media['link'] . '">'
              . $social_media['icon'] .
              '</a>
            </li>';
          }
        }
      ?>
    </ul>

    <div class="flex shadow-c w-3/4 mx-auto md:h-unset h-c-151">
      <div id="mlb2-377793" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-377793 flex-1 text-white bg-c-brown-6 text-c-45 tracking-c-48 [word-spacing:calc(.1875vmin_+_.09375vmax_+_1px)] relative">
        <div class="ml-form-embedBody ml-form-embedBodyDefault row-form h-full flex flex-col justify-center items-center gap-c-146">
          <div class="ml-form-embedContent uppercase flex items-center gap-c-145 w-c-116">
            <div class="flex-1 h-px bg-gradient-to-l from-c-brown-9 to-transparent"></div>
            <div class="italic text-shadow-c-2">
              <?php echo pods( 'fatherhood_content' )->find()->display( 'email_form_heading' ); ?>
            </div>
            <div class="flex-1 h-px bg-gradient-to-r from-c-brown-9 to-transparent"></div>
          </div>
          <form class="ml-block-form flex flex-col gap-c-147 w-4/5" action="https://assets.mailerlite.com/jsonp/36494/forms/53720200949793862/subscribe" data-code="" method="post" target="_blank">
            <input aria-label="email" aria-required="true" type="email" class="form-control placeholder-white caret-white py-c-150 border-c-brown border-b bg-transparent focus:outline-none focus:border-c-gray-9 transition-colors duration-300 text-center text-c-46 tracking-c-49 [word-spacing:inherit]" data-inputmask="" name="fields[email]" placeholder="<?php echo pods( 'fatherhood_content' )->find()->display( 'email_form_placeholder' ); ?>" autocomplete="email">
            <input type="hidden" name="ml-submit" value="1">
            <button type="submit" class="primary text-c-brown-4 py-c-150 border-c-brown border text-c-46 tracking-c-49 [word-spacing:inherit] hover:border-c-gray-9 hover:text-white transition-colors duration-300">
              <?php echo pods( 'fatherhood_content' )->find()->display( 'email_form_button_text' ); ?>
            </button>
            <input type="hidden" name="anticsrf" value="true">
          </form>
        </div>
        <div class="ml-form-successBody row-success absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 whitespace-nowrap" style="display: none">
          <?php echo pods( 'fatherhood_content' )->find()->display( 'email_form_success_message' ); ?>
        </div>
      </div>
      <div class="w-1/3 relative md:block hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-c-brown-6 to-transparent z-10"></div>
        <img class="w-full brightness-150 hue-rotate-c" src="<?php echo pods( 'fatherhood_content' )->find()->display( 'email_form_image' ); ?>" alt="<?php $image_id = attachment_url_to_postid( pods( 'fatherhood_content' )->find()->display( 'email_form_image' ) );$image_alt_text= get_post_meta($image_id, '_wp_attachment_image_alt', true);echo $image_alt_text;?>">
      </div>
    </div>

    <div class="flex flex-col items-center xl:text-c-32 lg:text-c-35 md:text-c-36 text-c-33 xl:gap-c-92 lg:gap-c-97 md:gap-c-98 gap-c-99 xl:py-c-11 lg:py-c-94 md:py-c-95 py-c-96 [border-image:linear-gradient(to_right,rgba(0,0,0,0),#272727,rgba(0,0,0,0))_1_0%] border-b border-solid">
      <div class="xl:tracking-c-26 lg:tracking-c-27 md:tracking-c-28 tracking-c-29 xl:[word-spacing:.125vw] lg:[word-spacing:.0755rem] md:[word-spacing:.07323rem] [word-spacing:.07085rem]">
        <?php echo pods( 'fatherhood_content' )->find()->display( 'contact_us_heading' ); ?>
      </div>
      <a href="mailto: <?php echo pods( 'fatherhood_content' )->find()->display( 'contact_us_email_address' ); ?>" class="xl:tracking-c-25 lg:tracking-c-30 md:tracking-c-31 tracking-c-32 underline decoration-dotted decoration-c-gray-5 underline-offset-1">
        <?php echo pods( 'fatherhood_content' )->find()->display( 'contact_us_email_address' ); ?>
      </a>
    </div>

    <div class="text-center text-c-gray-3 xl:py-c-2 lg:py-c-100 md:py-c-34 py-c-37 xl:text-c-6 lg:text-c-37 md:text-c-38 text-c-13 xl:tracking-c-33 lg:tracking-c-39 md:tracking-c-40 tracking-c-41 xl:[word-spacing:.05vw] lg:[word-spacing:.03rem] md:[word-spacing:.0275rem] [word-spacing:.0265rem]">
      All Rights Reserved For <a href="http://persisplay.com/" target="_blank" class="underline decoration-dotted decoration-c-gray-5 underline-offset-1">Persis Play</a>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>