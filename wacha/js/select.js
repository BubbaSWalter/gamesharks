function removeMeister() {
    var x = document.getElementById("meister").selectedIndex;
    var y = document.getElementById("meister").options;
    alert("Removing Meister: " + y[x].text);
}

function removeShark() {
    var x = document.getElementById("shark").selectedIndex;
    var y = document.getElementById("shark").options;
    alert("Removing Shark: " + y[x].text);
}