@extends ('Kemitraan.layoutmitra')
@section('content')

<head>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<main class="main-content position-relative border-radius-lg ps">
    <div class="card" style="margin-left:30px; margin-right:30; margin-top:255px; margin-bottom:17px;">
        <form action="{{route('pelaksana.create')}}" method="POST">
            {{csrf_field()}}
            @if (session('sukses'))
            <div class="alert alert-success fw-bold" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <main class="container" style="padding-top:10px; align-left">
                <center>
                    <h4>Form Pelaksana</h4>
                </center>

                {{-- <div class="form-group">
                <label for="pwd">Pilih Kegiatan</label>
                <select class="form-control" id="kegiatan_id" name="kegiatan_id">
                    @foreach ($kegiatan as $kg)
                        <option value="{{$kg->id}}">{{$kg->nama_kegiatan}}</option>
                @endforeach
                </select>
    </div> --}}

    <label for="exampleDataList" class="form-label">Pilih Kegiatan</label>
    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Enter kegiatan.." name="kegiatan_id">
    <datalist id="datalistOptions">
        <option value="">
            @foreach ($kegiatan as $kg)
        <option value="{{$kg->nama_kegiatan}}">{{$kg->nama_kegiatan}}</option>
        @endforeach
    </datalist>
    <br>
    <div class="row">
        <div class="col-11">
            <label for="exampleDataList1" class="form-label">Pilih Mitra</label>
            <input class="form-control" list="datalistOptions1" id="exampleDataList1" placeholder="Enter mitra.." name="mitra_id">
            <datalist id="datalistOptions1">
                <option value="">
                    @foreach ($mitra as $mt)
                <option value="{{$mt->nama_mitra}}">{{$mt->nama_mitra}}</option>
                @endforeach
            </datalist>
            <!-- <div class="control-group after-add-more" id="after-add-more">
                        <label for="pwd">Pilih Mitra</label>
                        <select class="form-control" id="mitra_id" name="mitra_id">
                            @foreach ($mitra as $mt)
                            <option value="{{$mt->nama_mitra}}">{{$mt->nama_mitra}}</option>
            @endforeach
            </select>
            </div> -->
        </div>
    </div>

    <div class="col-1">
        <hr>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end"> 
        <button class="btn btn-success me-sm btn-md add-more" type="button" id="add-more">
            <i class="glyphicon glyphicon-plus"></i> +
        </button>
         </div> 
    </div>
    </div>

    <div class="form-group">
        <label for="pwd">Nilai Perjanjian</label>
        <input type="form" class="form-control" id="nilai_perjanjian" placeholder="Enter nilai perjanjian" name="nilai_perjanjian" value="{{old('nilai_perjanjian')}}">
    </div>
    <div class="form-group">
        <label for="pwd">Target</label>
        <input type="form" class="form-control" id="target" placeholder="Enter target" name="target">
    </div>
    {{-- <div class="form-group">
                <label for="pwd">Bertugas Sebagai</label>
                <input type="form" class="form-control" id="tugas" placeholder="Enter bertugas sebagai" name="pwd">
            </div> --}}
    <hr>
    <a class="btn btn-warning" href="/tambahmitra" role="button">Tambah Mitra</a>

    <button type="submit" class="btn btn-primary">Submit</button>
</main>
</form>

<div class="copy invisible">
    <div class="control-group">
        <label>Pilih Mitra</label>
        <input class="form-control" list="datalistOptions1" id="exampleDataList1" placeholder="Enter mitra.." name="mitra_id">
            <datalist id="datalistOptions1">
                <option value=" ">
                    @foreach ($mitra as $mt)
                <option value="{{$mt->nama_mitra}}">{{$mt->nama_mitra}}</option>
                @endforeach
            </datalist>

        <br>
        <button class="btn btn-danger me-sm btn-md remove" type="button"><i class="glyphicon glyphicon-remove"></i> -</button>
        <hr>
    </div>
</div>



{{-- <div class="copy invisible">
            <div class="row">
                <div class="col-11">
                    <div class="control-group">
                        <label>Nama Mitra</label>
                        <input type="form" class="form-control"  placeholder="Enter nama mitra" name="pwd">
                    </div>
                </div>

                <div class="col-1">
                    <div class="control-group">
                    
                    <button class="btn btn-danger me-sm btn-md remove" type="button" >
                        <i class="glyphicon glyphicon-remove"></i> -
                    </button>
                    </div>
                    
                </div>
            </div>
        </div> --}}

{{-- <div class="copy invisible">
            <div class="row">
                <div class="col-12">
                        <div class="control-group">
                            <label>Nama Mitra</label>
                            <input type="text" name="nama_mitra" class="form-control">
                            
                        </div>
                    </div>
                </div>
                <div class="col-1">
                        <div class="control-group">
                            <button class="btn btn-danger me-sm btn-md remove" type="button" id="remove" >
                                <i class="glyphicon glyphicon-plus"></i> -
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
</div>
</main>

<script type="text/javascript">
    $(document).ready(function() {
        $(".add-more").click(function() {
            var html = $(".copy").html();
            $(".after-add-more").after(html);
        });

        // saat tombol remove dklik control group akan dihapus 
        $("body").on("click", ".remove", function() {
            $(this).parents(".control-group").remove();
        });
    });
</script>

@endsection