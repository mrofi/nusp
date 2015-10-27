@section('tahap.kegiatan.modal.id', 'modal-tahap-kegiatan')
@section('tahap.kegiatan.modal.title', 'Tahap Kegiatan')
@section('tahap.kegiatan.modal.form.action', nusp_asset('api/tahap-kegiatan'))

@section('tahap.kegiatan.modal.body')
	<div class="row">&nbsp;</div>	
	<div class="row col-md-8 col-md-offset-2">
		<div class="col-sm-6 text-center">
			<div class="btn btn-lg data-transport" data-target="#modal-tahap-persiapan" data-toggle="modal">
				<input type="text" class="knob" id="persiapan" value="0" data-width="90" data-height="90" readonly="readonly" data-fgColor="#f56954">
	            <h3 class="knob-label">Persiapan</h3>
	            <div class="row">&nbsp;</div>
			</div>
		</div>
		<div class="col-sm-6 text-center">
			<div class="btn btn-lg data-transport" data-target="#modal-tahap-perencanaan" data-toggle="modal">
				<input type="text" class="knob" id="perencanaan" value="0" data-width="90" data-height="90" readonly="readonly" data-fgColor="#f56954">
	            <h3 class="knob-label">Perencanaan</h3>
	            <div class="row">&nbsp;</div>
			</div>
		</div>
		<div class="col-sm-6 text-center">
			<div class="btn btn-lg data-transport" data-target="#modal-tahap-konstruksi" data-toggle="modal">
				<input type="text" class="knob" id="konstruksi" value="0" data-width="90" data-height="90" readonly="readonly" data-fgColor="#f56954">
	            <h3 class="knob-label">Konstruksi</h3>
	            <div class="row">&nbsp;</div>
			</div>
		</div>
		<div class="col-sm-6 text-center">
			<div class="btn btn-lg data-transport" data-target="#modal-tahap-pasca-konstruksi" data-toggle="modal">
				<input type="text" class="knob" id="pascaKonstruksi" value="0" data-width="90" data-height="90" readonly="readonly" data-fgColor="#f56954">
	            <h3 class="knob-label">Pasca Konstuksi</h3>
	            <div class="row">&nbsp;</div>
			</div>
		</div>
	</div>
@endsection



@section('reportOnly.tahap.kegiatan.modal.id', 'modal-report-tahap-kegiatan')
@section('reportOnly.tahap.kegiatan.modal.title', 'Tahap Kegiatan')
@section('reportOnly.tahap.kegiatan.modal.form.action', nusp_asset('api/tahap-kegiatan'))
@section('tahap.kegiatan.modal.close', 'Tutup')
@section('reportOnly.tahap.kegiatan.modal.close', 'Tutup')
@section('tahap.kegiatan.modal.submit.class', 'hide')
@section('reportOnly.tahap.kegiatan.modal.submit.class', 'hide')

@section('reportOnly.tahap.kegiatan.modal.body')	

@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap.kegiatan' : 'reportOnly.tahap.kegiatan'])


 
