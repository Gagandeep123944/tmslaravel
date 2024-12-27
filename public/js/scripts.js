/**
 * Variables
 */
const signupButton = document.getElementById('signup-button'),
    loginButton = document.getElementById('login-button'),
    userForms = document.getElementById('user_options-forms')

/**
 * Add event listener to the "Sign Up" button
 */
signupButton.addEventListener('click', () => {
  userForms.classList.remove('bounceRight')
  userForms.classList.add('bounceLeft')
}, false)

/**
 * Add event listener to the "Login" button
 */
loginButton.addEventListener('click', () => {
  userForms.classList.remove('bounceLeft')
  userForms.classList.add('bounceRight')
}, false)


$('#signup').on('submit', function(e){
    e.preventDefault();
  
    let data = $(this).serialize();
    let url = $(this).data('url');


  
    $.ajax({
        url: url, 
        type: "post",
        data: data,
        success: function(res) {
           if(res.message == "User created successfully!"){
            $('.user_registered-login').trigger('click');
           }
        },
        error: function(res){
            let error = res.responseJSON.errors;
            console.log(error);
            if(error.email){
               $('#email_error').text(error.email[0]);
            }else{
              $('#email_error').text("");
            }
            if(error.fullname){
              $('#name_error').text(error.fullname[0]);
            }else{
              $('#name_error').text("");
            }

            if(error.password){
              $('#password_error').text(error.password[0]);
            }else{
              $('#password_error').text("");
            }

        }
    });
  });







  $('#login').on('submit', function(e){
    e.preventDefault();
  
    let data = $(this).serialize();
    let url = $(this).data('url');


  
    $.ajax({
        url: url, 
        type: "post",
        data: data,
        success: function(res) {
          console.log('success');
          if(res.message == "Login successful"){
             window.location.href = "/";   
          }
        },
        error: function(res){
         
            console.log(res.responseJSON.message)
            if(res.responseJSON.errors){
              let error = res.responseJSON.errors;
                if(error.email){
                  $('#email_error').text(error.email[0]);
              }else{
                $('#email_error').text("");
              }
  
              if(error.password){
                $('#password_error').text(error.password[0]);
              }else{
                $('#password_error').text("");
              }
 
            }else{
              $('#password_error').text("");
              $('#email_error').text("");
            }
            

            if(res.responseJSON.message == "Invalid credentials"){
              $('#invalid_credentials').text(res.responseJSON.message);
            }else{
              $('#invalid_credentials').text("");
            }


            

        }
    });
  });



