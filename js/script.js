$(document).ready(function() {
      $('.parallax').parallax();
});

 $(document).one("scroll", function() {
    // fill contact info here
    });

$("#askeleetlista").click(function() {
	$("#click-here-container").hide();
});

var rakennaPosti = function(username2, username1, domain2, domain1) {
  var posti = username1+username2+"@"+domain1+domain2;
  return posti;
}

var rakennaPuh = function(osa4, osa3, osa2, osa1) {
  var puh = osa1 + osa2 + osa3 + osa4;
  return puh;
}