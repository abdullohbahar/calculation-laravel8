let currentTab = 0;
showTab(currentTab);

function showTab(n) {
    let tabs = document.getElementsByClassName("tab");
    for (let i = 0; i < tabs.length; i++) {
        tabs[i].style.display = "none";
    }
    tabs[n].style.display = "block";
    if (n === 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n === tabs.length - 1) {
        document.getElementById("nextBtn").style.display = "none";
        document.getElementById("submitBtn").style.display = "inline";
    } else {
        document.getElementById("nextBtn").style.display = "inline";
        document.getElementById("submitBtn").style.display = "none";
    }

    // Update the progress bar
    let progressBar = document.querySelector(".progress-bar");
    let progress = ((n + 1) / tabs.length) * 100;
    progressBar.style.width = progress + "%";
    progressBar.setAttribute("aria-valuenow", progress);
    // progressBar.innerHTML = progress + '%';

    window.scrollTo(0, 0);
}

function nextPrev(n) {
    let tabs = document.getElementsByClassName("tab");
    tabs[currentTab].style.display = "none";
    currentTab += n;
    if (currentTab >= tabs.length) {
        return false;
    }
    showTab(currentTab);
}

function validateForm() {
    let tabs = document.getElementsByClassName("tab");
    let inputs = tabs[currentTab].querySelectorAll("input[required]");
    let isValid = true;
    // let radioGroups = tabs[currentTab].querySelectorAll("input[type='radio']");

    for (let i = 0; i < inputs.length; i++) {
        if (!inputs[i].value) {
            isValid = false;
            inputs[i].classList.add("is-invalid");
        } else {
            inputs[i].classList.remove("is-invalid");
        }
    }

    let radioGroup = {};

    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].type === "email") {
            if (!validateEmail(inputs[i].value)) {
                isValid = false;
                inputs[i].classList.add("is-invalid");
            } else {
                inputs[i].classList.remove("is-invalid");
            }
        } else if (inputs[i].type === "radio") {
            let inputName = inputs[i].getAttribute("name");
            if (
                !radioGroup[inputName] &&
                !document.querySelector(
                    "input[name='" + inputName + "']:checked"
                )
            ) {
                isValid = false;
                radioGroup[inputName] = true;
                let radioAlert = inputs[i].parentNode.querySelector(".alert");
                radioAlert.style.display = "block";
            }
        } else {
            if (!inputs[i].value) {
                isValid = false;
                inputs[i].classList.add("is-invalid");
            } else {
                inputs[i].classList.remove("is-invalid");
            }
        }
    }

    if (isValid) {
        nextPrev(1);
    }
}

function removeInvalidFeedback(element) {
    element.classList.remove("is-invalid");
    let radioAlert = element.parentNode.querySelector(".alert");
    if (radioAlert) {
        radioAlert.style.display = "none";
    }
}

function hideRadioAlert(radioElement) {
    const radioAlert = radioElement.parentNode.querySelector(".radio-alert");

    if (radioElement.checked) {
        radioAlert.style.display = "none";
    }
}

function validateEmail(email) {
    // Gunakan ekspresi reguler untuk memeriksa validitas alamat email
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailPattern.test(email);
}
