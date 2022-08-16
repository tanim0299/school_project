
 <form method="POST" class="btn-submit" data-id="{{ $data->id }}">

  <div class="row">


    <div class="form-group col-md-12">
      <label>Title :</label>
      <input type="text" name="title" class="form-control" placeholder="Title" id="title" value="{{ $data->title }}" required="">
    </div>

    <div class="form-group col-md-12">
      <label>Details :</label>
      <textarea rows="4" class="form-control" name="details">{{ $data->details }}</textarea>
    </div>


    <div class="form-group col-md-12">
      <label>URL :</label>
      <input type="text" name="url" id="url" class="form-control" placeholder="URL" value="{{ $data->url }}" required="">
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
      url:"{{ url('videogalleryupdate') }}/"+id,
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

