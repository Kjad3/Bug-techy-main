<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rating Pop-up</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<button id="openButton">Rate Product</button>

<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" id="closeButton">&times;</span>
        <h2>Rate Product</h2>
        <div class="rating">
            <input type="radio" name="rating" id="star5" value="5"><label for="star5"></label>
            <input type="radio" name="rating" id="star4" value="4"><label for="star4"></label>
            <input type="radio" name="rating" id="star3" value="3"><label for="star3"></label>
            <input type="radio" name="rating" id="star2" value="2"><label for="star2"></label>
            <input type="radio" name="rating" id="star1" value="1"><label for="star1"></label>
        </div>
        <button id="submitRating">Submit Rating</button>
    </div>
</div>

<script src="script.js"></script>

</body>
</html>