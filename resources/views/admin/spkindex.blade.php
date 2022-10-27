@extends('admin.layoutspk')
@section('content')

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
        #over {
            /* background-color: #eee; */
            width: auto;
            height: auto;
            /* border: 900px ; */
            overflow-y: hidden;
            overflow-x: scroll;
        }
    </style>
</head>

<main class="main-content position-relative border-radius-lg ps">
        <div class="card" style="margin-left:30px; margin-right:30px; margin-top:30px">
            <div class="card-header pb-0 py-2">
                <div class="align-items-center">
                    <h2 class="text-center">Data SPK</h3>
                </div>
            </div>

            <div class="card-body">
                @if (session('successMsg'))
                    <div class="alert alert-success fw-bold" role="alert">
                        {{session('successMsg')}}
                    </div>
                @endif
                
                    
                        <!-- Button trigger modal -->
                        <form>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <!-- <a href="#" role="button" class="btn btn-primary" style="margin-left: 70%" onclick="check()">Cetak</a> -->
                            <a href="/admin/spk/formspk" class="btn btn-primary bi bi-plus-lg" role="button"> Tambah SPK</a>
                        </div>
                    
                    <div id="over" style="margin-left:auto;margin-right:auto">
                        <table class="table table-hover table-bordered" id="dataspk">
                            <thead>
                            <tr class="text-center">
                            <!-- <th>#</th> -->
                            <th scope="col">No</th>
                                {{-- <th>Nama Mitra</th> --}}
                                <th>Kegiatan</th>
                                <th>Pembuat Perjanjian Kerja</th>
                                <th>Mitra</th>
                                <th>Hari</th>
                                <th>Tanggal Pembuatan</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>

                            <tbody>
                                <?php $no=1;?>
                                    @foreach ($spk as $spk)
                                    <tr>
                                        <!-- <th><input type="checkbox" id="spk_id" value="foreach"></th> -->
                                        <th scope="row" id="id">  {{$no}}</th>
                                        <td>{{$spk->nama_kegiatan}}</td>
                                        <td>{{$spk->ppk}}</td>
                                        <td>{{$spk->nama_mitra}}</td>
                                        <td class="text-center">{{$spk->hari}}</td>
                                        <td class="text-center">{{$spk->tanggal}} {{$spk->bulan}} {{$spk->tahun}}</td>
                                        <td>
                                            
                                            <a href="/admin/spk/{{$spk->id}}/cetak-spk" class="btn btn-success btn-sm bi bi-file-earmark-pdf" title="Cetak SPK"></a>
                                            <a href="/admin/spk/{{$spk->id}}/cetak-lampiran" class="btn btn-info btn-sm bi bi-file-earmark-pdf-fill" title="Cetak Lampiran"></a>
                                            <a href="/admin/spk/{{$spk->id}}/edit" class="btn btn-warning btn-sm bi bi-pencil-square" title="Edit"></a>
                                            <a href="/admin/spk/{{$spk->id}}/delete" class="btn btn-danger btn-sm bi bi-trash3-fill" title="Hapus"></a>
                                        </td>
                                    </tr>
                                <?php $no++ ;?>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
                </div>
            </div>
        </div>    
</main>

<script>
    let yangDicek = 0;

    $("#cb-head").on('click', function(){
        var isChecked = $("#cb-head").prop('checked')
        $(".cb-child").prop('checked', isChecked)
        $("#button-hapus").prop('disabled', !isChecked)
    })

    $("#dataspk").on('click', '.cb-child', function(){
        if($(this).prop('checked')!=true){
            $("#cb-head").prop('checked', false)
        }

        let semua_checkbox = $("#dataspk .cb-child:checked")
        let button_non_aktif_status = (semua_checkbox.length>0)
        $("#button-hapus").prop('disabled', !button_non_aktif_status)
        
    })

    function hapusTerpilih(){
        let checkbox_terpilih = $("#dataspk .cb-child:checked")
        let semua_id = []
        $.each(checkbox_terpilih,function(index,elm){
            semua_id.push(elm.value)
        })
        // for(let key in checkbox_terpilih){
        //     semua_id.push(checkbox_terpilih[key].value)
        // }
        // console.log(semua_id)
        $.ajax({
            url:"{{url('')}}/admin/spk/delete",
            method:'post',
            data:{ids:semua_id},
            success:function(res){
                table.ajax.reload(null,false)
            }
        })
        
        console.log("Terpilih hapus")
    }

    function del(){
        $('#button-hapus').click(function(){
            var cricketer = [];
            $("input:checkbox[name='n-body']:checked").each(function(){    
                cricketer.push($(this).attr("id"));    		
            });
            console.log("The best cricketers are: " + cricketer.join(", "));
        });
    }
</script>

@endsection