import $ from "jquery";
window.jQuery = $;
window.$ = $;
window.$ = window.jQuery;

import globalScripts from "./globalScripts";
import home from "./pages/p-home";
import page from "./pages/p-page";
import about from "./pages/p-about";
import blog from "./pages/p-blog";

(function ($) {

  globalScripts();

  console.log('nozomi site');
  if (window.nozomiData.page === 'page') page();
  if (window.nozomiData.page === 'home') home();
  if (window.nozomiData.page === 'about') about();
  if (window.nozomiData.page === 'blog') blog();
}(jQuery))

