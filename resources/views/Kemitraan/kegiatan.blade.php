@extends ('Kemitraan.layout')
@section('content')

<!-- <head>
  <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
</head> -->

<main class="main-content position-relative border-radius-lg ps">
  <div class="card" style="margin-left:30px; margin-right:30px; margin-top:255px">
    <main class="container"style="padding-top:10px; align-left">
      <center>
               <h4>Form Kegiatan</h4>
      </center>
        <div class="form-group">
          <label for="email">Nama Kegiatan</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
    
    <!-- Tanggal -->
    
        
        <!-- <section class="col-sm-12">
            <div class="form-group">
            <label for="email">Tanggal Kegiatan</label>
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

        </section> -->
    
        <script type="text/javascript">
            $(function() {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    <!-- Tanggal -->

      <div class="form-group">
        <label for="pwd">Tanggal</label>
        <input type="date" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
      <div class="form-group">
        <label for="pwd">Beban Anggaran</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
      <div class="form-group">
        <label for="pwd">Volume Total</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
      <div class="form-group">
        <label for="pwd">Satuan</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
      <div class="form-group">
        <label for="pwd">Harga Satuan</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
        

    </main>
  </div>
</main>
   
@endsection  