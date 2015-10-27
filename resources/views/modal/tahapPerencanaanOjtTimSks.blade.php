@section('tahap2.ojt.timsks.modal.id', 'modal-tahap-2-ojt-tim-sks')
@section('tahap2.ojt.timsks.modal.title', 'OJT Tim SKS')
@section('tahap2.ojt.timsks.modal.form.action', nusp_asset('api/tahap-2/ojt-tim-sks'))

@section('tahap2.ojt.timsks.modal.body')	
	{!! nusp_forms($formTahapPerencanaanOjtTimSks) !!}
@endsection

@section('tahap2.ojt.timsks.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')
@section('reportOnly.tahap2.ojt.timsks.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')


@section('reportOnly.tahap2.ojt.timsks.modal.id', 'modal-report-tahap-2-ojt-tim-sks')
@section('reportOnly.tahap2.ojt.timsks.modal.title', 'OJT Tim SKS')
@section('reportOnly.tahap2.ojt.timsks.modal.form.action', nusp_asset('api/tahap-2/ojt-tim-sks'))
@section('reportOnly.tahap2.ojt.timsks.modal.close', 'Tutup')
@section('reportOnly.tahap2.ojt.timsks.modal.submit.class', 'hide')

@section('reportOnly.tahap2.ojt.timsks.modal.body')	
	{!! nusp_staticForms($formTahapPerencanaanOjtTimSks) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap2.ojt.timsks' : 'reportOnly.tahap2.ojt.timsks'])


 
