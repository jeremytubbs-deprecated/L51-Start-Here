@if ($message = Session::get('success'))
<div class="flash-success">
  <button type="button" class="flash-close" aria-hidden="true">&times;</button>
  <span>Success: {{ $message }}</span>
</div>
{{ Session::forget('success') }}
@endif

@if ($message = Session::get('error'))
<div ng-controller="CollapseCtrl">
<div class="flash-error">
  <button type="button" class="flash-close" aria-hidden="true">&times;</button>
  <span>Error: {{ $message }}</span>
</div>
</div>
{{ Session::forget('error') }}
@endif

@if ($message = Session::get('info'))
<div class="flash-info">
  <button type="button" class="flash-close" aria-hidden="true">&times;</button>
  <span>FYI: {{ $message }}</span>
</div>
{{ Session::forget('info') }}
@endif

@if ($message = Session::get('warning'))
<div class="flash-warning">
  <button type="button" class="flash-close" aria-hidden="true">&times;</button>
  <span>Warning: {{ $message }}</span>
</div>
{{ Session::forget('warning') }}
@endif

@section('extras')
<script>
$(function() {
  $('.flash-close').on('click touchstart', function (e) {
    e.preventDefault();
    $('.flash-close').parent().hide();
  });
});
</script>
@endsection
