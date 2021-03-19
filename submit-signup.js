// Pops up the name to the screen
function popUpInput() {
    let name = document.getElementById("txf_name").value;
    alert(name);
}

function push() {
    // Get variables
    let name = document.getElementById("txf_name").value;
    let email = document.getElementById("txf_email").value;

    var myObj = { name: "John", age: 31, city: "New York" };
    var myJSON = JSON.stringify(myObj);
    window.location = "demo_json.php?x=" + myJSON;
    
    alert("Done!")
}