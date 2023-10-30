document
    .getElementById("loveForm")
    .addEventListener("submit", function (event) {
        event.preventDefault();
        document.getElementById("result").style.display = "none";

        var name1 = document.getElementById("name1").value;
        var name2 = document.getElementById("name2").value;
        var lovePercentage = calculateLove(name1, name2);
        var progressBar = document.getElementById("progressBar");
        progressBar.style.width = "0%";
        progressBar.setAttribute("aria-valuenow", "0");
        progressBar.style.display = "block";
        var intervalId = setInterval(function () {
            var currentValue = parseInt(progressBar.getAttribute("aria-valuenow"));
            if (currentValue >= lovePercentage) {
                clearInterval(intervalId);
                progressBar.style.display = "none";
                document.getElementById("result").style.display = "block";
                document.getElementById("lovePercentage").innerText =
                    "Love Percentage: " + lovePercentage + "%";
            } else {
                currentValue++;
                progressBar.style.width = currentValue + "%";
                progressBar.setAttribute("aria-valuenow", currentValue);
            }
        }, 20);
    });

function calculateLove(name1, name2) {
    var lovePercentage = Math.floor(Math.random() * (100 - 50 + 1)) + 50;
    return lovePercentage;
}

document
    .getElementById("calculateAgainBtn")
    .addEventListener("click", function (event) {
        event.preventDefault();
        document.getElementById("loveForm").reset();
        document.getElementById("wait").style.display = "none";
        document.getElementById("result").style.display = "none";
    });

function msg() {
    document.getElementById("wait").style.display = "block";
}
