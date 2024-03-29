let emri=document.getElementById('emri');
        let mbiemri=document.getElementById('mbiemri');
        let email=document.getElementById('email');
        let password=document.getElementById('password');
        let emriError=document.getElementById('emriError');
        let mbiemriError=document.getElementById('mbiemriError');
        let emailError=document.getElementById('emailError');
        let passwordError=document.getElementById('passwordError');
        let emriRegex=/\b([A-ZÀ-ÿ][-,a-z. ']+[ ]*)+/;
        let mbiemriRegex=/\b([A-ZÀ-ÿ][-,a-z. ']+[ ]*)+/;
        let emailRegex=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        let passwordRegex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,30}$/;
        let registerForm = document.querySelector(".registerForm");

        emriError.textContent='';
        mbiemriError.textContent='';
        emailError.textContent='';
        passwordError.textContent='';
        registerForm.addEventListener("submit", (e) => {
            let errors = [];
        
            if(!emriRegex.test(emri.value)){
                errors.push("1");
                emriError.style.color="red";
                emriError.textContent='★Warning,Emri duhet te filloje me shkronje te madhe!';
            }
            if(!mbiemriRegex.test(mbiemri.value)){
                errors.push("2");
                mbiemriError.style.color="red";
                mbiemriError.textContent='★Warning,Mbiemri duhet te filloje me shkronje te madhe!';
            }
            if(!emailRegex.test(email.value)){
                errors.push("3");
                emailError.style.color="red";
                emailError.textContent='★Warning,Email eshte shkruar gabim!';
            }
            if(!passwordRegex.test(password.value)){
                errors.push("4");
                passwordError.style.color="red";
                passwordError.textContent='★Warning,Provoni nje password te ri qe permban 8 karaktere';
            }
        
            if(errors.length > 0) {
                e.preventDefault();
                return false;
            }
        })