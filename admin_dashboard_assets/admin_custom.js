

//Auto fill state when a country has been picked
$('#country_id').change(function(){
    var country = $(this).val();
    if(country){
        $('#state_id').empty();
        $('<option>').val('').text('Loading...').appendTo('#state_id');
        $.ajax({
            url: baseUrl+'/getstates/'+country,
            type: "GET",
            dataType: 'json',
            success: function(data) {
                $('#state_id').empty();
                $('<option>').val('').text('Select State').appendTo('#state_id');
                $.each(data.states, function(k, v) {
                    $('<option>').val(v.id).text(v.name).appendTo('#state_id');
                });
            }
        });
    }
});
//Auto fill city when a state has been picked
$('#state_id').change(function(){
    var state = $(this).val();
    if(state){
        $('#city_id').empty();
        $('<option>').val('').text('Loading...').appendTo('#city_id');
        $.ajax({
            url: baseUrl+'/getcities/'+state,
            type: "GET",
            dataType: 'json',
            success: function(data) {
                $('#city_id').empty();
                $('<option>').val('').text('Select City').appendTo('#city_id');
                $.each(data.cities, function(k, v) {
                    $('<option>').val(v.id).text(v.name).appendTo('#city_id');
                });
            }
        });
    }
});



// hide login link
$('.loginLink').hide();

// check the db if the email has been used before submitting
function duplicateEmail(element){
    var email = $(element).val();
    $.ajax({
        type: "GET",
        url: baseUrl+"/checkemail",
        data: {email:email},
        dataType: "json",
        success: function(res) {
            if(res.exists){
                alert('Email taken, please Login');
                $('#finish').prop('disabled', true)
                $('.loginLink').show();
                $(":input").not("[name=email]").prop("readonly", true)
            } else {
                $(":input").not("[name=email]").prop("readonly", false)
                $('#finish').prop('disabled', false)
                $('.loginLink').hide();
            }
        },
        error: function (jqXHR, exception) {

        }
    });
}



function deleteItems(item,item_id)
{
  Swal.fire({
  title: 'Do you really want to delete the selected item?',
  text: 'You can\'t revert this action!',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, don\'t delete it'
}).then((result) => {
  if (result.value) {

 $.ajax({
        url: baseUrl+'/admin/'+item+'/'+item_id,
        type: "get",
        data: {'item_id':item_id,'item':item},
        success: function(data) {
     Swal.fire(
      'Deleted!',
      'The selected item has been deleted successfully.',
      'success'
    )
   window.location.href=window.location.href// refresh page
                    }
                });

  } else if (result.dismiss === Swal.DismissReason.cancel) {
    Swal.fire(
      'Cancelled',
      'An attempt to delete the selected item failed :)',
      'error'
    )
  }
})
}


