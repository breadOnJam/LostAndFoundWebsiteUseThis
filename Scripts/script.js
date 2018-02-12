
  function show(num) {
    var onScreen;
    if (num == 0) {
      onScreen = document.getElementById('adopt');
    } else if (num == 1) {
      onScreen = document.getElementById('lost');
    } else if (num == 2) {
      onScreen = document.getElementById('found');
    }
    if (onScreen.style.display == "block") {
      onScreen.style.display = "none";
    } else {
      onScreen.style.display = "block";
    }
  }
