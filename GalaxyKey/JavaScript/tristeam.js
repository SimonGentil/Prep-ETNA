var button = document.getElementById("tri1");

button.onclick = trier;

function    trier()
{
$(".image2").before($(".image3"));
$(".image3").before($(".image4"));
$(".image2").before($(".image3"));
}