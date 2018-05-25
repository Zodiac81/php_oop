window.onload = function() {


    let formBtn = document.getElementById('cityFormBtn');
    formBtn.addEventListener('click', function () {

        let oldForm = document.forms.getCity;

        let cityForm = new FormData(oldForm)
        let city = cityForm.get('city');
        let data = {
            city: city
        };
        let url = './action_ajax_form.php';

        $.ajax({
            url:     url,
            type:     "POST",
            dataType: "json",
            data: data,
            success: function(response) {
                let a = JSON.parse(response);
               // $('#responseBlock').text(a.city);
                console.log("success " + a);


            },
            error: function(response) {
                console.log("error " + response);
            }
        });

    });


};

