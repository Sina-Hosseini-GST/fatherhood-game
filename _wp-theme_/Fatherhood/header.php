<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="It's a tale of SACRIFICE, as an ANTI-WAR story, to see wars from the eyes of a FATHER">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo pods( 'fatherhood_content' )->find()->display( 'browser_title' ); ?></title>
  <?php wp_head(); ?>
  <!-- Designed and developed by Sina Hosseini -->
</head>
<body class="text-white font-roboto-thin">
  <div id="donate-cnt">
  <div id="donate-txt">
    <?php echo pods( 'fatherhood_content' )->find()->display( 'donate_text' ); ?>
  </div>
  <div id="donate-button-container">
    <div id="donate-button"></div>
    <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
   	<script>
      PayPal.Donation.Button({
      env:'production',
      hosted_button_id:'Z7LVKBMR4XZZG',
      image: {
        src:'https://www.paypalobjects.com/en_US/PL/i/btn/btn_donateCC_LG.gif',
        alt:'Donate with PayPal button',
        title:'PayPal - The safer, easier way to pay online!',
      }
    }).render('#donate-button');
   </script>
  </div>
  </div>
  <a target="_blank" href="<?php echo pods( 'fatherhood_content' )->find()->display( 'demo_box_link' ); ?>" class="bg-c-blue-5 hover:bg-c-blue-4 transition-colors duration-200 group z-20 flex justify-center items-center rounded shadow-c-2 xl:w-c-93 xl:h-c-156 lg:w-c-158 lg:h-c-159 md:w-c-161 md:h-c-160 w-c-164 h-c-163 xl:gap-c-3 lg:gap-c-157 md:gap-c-76 gap-c-162 fixed xl:right-c xl:bottom-c lg:right-c-87 lg:bottom-c-87 md:right-c-29 md:bottom-c-29 right-c-88 bottom-c-88">
    <div>
      <?php echo pods( 'fatherhood_content' )->find()->display( 'demo_box_icon' ); ?>
    </div>
    <div class="uppercase xl:text-c-32 lg:text-c-35 md:text-c-36 text-c-33 xl:tracking-c-26 lg:tracking-c-27 md:tracking-c-28 tracking-c-29 xl:[word-spacing:.125vw] lg:[word-spacing:.0755rem] md:[word-spacing:.07323rem] [word-spacing:.07085rem]">
      <?php echo pods( 'fatherhood_content' )->find()->display( 'demo_box_text' ); ?>
    </div>
  </a>

	<a id="kickstarter-section" href="https://kickstarter.com/projects/persisplay/fatherhood" target="_blank" style="background-image: url('<?php echo pods( 'fatherhood_content' )->find()->display( 'kickstarter_background_image' ); ?>')">
	  <img alt="kickstarter" id="kickstarter-image" src="<?php echo pods( 'fatherhood_content' )->find()->display( 'kickstarter_image' ); ?>">
	<div id="kickstarter-text">
		<span>
			<?php echo pods( 'fatherhood_content' )->find()->display( 'kickstarter_left_text' ); ?>
		</span>
		<img alt="kickstarter" alt="kickstarter" src="<?php echo pods( 'fatherhood_content' )->find()->display( 'kickstarter_middle_logotype' ); ?>" >
		<span>
			<?php echo pods( 'fatherhood_content' )->find()->display( 'kickstarter_right_text' ); ?>
		</span>		
	</div>
  </a>
	
	  <div class="border-y-2 border-gray-500 bg-black xl:py-c-9 xl:px-c-43 lg:py-c-44 lg:px-c-45 md:py-c-28 md:px-c-46 py-c-47 px-8">
    <p class="text-center xl:text-c-4 xl:leading-c-2 xl:tracking-c-8 xl:[word-spacing:.0625vw] lg:text-c-19 lg:leading-c-14 lg:tracking-c-12 lg:[word-spacing:.036rem] md:text-c-20 md:leading-c-15 md:tracking-c-13 md:[word-spacing:.034rem] text-c-21 leading-c-16 tracking-c-14 [word-spacing:.0335rem] uppercase">
      <?php echo pods( 'fatherhood_content' )->find()->display( 'important_text_-_between_headers' ); ?>
		  </p>
  </div>
	
  <div class="h-screen bg-cover bg-center bg-no-repeat xl:pt-c-14 pt-14 flex flex-col items-center" style="background-image: url(' <?php echo pods( 'fatherhood_content' )->find()->display( 'header_background_image' ); ?> ');">
    <div class="xl:w-1/2 lg:w-c-16 md:w-80 w-c-30">
      <img class="w-full" src="<?php echo pods( 'fatherhood_content' )->find()->display( 'logotype' ); ?>" alt="LogoType Image">
    </div>

    <div class="flex justify-center items-center flex-1 text-center xl:w-1/2 lg:w-c-16 md:w-80 w-c-30 text-shadow-c xl:gap-c-40 xl:text-c xl:[word-spacing:.25vw] xl:tracking-c lg:gap-c-41 lg:text-c-11 lg:[word-spacing:.14rem] lg:tracking-c-9 md:gap-c-42 md:text-c-16 md:[word-spacing:.12rem] md:tracking-c-10 gap-1 text-c-18 [word-spacing:.1rem] tracking-c-11">
      <a target="_blank" class="xl:h-c-74 lg:h-16 md:h-c-165 h-c-166 xl:gap-c lg:gap-4 md:gap-c-168 gap-c-76 xl:px-c-73 lg:px-8 md:px-c-167 px-c-29 rounded flex items-center bg-c-black-2 hover:bg-black transition-colors duration-200" href="<?php echo pods( 'fatherhood_content' )->find()->display( 'steam_link' ); ?>">
        <div>
          <?php echo pods( 'fatherhood_content' )->find()->display( 'steam_icon' ); ?>
        </div>
        <div class="whitespace-nowrap xl:text-c-47 lg:text-c-48 md:text-c-49 text-c-13 xl:tracking-c-25 lg:tracking-c-50 md:tracking-c-51 tracking-c-52 xl:[word-spacing:.25vw] lg:[word-spacing:.125rem] md:[word-spacing:.075rem] [word-spacing:.063rem]">
          <?php echo pods( 'fatherhood_content' )->find()->display( 'steam_text' ); ?>
        </div>
      </a>
    </div>
  </div>