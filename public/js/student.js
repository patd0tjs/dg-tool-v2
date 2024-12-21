const FORMS = ["profile", "confirm"];
var level;
// not efficient. finding alternative to this
FORMS.forEach((e) => {
    $("." + e + "-field").keyup(function () {
        fieldValidator(e);
    });

    $("." + e + "-field").change(function () {
        fieldValidator(e);
    });
});

// compute student age based on bday
function getAge() {
    let today = new Date();
    let birthDate = new Date($("#student_bday").val());
    let age = today.getFullYear() - birthDate.getFullYear();
    let m = today.getMonth() - birthDate.getMonth();

    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    $("#student_age").val(age);
}

function changeForms(current, next) {
    $("#" + current + "_form").hide();
    $("#" + current + "_nav_label").addClass("text-secondary");
    $("#" + current + "_nav_circle").removeClass("text-primary");

    $("#" + next + "_form").show();
    $("#" + next + "_nav_label").removeClass("text-secondary");
    $("#" + next + "_nav_circle").addClass("text-primary");

    if (current == "profile") {
        confirmProfileDetails();
    }
}

// disable next button for incomplete forms
function fieldValidator(page) {
    let next = $("#" + page + "_next");
    const inputs = $("." + page + "-field");

    const required_fields = [];

    for (let i = 0; i < inputs.length; i++) {
        required_fields.push(inputs[i].value);
    }

    if (required_fields.includes("")) {
        next.prop("disabled", true);
    } else {
        next.prop("disabled", false);
    }
}

function confirmProfileDetails() {
    const L_NAME = $("input[name=l_name]").val();
    const F_NAME = $("input[name=f_name]").val();
    const M_NAME = $("input[name=m_name]").val();
    const SUFFIX = $("input[name=suffix]").val();
    const BDAY = $("input[name=bday]").val();
    const AGE = $("#student_age").val();
    let gender = $("#student_gender").val();

    let religion = $("input[name=religion]").val();
    let lrn = $("input[name=lrn]").val();
    let address = $("input[name=address]").val();
    let landline = $("input[name=landline]").val();

    religion = religion != "" ? religion : "N/A";
    lrn = lrn != "" ? lrn : "N/A";
    address = address != "" ? address : "N/A";
    landline = landline != "" ? landline : "N/A";

    const FULL_NAME = [F_NAME, M_NAME, L_NAME, SUFFIX];

    $("#confirm_name").text(FULL_NAME.join(" "));
    $("#confirm_address").text(address);
    $("#confirm_lrn").text(lrn);
    $("#confirm_bday").text(BDAY);
    $("#confirm_age").text(AGE);
    $("#confirm_gender").text(gender.charAt(0).toUpperCase() + gender.slice(1));
    $("#confirm_religion").text(religion);
    $("#confirm_landline").text(landline);
}
