$(document).on('submit', '#product_upload', function(e) {
    e.preventDefault();
    e.preventDefault();

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

    for (let [key, value] of formData.entries()) {
        console.log(`${key}:`, value);
    }

    $.ajax({
        url: $(this).data('action'),
        type:"post",
        data:formData,
        success:function(res){
            console.log(res);
        },
        error:function(res){
            console.log('error response');
            console.log(res);
        }


    })
  });
