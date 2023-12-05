document.addEventListener("DOMContentLoaded", function() {
    var timeDifferenceCells = document.getElementsByClassName("time-difference");

    Array.from(timeDifferenceCells).forEach(function(cell) {
        var createdAt = cell.textContent;
        var formattedDifference = moment(createdAt).fromNow();
        cell.textContent = formattedDifference;
    });
});