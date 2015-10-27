@section('tahap.perencanaan.modal.id', 'modal-tahap-perencanaan')
@section('tahap.perencanaan.modal.title', 'Tahap Perencanaan')
@section('tahap.perencanaan.modal.form.action', nusp_asset('api/tahap-perencanaan'))

@section('tahap.perencanaan.modal.body')	
	<div class="row">&nbsp;</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<label class="control-label">Klik salah satu tahapan di bawah :</label>
		</div>
	</div>		
	<div class="row">&nbsp;</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahapperencanaanojttimsks" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-2-ojt-tim-sks" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					OJT Tim SKS <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahapperencanaansurveykampungsendirireviewpjmpronangkis" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-2-survey-kampung-sendiri-review-pjm-pronangkis" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Survey Kampung Sendiri &amp; Review PJM Pronangkis <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahapperencanaanmusyawarahkelurahankedua" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-2-musyawarah-kelurahan-2" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Musyawarah Kelurahan II <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahapperencanaanpenyusunandokumennuap" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-2-penyusunan-dokumen-nuap" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Penyusunan Dokumen NUAP <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahapperencanaanverifikasidankonsolidasinuap" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-2-verifikasi-konsolidasi-nuap" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Verifikasi &amp; Konsolidasi Dokumen NUAP <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahapperencanaanrevisidokumennuap" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-2-revisi-dokumen-nuap" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Revisi Dokumen NUAP <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahapperencanaanmusyawarahkelurahanketiga" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-2-musyawarah-kelurahan-3" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Musyawarah Kelurahan III <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahapperencanaanpenyusunanrkm" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-2-penyusunan-rkm" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Penyusunan RKM <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahapperencanaanverifikasifinalisasidokumenrkm" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-2-verifikasi-finalisasi-rkm" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Verifikasi &amp; Finalisasi RKM <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
@endsection

@section('tahap.perencanaan.modal.close', '<i class="fa fa-arrow-left"></i> Kembali Ke Tahap Kegiatan')
@section('tahap.perencanaan.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-kegiatan"')
@section('tahap.perencanaan.modal.submit.class', 'hide')





@include('modal', ['namespace' => 'tahap.perencanaan'])


 
