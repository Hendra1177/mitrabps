<!DOCTYPE html>
<html>

<head>
    <title></title>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/print-js/1.6.0/print.js" integrity="sha512-/fgTphwXa3lqAhN+I8gG8AvuaTErm1YxpUjbdCvwfTMyv8UZnFyId7ft5736xQ6CyQN4Nzr21lBuWWA9RTCXCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/print-js/1.6.0/print.css" integrity="sha512-tKGnmy6w6vpt8VyMNuWbQtk6D6vwU8VCxUi0kEMXmtgwW+6F70iONzukEUC3gvb+KTJTLzDKAGGWc1R7rmIgxQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/print-js/1.6.0/print.min.css" integrity="sha512-zrPsLVYkdDha4rbMGgk9892aIBPeXti7W77FwOuOBV85bhRYi9Gh+gK+GWJzrUnaCiIEm7YfXOxW8rzYyTuI1A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/print-js/1.6.0/print.min.js" integrity="sha512-16cHhHqb1CbkfAWbdF/jgyb/FDZ3SdQacXG8vaOauQrHhpklfptATwMFAc35Cd62CQVN40KDTYo9TIsQhDtMFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{asset('template/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('template/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('template/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('template/assets/css/argon-dashboard.css')}}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link id="pagestyle" href="{{asset('template/assets/css/argon-dashboard.css')}}" rel="stylesheet" />
    <link id="pagestyle" href="{{asset('template/assets/dataTables/datatables.min.css')}}" rel="stylesheet" />
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

<div class="card cardspk" style="margin-right:30px; margin-left:30px;">
    <div class="card-body card-body-spk" style="margin-right:15px; margin-left:15px;">

        <button type="button" class="btn-danger" onclick="printData()">
            Print Form
        </button>






        <div id="over">
            <div class="margin-start:10px;" style="padding-top: 20px; padding-bottom:20px; padding-right:20px; font-family:'Times New Roman', Times, serif;">
                {{-- <p style="text-align:right;padding-right:327px;line-height:10px;">
                    LAMPIRAN
                </p> --}}
                <br>
               
                <pre style="text-align:left;padding-left:400px; font-family:'Times New Roman', Times, serif;">
                                                                                                        LAMPIRAN</pre>
                <pre style="text-align:left;padding-left:400px; font-family:'Times New Roman', Times, serif;">
                                                                                                        PERJANJIAN KERJA
                                                                                                        BADAN PUSAT STATISTIK KABUPATEN JOMBANG
                                                                                                        NOMOR: 35171.{{$mitrabaru->id}}/SPK/ALL/(bulan angka)/2022</pre>
                <!-- <p style="text-align:right;padding-right:20px;line-height:10px;">BADAN PUSAT STATISTIK KABUPATEN JOMBANG</p>
                <p style="text-align:right;padding-right:56px;line-height:10px;">NOMOR: 35171.{{$mitrabaru->id}}/SPK/ALL/(bulan angka)/2022</p> -->
                <br><br>
                
                <p style="font-weight:bold ; text-align:center;">
                    DAFTAR URAIAN TUGAS, JANGKA WAKTU, NILAI PERJANJIAN, DAN BEBAN ANGGARAN
                </p>
            </div>
            <table border="1" style=" border-collapse: collapse;" class="table table-hover table-bordered changes" id="datatable">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center">No</th>
                        <th rowspan="2" class="text-center">Uraian Tugas</th>
                        <th rowspan="2" class="text-center">Jangka Waktu</th>
                        <th colspan="2" class="text-center">Target Pekerjaan</th>
                        <th rowspan="2" class="text-center">Harga Satuan</th>
                        <th rowspan="2" class="text-center">Nilai Perjanjian</th>
                        <th rowspan="2" class="text-center">Beban Anggaran</th>
                    </tr>
                    <tr>
                        <th class="text-center">Volume</th>
                        <th class="text-center">Satuan</th>
                    </tr>
                    {{-- <th scope="col">No</th>
                    <th>Uraian Kegiatan</th>
                    <th>Bulan</th>
                    <th>Jangka Waktu</th>
                    <th>Volume</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Target</th>
                    <th>Nilai Perjanjian</th>
                    <th>Beban Anggaran</th> --}}
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($data_kegiatan as $data_kegiatan )
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$data_kegiatan->nama_kegiatan}}</td>
                        <td>{{ tanggal_indonesia($data_kegiatan->tanggal_mulai)}} - {{ tanggal_indonesia($data_kegiatan->tanggal_akhir)}}</td>
                        <td>{{$data_kegiatan->volume_total}}</td>
                        <td>{{$data_kegiatan->satuan}}</td>
                        <td>{{"Rp ".format_uang($data_kegiatan->harga_satuan)}}</td>
                        {{-- <td>{{$data_kegiatan->target}}</td> --}}
                        <td data-count="{{$data_kegiatan->nilai_perjanjian}}" id="currency">{{"Rp ".format_uang($data_kegiatan->nilai_perjanjian)}}</td>
                        <td>{{$data_kegiatan->beban_anggaran}}</td>
                    </tr>
                    <?php $no++; ?>
                    @endforeach
                    {{-- @foreach($data_kegiatan as $data_kegiatan )
                    <tr>
                    
                        <th scope="row">  {{$no}}</th>
                    <td>{{$data_kegiatan->nama_kegiatan}}</td>
                    <td>{{$data_kegiatan->bulan}}</td>
                    <td>{{$data_kegiatan->tanggal_mulai}} - {{$data_kegiatan->tanggal_akhir}}</td>
                    <td>{{$data_kegiatan->volume_total}}</td>
                    <td>{{$data_kegiatan->satuan}}</td>
                    <td>{{$data_kegiatan->harga_satuan}}</td>
                    <td>{{$data_kegiatan->target}}</td>
                    <td>{{$data_kegiatan->nilai_perjanjian}}</td>
                    <td>{{$data_kegiatan->beban_anggaran}}</td>

                    </tr>
                    <?php $no++; ?>
                    @endforeach --}}
                </tbody>

                <tfoot>
                
                    <tr>
                        <th colspan="6" class="text-center" style="font-weight:normal; font-style:italic;">Terbilang: ({{terbilang($data_kegiatan->nilai_perjanjian)."Rupiah "}}) </th>
                        <td id="renderCurrency"></td>
                        <th></th>
                    </tr>
                
                </tfoot>
            </table>
        </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script src="{{asset('template/assets/DataTables/Button-2.2.3/js/buttons.jqueryui.min.js')}}"></script>

    <script type="text/javascript">
      let bulan = $("#filter-bulan").val()
      
      DataTable.datetime('D MMM YYYY');
      $(document).ready(function() {
        $('#datatable').DataTable({
            paging: false, 
            info: false
        });
      });

    </script>

<script type="text/javascript">
    const currency = document.querySelectorAll('#currency')
    const curr = document.querySelector('#renderCurrency')
    const changes = document.querySelector('.changes')
    console.log(changes);
    
    setInterval(function() {
        let count = 1;
        const setCount = document.querySelectorAll('.sorting_1');
        let item = Array.from(setCount).map((elem)=>{
            elem.innerHTML=`${count}`

            count = count + 1;
        })
        
        const currency = document.querySelectorAll('#currency')
        let dataCurrency = 0
        currency.forEach(data => {
            dataCurrency += parseInt(data.dataset.count)
        })
        curr.innerHTML = `Rp ${formatCurrency(dataCurrency)}`
    }, 500);

    // changes.addEventListener('change',()=>{
    //     currency.forEach(data => {
    //    dataCurrency+= parseInt(data.dataset.count)
    // })
    // console.log(curr);
    // curr.innerHTML = dataCurrency
    // })
    $(".filter").on('change', function() {
        // console.log("Filter ini");
        bulan = $("#filter-bulan").val()
        console.log(bulan);
        table.ajax.reload(null, false)
    })
    const formatCurrency = (bilangan) => {
        let reverse = bilangan.toString().split('').reverse().join('')
        let ribuan = reverse.match(/\d{1,3}/g);
        return ribuan = ribuan.join('.').split('').reverse().join('');

    }
    const printData = () => {
        const label = document.querySelector("#datatable_filter")
        console.log(label);
        label.style.display = "none"
        var divToPrint = document.getElementById("over");
        let newWin = window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }
</script>
</main>