@extends ('admin.layoutperjanjian')
@section('content')

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<main class="main-content position-relative border-radius-lg ps">
    <div class="card" style="margin-left:30px; margin-right:30px; margin-top:30px; margin-bottom:17px;">
        <form action="{{route('pelaksanaAdmin.create')}}" method="POST">
            {{csrf_field()}}

            <main class="container" style="padding-top:30px; align-left">
                @if (session('sukses'))
                <div class="alert alert-success fw-bold" role="alert">
                    {{session('sukses')}}
                </div>
                @endif
                <center>
                    <h3>Form Pelaksana</h3>
                </center>
                <hr>

                <div class="mb-3" {{$errors->has('kegiatan_id') ? ' has-error' : ''}}>
                    <label for="disabledSelect" class="form-label">Kegiatan</label>
                    <select id="disabledSelect1" class="form-select" value="{{old('kegiatan_id')}}" list="datalistOptions" name="kegiatan_id"  >
                      <option value="">-Pilih Kegiatan-</option>
                        @foreach ($kegiatan as $km)
                            <option value="{{$km->id}}">{{$km->nama_kegiatan}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('kegiatan_id'))
                        <span class="help-block text-danger fs-9">*The kegiatan field is required.</span>
                    @endif
                  </div>
              
                  <div class="mb-3" {{$errors->has('mitrabaru_id') ? ' has-error' : ''}}>
                    <label for="disabledSelect" class="form-label">Mitra</label>
                    <select id="disabledSelect" class="form-select" value="{{old('mitrabaru_id')}}" list="datalistOptions1" id="exampleDataList1"  name="mitrabaru_id">
                      <option value="">-Pilih Mitra-</option>
                        @foreach ($mitra as $mt)
                            <option value="{{$mt->id}}">{{$mt->nama_mitra}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('mitrabaru_id'))
                        <span class="help-block text-danger fs-9">*The mitra field is required.</span>
                    @endif
                  </div>

                {{-- <div class="form-group {{$errors->has('kegiatan_id') ? ' has-error' : ''}}">
                    <label for="exampleDataList" class="form-label">Pilih Kegiatan</label>
                    <input class="form-control" value="{{old('kegiatan_id')}}" list="datalistOptions"
                        id="exampleDataList" placeholder="Enter kegiatan.." name="kegiatan_id">
                    <datalist id="datalistOptions">
                        <option value="">
                            @foreach ($kegiatan as $kg)
                        <option value="{{$kg->nama_kegiatan}}">{{$kg->nama_kegiatan}}</option>
                        @endforeach
                    </datalist>
                    @if ($errors->has('kegiatan_id'))
                    <span class="help-block text-danger fs-9">*The kegiatan field is required.</span>
                    @endif
                </div>

                <div class="form-group {{$errors->has('mitrabaru_id') ? ' has-error' : ''}}">
                    <label for="exampleDataList1" class="form-label">Pilih Mitra</label>
                    <input class="form-control" value="{{old('mitrabaru_id')}}" list="datalistOptions1"
                        id="exampleDataList1" placeholder="Enter mitra.." name="mitrabaru_id">
                    <datalist id="datalistOptions1">
                        <option value="">
                            @foreach ($mitra as $mt)
                        <option value="{{$mt->nama_mitra}}">{{$mt->nama_mitra}}</option>
                        @endforeach
                    </datalist>
                    @if ($errors->has('mitra_id'))
                    <span class="help-block text-danger fs-9">*The mitra field is required.</span>
                    @endif
                </div> --}}

                <div class="form-group {{$errors->has('bertugas_sebagai') ? ' has-error' : ''}}">
                    <label for="pwd">Bertugas sebagai</label>
                    <input type="form" value="{{old('bertugas_sebagai')}}" class="form-control" id="bertugas_sebagai"
                        placeholder="Enter bertugas sebagai.." name="bertugas_sebagai"
                        value="{{old('bertugas_sebagai')}}">
                    @if ($errors->has('bertugas_sebagai'))
                    <span class="help-block text-danger fs-9">*{{$errors->first('bertugas_sebagai')}}</span>
                    @endif
                </div>

                <div class="form-group {{$errors->has('target') ? ' has-error' : ''}}">
                    <label for="pwd">Target</label>
                    <input type="form" value="{{old('target')}}" class="form-control" id="target"
                        placeholder="Enter target" name="target">
                    @if ($errors->has('target'))
                    <span class="help-block text-danger fs-9">*{{$errors->first('target')}}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </main>
        </form>
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