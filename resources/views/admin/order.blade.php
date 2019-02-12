@extends('layouts.app')

@section('content')

 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Order</div>

                    <div class="panel-body">
                        <div class="form-group">
                                <label for="user" class="control-label">Pelanggan</label>
                                    <select name="user" id="user" class="form-control" style="margin-top:5px;">
                                        @foreach($data['dataUser'] as $users)
                                            <option value="{{ $users->id_user }}">{{ $users->nama_user }}</option>
                                        @endforeach
                                    </select>
                        </div>

                        <div class="form-group" id="formOrder">
                            <div class="col-md-3">
                                <label for="masakan" class="control-label masakan">Masakan</label>
                                    <select name="masakan" id="masakan" class="form-control masakan" style="margin-top:5px;">
                                    <option value=""></option>
                                    @foreach($data['dataMasakan'] as $masakan)
                                        <option value="{{$masakan->id_masakan}}" id="opMasakan_{{$loop->iteration}}">{{ $masakan->nama_masakan }}</option>
                                    @endforeach
                                    </select>
                            </div>

                            <div class="col-md-3">
                                <label for="harga" class="control-label">Harga</label>
                                <input type="text" name="harga" id="hargaMasakan" readonly class="form-control hargaMasakan">
                            </div>

                            <div class="col-md-3">
                                <label for="qty" class="control-label">Porsi</label>
                                <input type="number" min="1" name="qty" id="qty" class="form-control qty">
                            </div>

                            <div class="col-md-3">
                                <label for="total" class="control-label">Jumlah</label>
                                <input type="text" readonly name="total" id="total" class="form-control total">
                            </div>
                        </div>
                        
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" id="addMenu" style="margin:10px 25px;">Tambah Menu</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // ini buat add element baru
    (function($){
        

        $("#addMenu").click(function(e) {
            var elementHTML = $("#formOrder").html();
			$(elementHTML).insertBefore($("#addMenu"));
            e.preventDefault();
            
		})

        $(document).on('change','.masakan',function(){
            var idMasakan;
            var indexMasakan =  $(this).index();
            console.log( 'ind +'+indexMasakan );
            idMasakan =  $("option:selected",this).val();

            if(idMasakan == ""){
                console.log('kosong')
            } else {
                $.ajax({
                    type:'POST',
                    url:'selectMenu/'+idMasakan,
                    dataType:'json',
                    headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                    success:function(response) {
                        console.log(response.harga);
                        $('.hargaMasakan').val(response.harga);

                        $(document).on('keyup','.qty',function(){
                            var qty = $(this).val();
                            console.log(qty);
                            var jml = qty * $('.hargaMasakan').val();
                            console.log(jml);
                            $('.total').val(jml);
                        })
                    }
                })
                console.log(idMasakan);
            }

            
        })

    }(jQuery));

    /* $("#tambah_file").click(function(e) {
			var elementHTML = $("#form_upload").html();
			$(elementHTML).insertBefore($("#groupButton"));
			e.preventDefault();
		}) */
    
</script>
@endpush