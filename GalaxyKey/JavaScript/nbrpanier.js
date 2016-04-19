
var select = document.getElementById("select");

if($.cookie('nbrproduit') === undefined){
var nb = $('body').find('#valueproduit').text() * 1;
}
else if($.cookie('nbrproduit') !== undefined){
var nb = $.cookie('nbrproduit') * 1;
$('body').find('#valueproduit').text(nb);
}
$.cookie('nbrproduit', nb ,{path: '/'});
    var value = $('body').find('#valueproduit').text(nb);
    var button = $('.button');
    button.click(function(){
        var nbr = select.selectedIndex;
        var option = select.options[nbr].value * 1;
        nb = nb + option;
        var value = $('body').find('#valueproduit').text(nb);
        $.cookie('nbrproduit', nb,{path: '/'});
})