<!-- App's Basic Js  -->
<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/metisMenu.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ URL::asset('assets/js/waves.min.js') }}"></script>
<script src="{{ URL::asset('../node_modules/izitoast/dist/js/iziToast.js') }}"></script>
<script src="{{ URL::asset('../node_modules/timepicker/jquery.timepicker.min.js') }}"></script>
<script src="{{ URL::asset('../node_modules/datepair.js/dist/datepair.min.js') }}"></script>
 @yield('script')

<!-- App js-->
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
<script type="text/javascript">
	// $(document).ajaxStart(function(){
	//     $("#wait").css("display", "block");
	// });
	// $(document).ajaxComplete(function(){
	//     $("#wait").css("display", "none");
	// });
</script>
@yield('script-bottom')

