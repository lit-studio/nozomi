import $ from "jquery";
window.jQuery = $;
window.$ = $;
window.$ = window.jQuery;

import globalScripts from "./globalScripts";
import home from "./pages/p-home";
import page from "./pages/p-page";
import about from "./pages/p-about";
import service from "./pages/p-service";

(function ($) {
  globalScripts();

  console.log('nozomi site');
  if (window.nozomiData.page === 'page') page();
  if (window.nozomiData.page === 'home') home();
  if (window.nozomiData.page === 'about') about();
}(jQuery))

