$('#start-chatting').click(function() {
    e.preventDefault();


let username = $('#username').val();

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.ajax({
    url:"{{ route('ajaxRequest.post') }}",
    type:"POST",
    data:{username:username,},
    success:function(data){
        alert(data.success);
     },
    error: function(response) {
        console.log(response.responseJSON.errors.name);
    },
    });
    $('#name-input').toggle("normal");
  });

