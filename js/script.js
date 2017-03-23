var x = document.getElementById('degree');
var y = document.getElementById('branch');

var z = document.getElementById("name")
var str = z.innerHTML;
function toTitleCase(str)
{
    return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}
