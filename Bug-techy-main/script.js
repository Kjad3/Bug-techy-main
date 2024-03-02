document.getElementById("openButton").addEventListener("click", function() {
    document.getElementById("popup").style.display = "block";
});

document.getElementById("closeButton").addEventListener("click", function() {
    document.getElementById("popup").style.display = "none";
});

document.getElementById("submitRating").addEventListener("click", function() {
    // Here you can add JavaScript code to submit the rating
    alert("Rating submitted!"); // For demonstration purposes, shows an alert
    document.getElementById("popup").style.display = "none";
});