@extends('template.base')

@section('style')
{!! $exModuleSetting->output_css() !!}
@endsection

@section('script')
{!! $exModuleSetting->output_pre_scripts() !!}
@endsection

@section('after_script')
{!! $exModuleSetting->output_after_scripts() !!}
@endsection


@section('content')
<center>

<!-- 編集不可 start -->
<div class="body_tbl">

{!! $exModuleSetting->output_before_header() !!}
@php 
echo SMP_TEMPLATE_HEADER;
@endphp
{!! $exModuleSetting->output_header() !!}
@php 
echo SMP_TEMPLATE_FORM;
@endphp
{!! $exModuleSetting->output_contents() !!}
@php 
echo SMP_TEMPLATE_FOOTER;
@endphp
{!! $exModuleSetting->output_footer() !!}

</div>
<!-- 編集不可 end -->


</center>
@endsection