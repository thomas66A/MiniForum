function goBack() {
    window.history.back();
}
var $repond = $("#repond");
var $repondre = $("#repondre");
var $stop = $("#stop");

$repond.click(function(){
    $repondre.css("display", "block");
    
});
$stop.click(function(){
    $repondre.css("display", "none");
});