
let mix = require("laravel-mix");

mix
  .setPublicPath("wp-content/themes/nozomi")

  .options({
    processCssUrls: false,
  })

  .js("wp-content/themes/nozomi/assets/js/front.js",
   "wp-content/themes/nozomi/")
  .sass(
    "wp-content/themes/nozomi/assets/scss/front.scss",
    "wp-content/themes/nozomi/"
  )

  
  .disableNotifications();
mix.version();
