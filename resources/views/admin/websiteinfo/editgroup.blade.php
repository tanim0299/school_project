
<form method="POST" class="btn-submit" data-id="{{ $data->id }}">

  <div class="row">

    <div class="form-group col-md-12">
      <label>Class Name :</label>
      <select class="form-control selecttextfill" id="option_s1" name="class_id">
        @php $class = DB::table('add_class')->get();  @endphp
        @if(isset($class))
        @foreach($class as $c)
        <option value="{{ $c->id }}" <?php if ($data->class_id == $c->id) {
         echo "selected";
       } ?>>{{ $c->class_name }}</option>
       @endforeach
       @endif
     </select>
   </div>

   <div class="form-group col-md-12">
    <label>Group Name :</label>
    <input type="text" name="group_name" class="form-control" placeholder="Group Name" id="group_name" value="{{ $data->group_name }}">
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
      url:"{{ url('groupupdate') }}/"+id,
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