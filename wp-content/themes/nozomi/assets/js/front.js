import $ from "jquery";
window.jQuery = $;
window.$ = $;
window.$ = window.jQuery;

import globalScripts from "./globalScripts";
import home from "./pages/p-home";
import page from "./pages/p-page";
import about from "./pages/p-about";
import blog from "./pages/p-blog";
import singleBlog from "./pages/p-single-blog";
import portfolio from "./pages/p-portfolio";
import singlePortfolio from "./pages/p-single-portfolio";

(function ($) {

  globalScripts();

  console.log('nozomi site');
  if (window.nozomiData.page === 'page') page();
  if (window.nozomiData.page === 'home') home();
  if (window.nozomiData.page === 'about') about();
  if (window.nozomiData.page === 'blog') blog();
  if (window.nozomiData.page === 'single-blog') singleBlog();
  if (window.nozomiData.page === 'portfolio') portfolio();
  if (window.nozomiData.page === 'single-portfolio') singlePortfolio();


}(jQuery))

