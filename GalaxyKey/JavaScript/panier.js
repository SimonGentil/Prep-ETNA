var input1 = $('.input1');
var input3 = $('.input2');
var input2 = $('.input3');

input1.click(function(){
var value1 = $('body').find('.tabpanier').find('input').eq(0).val() * 1;
var prix1 = $('body').find('.tabpanier').find('.TTC').eq(0).text().split('€')[0] * 1
var pf1 = value1 * prix1;
var p1 = $('body').find('.tabpanier').find('.TTC').eq(0).text(pf1 + "€ TTC");
});

input2.click(function(){
var value2 = $('body').find('.tabpanier').find('input').eq(1).val() * 1;
var prix2 = $('body').find('.tabpanier').find('.TTC').eq(1).text().split('€')[0] * 1
var pf2 = value2 * prix2;
var p2 = $('body').find('.tabpanier').find('.TTC').eq(1).text(pf2 + "€ TTC");
});

input3.click(function(){
var value3 = $('body').find('.tabpanier').find('input').eq(2).val() * 1;
var prix3 = $('body').find('.tabpanier').find('.TTC').eq(2).text().split('€')[0] * 1
var pf3 = value3 * prix3;
var p3 = $('body').find('.tabpanier').find('.TTC').eq(2).text(pf3 + "€ TTC");
});