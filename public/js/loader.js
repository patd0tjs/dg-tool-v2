$(document).ready(function () {
    $("form").submit(function () {
        $("#loader_modal").modal("show");
    });
    $("a").click(function () {
        $("#loader_modal").modal("show");
    });
});

// reload entire page when pressing back button to avoid being stuck a the loading modal
window.addEventListener("pageshow", function (event) {
    var historyTraversal =
        event.persisted ||
        (typeof window.performance != "undefined" &&
            window.performance.navigation.type === 2);
    if (historyTraversal) {
        window.location.reload();
    }
});

// manual trigger for loader popup
function openLoader() {
    $("#loader_modal").modal("show");
}
