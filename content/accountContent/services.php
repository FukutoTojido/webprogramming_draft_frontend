<script src="deps/services.js"></script>
<div class="headingSection">
    <div class="settingsHeading">Quản lý dịch vụ</div>
    <div class="settingsDesc">Chỉnh sửa các thông tin liên quan đến dịch vụ</div>
</div>
<div class="innerSection">
    <div class="servicesBox">
        <div class="label">Id dịch vụ</div>
        <input type="text" id="servicesId-1" class="servicesInput" value="#1">
        <div class="label">Tên dịch vụ</div>
        <input type="text" id="servicesName-1" class="servicesInput" value="Plan 1">
        <div class="label">Tên bác sĩ</div>
        <input type="text" id="servicesDoc-1" class="servicesInput" value="Bác sĩ Tống Văn Tèo">
        <div class="label">Thời gian tư vấn</div>
        <input type="text" id="servicesLength-1" class="servicesInput" value="1 tháng">
        <div class="remover" onclick="removeBox(this)">-</div>
    </div>
    <div class="addBox" onclick="addServicesBox()">+</div>
</div>