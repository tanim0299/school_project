
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
    <select class="form-control selecttextfill" id="option_s2" name="group_id">
      @php $group = DB::table('add_group')->get();  @endphp
      @if(isset($group))
      @foreach($group as $c)
      <option value="{{ $c->id }}"<?php if ($data->group_id == $c->id) {
       echo "selected";
      } ?>>{{ $c->group_name }}</option>
      @endforeach
      @endif
    </select>
  </div>


  <div class="form-group col-md-12">
    <label>Section Name :</label>
    <input type="text" name="section_name" class="form-control" placeholder="Section Name" id="section_name" required="" value="{{ $data->section_name }}">
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
      url:"{{ url('sectionupdate') }}/"+id,
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



<script type="text/javascript">
  $(document).ready(function() {
    $('select[name="class_id"]').on('change', function(){
      var class_id = $(this).val();
      if(class_id) {
        $.ajax({
          url: "{{  url('/get/class/') }}/"+class_id,
          type:"GET",
          dataType:"json",
          success:function(data) {
            var d =$('select[name="group_id"]').empty();
            $.each(data, function(key, value){

              $('select[name="group_id"]').append('<option value="'+ value.id +'">' + value.group_name + '</option>');

            });

          },

        });
      } else {
        alert('danger');
      }

    });
  });

</script>

