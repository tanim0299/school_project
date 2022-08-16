
<form method="POST" class="btn-submit" data-id="{{ $data->id }}">

  <div class="row">
    <div class="form-group col-md-12">
      <label>Department Name :</label>
      <input type="text" name="department_name" class="form-control" placeholder="Department Name" id="department_name" required="" value="{{ $data->department_name }}">
    </div>

  </div>

  <center><button type="submit" class="btn btn-info btn-sm button">Update</button></center>
  <center><button type="button" class="btn btn-info btn-sm loading">Loading...</button></center>

</form>



<script type="text/javascript">

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });


  $('.loading').hide();
  $(".btn-submit").submit(function(e){
    e.preventDefault();

    var data = $(this).serialize();
    var id = $(this).data("id");

    $.ajax({
      url:"{{ url('departmentupdate') }}/"+id,
      method:'POST',
      data:data,

      beforeSend:function(response) { 

        $('.loading').show();
        $('.button').hide();

      },


      success:function(response){

        UIkit.notification({
          message: 'Data Update Successfully Done',
          status: 'primary',
          pos: 'top-right',
          timeout: 2000
        });
        $('.loading').hide();
        $('.button').show();

        window.location = "";




        
      },


      error:function(error){
        console.log(error)
      }
    });
  });




</script>