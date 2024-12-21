<h4 class="fw-bold mb-3">Confirm</h4>
<div class="row">
    <div class="col-lg-9">
        <table class="mb-4">
            <tr>
                <th class="text-end p-1">STUDENT NAME</th>
                <td class="p-1"><h4 class="fw-bold" id="confirm_name"></h4></td>
            </tr>
            <tr>
                <th class="text-end p-1">ADDRESS</th>
                <td class="p-1" id="confirm_address"></td>
            </tr>
        </table>
        <table class="w-100 mb-5">
            <tr class="summary-detail">
                <th>GRADE LEVEL</th>
                <td class="text-end" id="confirm_level"></td>
            </tr>
            <tr class="summary-detail">
                <th>LRN</th>
                <td class="text-end" id="confirm_lrn"></td>
            </tr>
            <tr class="summary-detail">
                <th>BIRTHDAY</th>
                <td class="text-end" id="confirm_bday"></td>
            </tr>
            <tr class="summary-detail">
                <th>AGE</th>
                <td class="text-end" id="confirm_age"></td>
            </tr>
            <tr class="summary-detail">
                <th>RELIGION</th>
                <td class="text-end" id="confirm_religion"></td>
            </tr>
            <tr class="summary-detail">
                <th>LANDLINE</th>
                <td class="text-end" id="confirm_landline"></td>
            </tr>
        </table>
        <div class="row">
            <div class="col-xl-2">
                <button type="button" class="btn btn-outline-primary fw-bold w-100" onclick="changeForms('confirm','profile')">Back</button>
            </div>
            <div class="col-xl">
                <button type="button" class="btn btn-outline-primary fw-bold w-100" onclick="changeForms('profile','confirm')" disabled>Add Relative Information</button>
            </div>
            <div class="col-xl-4">
                <button type="submit" class="btn btn-primary fw-bold w-100">Confirm Student</button>
            </div>
        </div>
    </div>
    <div class="col-lg"></div>
</div>