@extends ('layouts.master')
@section('content')

<main class="main-content position-relative border-radius-lg ps">
  <div class="card" style="margin-left:30px; margin-right:30px; margin-top:255px">
    <main class="container"style="padding-top:10px; align-left">
     <div>
     </div>
      <center>
        <h4>Form Kegiatan</h4>
      </center>
        <div class="form-group">
          <label for="text">Nama Kegiatan</label>
          <input type="text" class="form-control" id="nama_kegiatan" placeholder="Enter nama kegiatan" name="email">
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
        <label for="pwd">Tanggal Pelaksana</label>
        <input type="date" class="form-control" id="tgl" placeholder="Enter tanggal pelaksana" name="pwd">
      </div>
      <div class="form-group">
        <label for="text">Beban Anggaran</label>
        <input type="text" class="form-control" id="beban_anggaran" placeholder="Enter beban anggaran" name="pwd">
      </div>
      <div class="form-group">
        <label for="text">Volume Total</label>
        <input type="text" class="form-control" id="volume_total" placeholder="Enter volume total" name="pwd">
      </div>
      <div class="form-group">
        <label for="text">Satuan</label>
        <input type="text" class="form-control" id="satuan" placeholder="Enter satuan" name="pwd">
      </div>
      <div class="form-group">
        <label for="text">Harga Satuan</label>
        <input type="text" class="form-control" id="harga_satuan" placeholder="Enter harga satuan" name="pwd">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
        

    </main>
  </div>
</main>
   
@endsection  