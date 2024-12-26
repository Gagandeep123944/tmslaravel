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
            console.log(res);
        },
        error: function(res){
            let error = res.responseJSON.errors;
            console.log(error);
            if(error.email != ""){

            }
        }
    });
  });



