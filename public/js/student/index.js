// initialize datatable
const GET_ALL_STUDENTS_ENDPOINT = APP_URL + "/api/student/get-all/";

$(document).ready(function () {
    $("#student_tb").DataTable({
        ajax: GET_ALL_STUDENTS_ENDPOINT,
        columns: [
            {
                data: null,
                render: function (data) {
                    return data.lrn != null ? data.lrn : "N/A";
                },
            },
            { data: "name" },
            { data: "level" },
            {
                data: null,
                render: function (data) {
                    const BADGE = new StatusBadge(data.status);
                    return BADGE.generate();
                },
            },
            {
                data: null,
                render: function (data) {
                    const LINK = APP_URL + "/student/profile?id=" + data.id;
                    const BUTTON = new ViewButton(LINK);
                    return BUTTON.createLink();
                },
            },
        ],
    });

    $.ajax({
        url: GET_ALL_STUDENTS_ENDPOINT,
        success: function (res) {
            $("#students_enrolled").text(res.data.length);
        },
    });
});

class ViewButton {
    constructor(link) {
        this.link = link;
    }

    createLink() {
        let button = $("<a>")
            .addClass("pt-0 pb-0 btn btn-primary")
            .text("View")
            .attr("href", this.link)
            .attr("onclick", "openLoader()")
            .css("text-decoration", "none");

        return button.prop("outerHTML");
    }
}

class StatusBadge {
    constructor(status) {
        this.status = status;
    }

    generate() {
        let background, text;

        if (this.status == 1) {
            background = "success";
            text = "Enrolled";
        } else {
            background = "danger";
            text = "Not Enrolled";
        }

        let badge = $("<span>")
            .addClass("badge text-bg-" + background)
            .text(text);

        return badge.prop("outerHTML");
    }
}
