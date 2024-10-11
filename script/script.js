function validateForm() {
    let name = document.getElementById("name").value;
    let reg_no = document.getElementById("reg_no").value;
    let year = document.getElementById("year").value;
    let section = document.getElementById("section").value;
    let phone = document.getElementById("phone").value;
    let email = document.getElementById("email").value;
    let address = document.getElementById("address").value;

    if (name === "" || reg_no === "" || year === "" || section === "" || phone === "" || email === "" || address === "") {
        alert("All fields are required!");
        return false;
    }

    if (phone.length !== 10) {
        alert("Phone number must be 10 digits.");
        return false;
    }

    if (!validateEmail(email)) {
        alert("Please enter a valid email.");
        return false;
    }

    return true;
}

function validateEmail(email) {
    let re = /\S+@\S+\.\S+/;
    return re.test(email);
}
