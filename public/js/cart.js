function getCookie(cookiename)
{
    // Get name followed by anything except a semicolon
    var cookiestring=RegExp(""+cookiename+"[^;]+").exec(document.cookie);
    // Return everything after the equal sign, or an empty string if the cookie name not found
    return decodeURIComponent(!!cookiestring ? cookiestring.toString().replace(/^[^=]+./,"") : "");
}

var ViewModel = function(input) {
    this.Amount = ko.observable(input);
    this.Price = ko.computed(function() {
        // Knockout tracks dependencies automatically. It knows that fullName depends on firstName and lastName, because these get called when evaluating fullName.
        var quantity = this.Amount();
        document.cookie = "in_cart="+quantity;
        return document.cookie ;//parseInt(quantity) * price;
    }, this);
    this.Submit = function() {

        var quantity = this.Amount();
        var exact_cookie = obj+"="+quantity;
        document.cookie = exact_cookie;



    };

}

jQuery.ajax({
    url: "showcart.php",
    type: "POST",
    data: {name: "amit", id:1 },
    dataType: "json",
    beforeSend: function(x) {
        if (x && x.overrideMimeType) {
            x.overrideMimeType("application/j-son;charset=UTF-8");
        }
    },
    success: function(result) {
        console.log('success');
    },

    error: function(error) {
        console.log('fkn error');
    }
});
/*
$.ajax({
    url: 'showcart.php',
    type: 'POST',
    async: false,
    data: {name: "amit"},
    contentType: "application/json",
    dataType: 'json',
    success: function(obj){
        console.log(obj);
        return true;
    },
    complete: function() {},
    error: function(xhr, textStatus, errorThrown) {
        console.log('ajax loading error...');
        console.log(obj);
        return false;
    }
});
*/
console.log(document.cookie);

//document.cookie = "in_cart=7";

var x = document.cookie;
var decoded = decodeURIComponent(document.cookie);
var ca = decoded.split(';');
var cookieValue = getCookie('in_cart');
console.log(cookieValue);

ko.applyBindings(new ViewModel(cookieValue, getCookie('in_cart')));/*ca[ca.length-1]*//*));*/ // This makes Knockout get to work

/*function getCookie(cookiename)
{
    // Get name followed by anything except a semicolon
    var cookiestring=RegExp(""+cookiename+"[^;]+").exec(document.cookie);
    // Return everything after the equal sign, or an empty string if the cookie name not found
    return decodeURIComponent(!!cookiestring ? cookiestring.toString().replace(/^[^=]+./,"") : "");
}

var cookieValue = getCookie('in_cart');

var x = document.cookie;
var decoded = decodeURIComponent(document.cookie);
var ca = decoded.split(';');
// Here's my data model
var ViewModel = function(first, last) {
    this.nColor = ko.observable(first);
    this.nQuantity = ko.observable(last);
    this.Price = ko.computed(function() {
        // Knockout tracks dependencies automatically. It knows that fullName depends on firstName and lastName, because these get called when evaluating fullName.
        var quantity = this.nColor();
        document.cookie = "in_cart="+quantity;
        return x ;//parseInt(quantity) * price;
    }, this);
};

//var quantity = document.getElementsByName("quantity")[0].value;
document.cookie = "in_cart=5";//+quantity;



ko.applyBindings(new ViewModel(cookieValue, getCookie('in_cart')/*ca[ca.length-1]*//*));*/ // This makes Knockout get to work
