///
//creer un cookies    
$.jCookies({
    name : 'Magic Supremacy',
    value : { card : 'Birds of Paradise', edition : 'M12', rating : '4.5', price : 5}
});
///recuperer cookies
var magic_supremacy = $.jCookies({ get : 'Magic Supremacy' });
    // réponse : { card : 'Birds of Paradise', edition : 'M12', rating : '4.5', price : 5}
 
var password = $.jCookies({ get : 'MS password' }); // (cookie créé par un autre procédé)
    // réponse : false
///supprimer un cookies


var erased_magic_supremacy = $.jCookies({ erase : 'Magic Supremacy' });
// réponse : true

var erased_password = $.jCookies({ erase : 'MS password' });
// réponse : false
///////set et get cookies///
function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}
function getCookie(c_name) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
            return unescape(y);
        }
    }
}
$(document).ready(function () {
    var users = [
        { username: "user 1", status: true },
        { username: "user 3", status: true },
        { username: "user 3", status: false },
        { username: "user 4", status: false }
    ];

    //setCookie
    setCookie("userdetails", JSON.stringify(users), new Date());
    debugger;
    //getCookie
    var userFromCookie = $.parseJSON(getCookie("userdetails"));
})
/*
Cookies can only store strings. Therefore, you need to convert your array of objects into a JSON string.
If you have the JSON library, you can simply use JSON.stringify(people) and store that in the cookie, 
then use $.parseJSON(people) to un-stringify it.
In the end, your code would look like:
*/

var people = [
{ 'name' : 'Abel', 'age' : 1 },
{ 'name' : 'Bella', 'age' : 2 },
{ 'name' : 'Chad', 'age' : 3 },
];
$.cookie("people", JSON.stringify(people));

// later on...

var people = $.parseJSON($.cookie("people"))
people.push(
 { 'name' : 'Daniel', 'age' : 4 }
);
$.cookie("people", JSON.stringify(people));