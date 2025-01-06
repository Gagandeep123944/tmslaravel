$(document).on('submit', '#product_upload', function(e) {
    e.preventDefault();

    $('.roller_div').show();


    let formData = new FormData(this); 
    let data = $(this).serialize(); 

    let action = $(this).data('action');
    console.log('Serialized Data:', data);
    console.log('FormData Entries:');

    for (let [key, value] of formData.entries()) {
        console.log(`${key}:`, value);
    }

    let params = new URLSearchParams(data); 
    for (let [key, value] of params.entries()) {
        formData.append(key, value);
    }

    

    $.ajax({
        url: $(this).data('action'),
        type:"post",
        data:data,
        success:function(res){
            $('.roller_div').hide();
           

            if(res.message == 'Product created successfully!'){
                 alert('Prodcut created successfully');
                 window.location.href = window.location.href;

            }
        },
        error:function(res){
            $('.roller_div').hide();               
            if(res.responseJSON.errors.Tour_price){
                console.log("a gyahai");
                $('#error_total_price').text(res.responseJSON.errors.Tour_price[0])
            }else{
                $('#error_total_price').text("")
            }
            if(res.responseJSON.errors.location){
              $('#error_product_name').text(res.responseJSON.errors.location[0])
            }else{
                $('#error_product_name').text("")
            }
           
        }


    })
  });
