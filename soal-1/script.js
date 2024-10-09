document.getElementById('registrationForm').addEventListener('submit', function (event) {
    event.preventDefault();

    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmPassword').value;

    let valid = true;

    document.getElementById('error_email').style.display = 'none';
    document.getElementById('error_password').style.display = 'none';
    document.getElementById('error_comfirm_password').style.display = 'none';
    document.getElementById('success-submit').textContent = '';

    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if (!email.match(emailPattern)) {
        valid = false;
        document.getElementById('error_email').textContent = 'Email harus berformat valid';
        document.getElementById('error_email').style.display = 'block';
    }

    if (password.length < 8) {
        valid = false;
        document.getElementById('error_password').textContent = 'Password harus terdiri dari minimal 8 karakter';
        document.getElementById('error_password').style.display = 'block';
    }

    if (password !== confirmPassword) {
        valid = false;
        document.getElementById('error_comfirm_password').textContent = 'Password dan konfirmasi password harus cocok';
        document.getElementById('error_comfirm_password').style.display = 'block';
    }

    if (valid) {
        document.getElementById('success-submit').textContent = 'Pendaftaran Berhasil';
    }
});
