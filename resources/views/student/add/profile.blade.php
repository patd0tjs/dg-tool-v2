<h4 class="fw-bold mb-3">Student Profile</h4>
<i class="text-danger">All fields with * are required.</i>
<div class="row mb-3 mt-3">
    
    <div class="col-lg">
        <label class="">Last Name <i class="text-danger">*</i></label>
        <input type="text" class="form-control profile-field" name="l_name">
    </div>
    <div class="col-lg-4">
        <label class="">First Name <i class="text-danger">*</i></label>
        <input type="text" class="form-control profile-field" name="f_name">
    </div>
    <div class="col-lg">
        <label class="">Middle Name <i class="text-danger">*</i></label>
        <input type="text" class="form-control profile_field" name="m_name">
    </div>
    <div class="col-lg-2">
        <label class="">Suffix</label>
        <input type="text" class="form-control" name="suffix">
    </div>
</div>
<div class="row mb-5">
    <div class="col-lg-3">
        <label class="">Birthday <i class="text-danger">*</i></label>
        <input type="date" class="form-control profile-field" name="bday" id="student_bday" max="{{ date('Y-m-d') }}" onchange="getAge()">
    </div>
    <div class="col-lg-2">
        <label class="">Age</label>
        <input type="number" class="form-control text-center" id="student_age" readonly>
    </div>
    <div class="col-lg">
        <label class="">Religion</label>
        <input type="text" class="form-control" id="student_religion" name="religion">
    </div>
    <div class="col-lg-3">
        <label class="">Gender <i class="text-danger">*</i></label>
        <select name="gender" class="form-control profile-field" id="student_gender" onchange="getAge()">
            <option value="" hidden selected disabled></option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
</div>
<div class="row mb-3">
    <div class="col-lg">
        <label class="">LRN</label>
        <input type="text" class="form-control" name="lrn">
    </div>
    <div class="col-lg-5">
        <label class="">Grade Level <i class="text-danger">*</i></label>
        <select name="level_id" class="form-control profile-field" id="level_id" onchange="saveLevelLabel()">
            <option value="" selected hidden disabled></option>
                @foreach ($levels as $level)
                    <option value="{{ $level->id }}">{{ $level->name }}</option>
                @endforeach
        </select>
    </div>
</div>
<div class="row mb-5">
    <div class="col-lg">
        <label class="">Address</label>
        <input type="text" class="form-control" name="address">
    </div>
    <div class="col-lg">
        <label class="">Landline</label>
        <input type="text" class="form-control" name="landline">
    </div>
</div>
<div class="d-flex flex-row-reverse">
    <button type="button" class="btn btn-primary fw-bold m-1" id="profile_next" onclick="changeForms('profile','confirm')" disabled>Next</button>
    <button type="button" class="btn btn-outline-primary fw-bold m-1" onclick="changeForms('profile','confirm')">Back</button>
</div>

<script>
    function saveLevelLabel() {
        let id = $("#level_id").val();
        $.ajax({
            type: "GET",
            url: "{{ url('api/grade-levels/') }}",
            data : {'id' : id},
            success: function (response) {
                $("#confirm_level").text(response[0].name);
            },
        });
    }
</script>