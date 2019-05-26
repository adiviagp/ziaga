@extends('home.layout')
@section('title', 'Daftar - ZIAGA')
@section('content')
<style>
input::placeholder{
  color:rgba(255, 200, 55, 0.85) !important;
}
.common-input {
  color: #000;
  border: 1px solid rgba(255, 200, 55, 0.85);
}
</style>
<section id="hubungi" style="margin-top:80px" class="contact-area pt-100 pb-100 relative">
  <div class="overlay overlay-bg"></div>
  <div style="border-radius:12px;padding:40px" class="col-lg-5 card bg-light container">
    <div class="row justify-content-center text-center">
      <div class="single-contact col-lg-6 col-md-8">
        <h2 class="text-dark"><span>DAFTAR</span></h2>
        <p class="text-dark">

                                            <!-- count error -->
                                                    @if (count($errors) > 0)
                                                      <div class="alert alert-danger imgdiv">
                                                          <strong>Whoops!</strong> There were some problems with your input.
                                                          <ul>
                                                    <!-- print  error -->
                                                              @foreach ($errors->all() as $error_val)
                                                                  <li>{{ $error_val }}</li>
                                                              @endforeach
                                                          </ul>
                                                      </div>
                                                  @endif
                                                  @if ($success_message = Session::get('success'))
                                                  <div class="alert alert-success alert-block imgdiv">
                                                      <button type="button" class="close imgdiv" data-dismiss="alert">×</button>
                                                          <strong>{{ $success_message }}</strong>
                                                  </div>
                                                  @endif
                                                  <br>        </p>
      </div>
    </div>
    <form action="{{url('/daftar')}}" method="post" class="contact-form text-dark">
        {{csrf_field()}}
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <input name="namaDepan" placeholder="First Name" class="common-input mt-20" required="" type="text">
          </div>
          <div class="col-lg-5">
            <input name="namaBelakang" placeholder="Last Name" class="common-input mt-20" required="" type="text">
          </div>
          <div class="col-lg-10">
            <input name="email" placeholder="Email Address" class="common-input mt-20" required="" type="email">
          </div>
          <div class="col-lg-10">
            <input name="password" placeholder="Password" class="common-input mt-20" required="" type="password">
          </div>
        <div class="col-lg-10 d-flex justify-content-end">
          <button type="submit" class="primary-btn white-bg d-inline-flex align-items-center mt-20"><span class="mr-10">Daftar Sekarang</span></button> <br>
        </div>
        <div class="alert-msg"></div>
        </div>
    </form>
  </div>
</section>
@endsection
@section('custom-js')
<script type="text/javascript">
$(window).scroll(function() {
var scroll = $(window).scrollTop();

if (scroll >= 20) {
    $(".default-header").addClass("bg-light");
    $(".default-header").addClass("shadow-sm");
    $(".daftar").addClass("btn btn-sm btn-outline-success text-success");
    $(".masuk").addClass("text-dark");
    $(".daftar").removeClass("text-dark");
} else {
    $(".default-header").removeClass("bg-light");
    $(".default-header").removeClass("shadow-sm");
    $(".daftar").removeClass("btn btn-sm btn-outline-success text-success");
    $(".daftar").addClass("text-dark");
}
});
</script>
@endsection
