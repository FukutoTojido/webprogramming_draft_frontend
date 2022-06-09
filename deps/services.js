createInput = (id, className, val) => {
    let tmp = document.createElement("input");
    tmp.setAttribute("id", id);
    tmp.setAttribute("class", className);
    tmp.setAttribute("value", val);

    return tmp;
}

createLabel = (text) => {
    let tmp = document.createElement("div");
    tmp.setAttribute("class", "label");
    tmp.innerText = text;

    return tmp;
}

addServicesBox = () => {
    let idx = document.querySelectorAll("[id*=servicesName]").length + 1;
    let box = document.createElement("div");
    box.setAttribute("class", "servicesBox");

    let sId = createInput(`servicesId-${idx}`, "servicesInput", `#${idx}`);
    let sName = createInput(`servicesName-${idx}`, "servicesInput", `Plan ${idx}`);
    let sDoc = createInput(`servicesDoc-${idx}`, "servicesInput", ``);
    let sLength = createInput(`servicesLength-${idx}`, "servicesInput", ``);

    let labelId = createLabel("Id dịch vụ");
    let labelName = createLabel("Tên dịch vụ");
    let labelDoc = createLabel("Tên bác sĩ");
    let labelLength = createLabel("Thời gian tư vấn");

    let remover = document.createElement("div");
    remover.setAttribute("class", "remover");
    remover.setAttribute("onclick", "removeBox(this)");
    remover.innerText = '-';

    box.append(labelId, sId, labelName, sName, labelDoc, sDoc, labelLength, sLength, remover);

    document.getElementsByClassName("innerSection")[0].insertBefore(box, document.getElementsByClassName("addBox")[0]);
}

removeBox = (e) => {
    e.parentNode.remove();
}