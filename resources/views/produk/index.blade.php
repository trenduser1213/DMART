@extends('layouts/nav')
{{-- <div class="content-wrapper"> --}}
@section('view')
<section class="content-header">
    <h1>
        Produk
        <small>Version 2.0</small>
    </h1>
</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table Kategori</h3>
            <button id="myBtn" onclick="addForm('{{ route('kategori.store') }}')" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Kategori</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="tableKategori" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="5%">no</th>
                        <th>Nama Produk</th>
                        <th>Merk</th>
                        <th>Kategori</th>
                        <th>Harga Beli</th>
                        <th>Harga jual</th>
                        <th>diskon</th>
                        <th>stok</th>
                        <th width="10%"><i class="fa fa-gear"></i>action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th width="5%">no</th>
                        <th>Nama Produk</th>
                        <th>Merk</th>
                        <th>Kategori</th>
                        <th>Harga Beli</th>
                        <th>Harga jual</th>
                        <th>diskon</th>
                        <th>stok</th>
                        <th width="10%"><i class="fa fa-gear"></i>action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</section>


@includeIf('kategori.form')
@endsection
@push('script')
<script>
    let table;

    $(function() {
        table = $('#tableKategori').DataTable({
            paging: true
            , lengthChange : true
            , searching : true
            , ordering : true
            , info : true
            , autoWidth : false,
            ajax        : {
                  url     :'{{ route('produk.data')}}',
            },
            columns :[
              {data : 'DT_RowIndex', searchable: false, sortable: false },
            //   {data : 'nama_produk','merk','id_kategori','harga_beli','harga_jual','diskon','stok'},
                {data : 'nama_produk'},
                {data : 'merk'},
                {data : 'id_kategori'},
                {data : 'harga_beli'},
                {data : 'harga_jual'},
                {data : 'diskon'},
                {data : 'stok'},
              {data : 'aksi', searchable: false, sortable: false },
            ]
        });
        $('#myModal').validator().on('submit', function(e) {
            if (! e.preventDefault()) {
                $.ajax({
                        url: $('#myModal form').attr('action'), 
                        type: 'post', 
                        data: $('#myModal form').serialize(),
                    })
                    .done((response) => {
                      $('#myModal').modal('hide');
                      table.ajax.reload();
                    })
                    .fail((errors)=>{
                      alert('tidak tersimpan');
                      return;
                    })
            }
        });
    });

</script>
<script>
    function addForm(url) {
        $("#myModal").modal('show');
        $("#myModal .modal-title").text('Tambah kategori');
        $('#myModal form')[0].reset();
        $('#myModal form').attr('action', url);
        $('#myModal [name=_method]').val('post');
        $('#myModal [name=nama_kategori]').focus();
    }
    function editForm(url){
        $("#myModal").modal('show');
        $("#myModal .modal-title").text('Edit kategori');
        $('#myModal form')[0].reset();
        $('#myModal form').attr('action', url);
        $('#myModal [name=_method]').val('put');
        $('#myModal [name=nama_kategori]').focus();
        $.get(url)
          .done((response)=>{
            $('#myModal [name=nama_kategori]').val(response.nama_kategori);
          })
          .fail((errors)=>{
              alert("Data Tidak Muncul");
          });
    }
    function hapusData(url){
      if(confirm('Yakin Hapus Kategori')){
        $.post(url,{
         '_token' : $('[name=csrf-token').attr('content'),
         '_method' : 'delete'
        })
        .done((response)=>{
          alert('Data Terhapus');
          table.ajax.reload();
        })
        .fail((errors)=>{
          alert('Tidak Terhapus');
          return;
        })
      }
    }

</script>
@endpush
{{-- </div> --}}
{{-- <h2>kategori</h2> --}}
