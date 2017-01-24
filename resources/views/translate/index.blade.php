<!DOCTYPEHTMl>
<html>
<head><title>Generic Translation</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('translate_post') }}">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Translate This text</label>
                  <input type="text" name="translate_text" class="form-control" id="exampleInputEmail1" placeholder="e.g:Translate Text">
                </div>

                <div class="form-group">
                  <label>Select</label>
                  <select class="form-control">                    
                    @foreach( $langs as $key => $val )
				      <option value="{{ $key }}">{{ $key }}</option>
				    @endforeach
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

</div>



</body>
</html>
