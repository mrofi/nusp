@section('tahap2.survey.kampung.review.pjm.pronangkis.modal.id', 'modal-tahap-2-survey-kampung-sendiri-review-pjm-pronangkis')
@section('tahap2.survey.kampung.review.pjm.pronangkis.modal.title', 'Survey Kampung Sendiri &amp; Review PJM Pronangkis')
@section('tahap2.survey.kampung.review.pjm.pronangkis.modal.form.action', nusp_asset('api/tahap-2/survey-review-pjm-pronangkis'))

@section('tahap2.survey.kampung.review.pjm.pronangkis.modal.body')	
	{!! nusp_forms($formTahapPerencanaanSurveyKampungSendiriReviewPjmPronangkis) !!}
@endsection

@section('tahap2.survey.kampung.review.pjm.pronangkis.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')
@section('reportOnly.tahap2.survey.kampung.review.pjm.pronangkis.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')


@section('reportOnly.tahap2.survey.kampung.review.pjm.pronangkis.modal.id', 'modal-report-tahap-2-survey-kampung-sendiri-review-pjm-pronangkis')
@section('reportOnly.tahap2.survey.kampung.review.pjm.pronangkis.modal.title', 'Survey Kampung Sendiri &amp; Review PJM Pronangkis')
@section('reportOnly.tahap2.survey.kampung.review.pjm.pronangkis.modal.form.action', nusp_asset('api/tahap-2/survey-review-pjm-pronangkis'))
@section('reportOnly.tahap2.survey.kampung.review.pjm.pronangkis.modal.close', 'Tutup')
@section('reportOnly.tahap2.survey.kampung.review.pjm.pronangkis.modal.submit.class', 'hide')

@section('reportOnly.tahap2.survey.kampung.review.pjm.pronangkis.modal.body')	
	{!! nusp_staticForms($formTahapPerencanaanSurveyKampungSendiriReviewPjmPronangkis) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap2.survey.kampung.review.pjm.pronangkis' : 'reportOnly.tahap2.survey.kampung.review.pjm.pronangkis'])


 
