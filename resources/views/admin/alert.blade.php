@if ($errors -> any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors-> all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger">
    {{ Session::get('error')}}
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success')}}
</div>
@endif


<!-- Trong file layout hoặc template của bạn -->
<!-- @if(Session::has('redirect'))
    <script>
        setTimeout(function() {
            window.location.replace("{{ url('/admin/main') }}"); // Thay đổi URL đích thành URL mong muốn
        }, 2000); // 2000 milliseconds = 2 giây
    </script>
@endif -->