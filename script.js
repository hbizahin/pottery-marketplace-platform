// Helper to show errors
function showError(spanId, message, inputId) {
    const span = document.getElementById(spanId);
    if (span) {
        span.textContent = message;
        span.style.display = "block";
    }
    if (inputId) {
        const input = document.getElementById(inputId);
        if (input) input.classList.add('invalid');
    }
}

// Helper to clear all errors
function clearErrors() {
    document.querySelectorAll('.error-msg').forEach(s => s.style.display = "none");
    document.querySelectorAll('input, select').forEach(i => i.classList.remove('invalid'));
}

// --- Registration Logic ---
const regForm = document.getElementById('registrationForm');
if (regForm) {
    regForm.addEventListener('submit', function(e) {
        console.log("Submit button clicked! Validation starting...");
        clearErrors();
        let isValid = true;

        // Get values
        const name = document.getElementById('regName').value.trim();
        const email = document.getElementById('regEmail').value.trim();
        const role = document.getElementById('regRole').value;
        const pass = document.getElementById('password').value;
        const confirm = document.getElementById('confirmPassword').value;

        console.log("Values found:", { name, email, pass, confirm });

        // 1. Name Check
        if (name.length < 3) { 
            showError('nameError', 'Name is too short.', 'regName'); 
            isValid = false; 
        }
        
        // 2. Email Check
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) { 
            showError('emailError', 'Enter a valid email.', 'regEmail'); 
            isValid = false; 
        }
        
        // 3. Role Check
        if (role === "") { 
            showError('roleError', 'Please select a role.', 'regRole'); 
            isValid = false; 
        }

        // 4. Password Match & Length Check
        if (pass.length < 6) { 
            showError('passError', 'Password must be 6+ characters.', 'password'); 
            isValid = false; 
        } else if (pass !== confirm) { 
            showError('passError', 'Passwords do not match.', 'confirmPassword'); 
            isValid = false; 
        }

        if (!isValid) {
            console.log("Validation Failed! Stopping form.");
            e.preventDefault(); // Stop the form
        } else {
            console.log("Validation Successful! Sending to PHP...");
        }
    });
}