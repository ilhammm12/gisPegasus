<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
<head>
	@include('admin.includes.head')
</head>
<body>
	{{-- HEADER --}}
		@include('admin.includes.header')
	{{-- MAIN --}}
		@yield('content')
	{{-- FOOTER --}}
		@include('admin.includes.footer')

	@include('admin.includes.script')
</body>
</html>
