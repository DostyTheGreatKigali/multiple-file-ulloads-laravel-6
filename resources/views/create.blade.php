
<html lang="en">
    <head>
      <title>Laravel Multiple File Upload Example</title>
        {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
      {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    </head>
    <body>
      <div class="container">
          @if (count($errors) > 0)
          <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

            @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif

        <h3 class="jumbotron">Laravel Multiple File Upload</h3>
    <form method="post" action="{{url('file')}}" enctype="multipart/form-data">
      {{csrf_field()}}

            <div class="input-group control-group increment" >
              <input type="file" name="filenames[]" class="form-control">
              <div class="input-group-btn">
                <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
              </div>
            </div>
            <div class="clone hide">
              <div class="control-group input-group" style="margin-top:10px">
                <input type="file" name="filenames[]" class="form-control">
                <div class="input-group-btn">
                  <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

      </form>
      </div>


    <script type="text/javascript">


        $(document).ready(function() {

            // console.log($('.form-control').val())

          $(".btn-success").click(function(){
              var html = $(".clone").html();
              $(".increment").after(html);
          });

          $("body").on("click",".btn-danger",function(){
              $(this).parents(".control-group").remove();
          });

        });

    </script>
    </body>
    </html>
