jQuery(document).ready(function($) {
  // update Source and Authors links in footer
  var src = $('.printfooter a').attr('href');
  if (src) {
    $('#WEsource').attr('href', src);
    src += ((src.indexOf('?') === -1) ? '?' : '&') + 'action=history';
    $('#WEauthors').attr('href', src);
  }
});
