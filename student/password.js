
function myFunction() {
var userid = document.getElementById("userid").value;
var password = document.getElementById("password").value;
var confirm = document.getElementById("confirm").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'userid=' + userid + '&password=' + password;
if (userid == '' || password == '' || confirm == '' || confirm !==password '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "ajaxjs.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}