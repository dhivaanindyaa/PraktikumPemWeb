function validasiForm() {
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const konfirmasi = document.getElementById("konfirmasi").value;
    const checkbox = document.getElementById("persetujuan");

    // Validasi email
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(emailPattern)) {
        alert("Email tidak valid.");
        return false;
    }

    // Panjang password
    if (password.length < 6) {
        alert("Password minimal 6 karakter.");
        return false;
    }

    // Password dan konfirmasi
    if (password !== konfirmasi) {
        alert("Password dan konfirmasi tidak cocok.");
        return false;
    }

    // Checkbox harus dicentang
    if (!checkbox.checked) {
        alert("Anda harus menyetujui syarat dan ketentuan.");
        return false;
    }

    return true;
}
