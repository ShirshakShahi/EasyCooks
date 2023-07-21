const passwordInput = document.getElementById('password');
const passwordReq = document.getElementById('passwordReq');
const confirmPasswordInput = document.getElementById('confirmPassword');
const confirmPasswordReq = document.getElementById('confirmPasswordReq');
const button = document.getElementById("btn");
function checkPasswordRequirements() {
    const password = passwordInput.value;
    const confirmPassword = confirmPasswordInput.value;
    const requirements = [];

    if (password.length < 8) {
        requirements.push('<div>Password must be at least 8 characters long.</div>');
    }

    if (!/\d/.test(password)) {
        requirements.push('<div>Password must contain at least one number.</div>');
    }

    if (!/[A-Z]/.test(password)) {
        requirements.push('<div>Password must contain at least one uppercase letter.</div>');
    }

    if (password !== confirmPassword) {
        button.disabled = true;
        button.classList.add("disabled");
    } else {
        button.disabled = false;
        button.classList.remove("disabled");
    }
    
   

    if (requirements.length === 0 && password === confirmPassword) {
        passwordReq.innerHTML = '';
        passwordReq.className = '';
        confirmPasswordReq.innerHTML = 'Password requirements fulfilled.';
        confirmPasswordReq.className = 'success';
    } else {
        passwordReq.innerHTML = requirements.join('');
        passwordReq.className = 'error';
        confirmPasswordReq.innerHTML = '<div>Passwords do not match.</div>';
        confirmPasswordReq.className = 'error';
    }
}




passwordInput.addEventListener('input', checkPasswordRequirements);
confirmPasswordInput.addEventListener('input', checkPasswordRequirements);
