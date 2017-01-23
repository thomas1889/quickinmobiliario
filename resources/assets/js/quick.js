//CHECK NEWSLETTER

  var checkNews = $('#checkNews');
  var newsletter = $('#newsletter');  
  
  if (checkNews=="on") {
    newsletter.removeAttr("value");
    newsletter.attr("value", "Si");
} else {
    newsletter.removeAttr("value");
    newsletter.attr("value", "No");
}
//CHECK NEWSLETTER

