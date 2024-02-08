
@extends('layouts.dashboard_master')

@section('content')

<div class="row column_title">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Site Identy</h2>
       </div>
    </div>
 </div>


        <div class="row column1">
            <div class="col-md-12">
               <div class="white_shd full margin_bottom_30">

                  <div class="full price_table padding_infor_info">
                     <div class="row">
                        <!-- Form -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="table_price full">
                              <div class="inner_table_price">
                                 <div class="price_table_head blue1_bg">
                                    <h2>Site Title</h2>
                                 </div>
                                 <div class="price_table_inner">
                                    <form action="{{ route('title.update',$identy->id) }}" method="POST">
                                        @csrf

                                        <input type="text" class="form-control mt-2 @error('site_title') is-invalid @enderror" name="site_title" value="{{ $identy->site_title }}">
                                        @error('site_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="price_table_bottom">
                                           <div class="center"><button class="main_bt" >Update</button></div>
                                        </div>
                                    </form>

                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="table_price full">
                               <div class="inner_table_price">
                                  <div class="price_table_head blue1_bg">
                                     <h2>Footer Text</h2>
                                  </div>
                                  <div class="price_table_inner">
                                     <form action="{{ route('footer.update', $identy->id) }}" method="POST">
                                         @csrf

                                         <input type="text" class="form-control mt-2 @error('footer') is-invalid @enderror" name="footer" value="{{ $identy->footer }}">
                                         @error('footer')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                         @enderror

                                         <div class="price_table_bottom">
                                            <div class="center"><button class="main_bt" >Update</button></div>
                                         </div>
                                     </form>

                                  </div>
                               </div>
                            </div>
                         </div>


                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="table_price full">
                               <div class="inner_table_price">
                                  <div class="price_table_head blue1_bg">
                                     <h2>Logo</h2>
                                  </div>
                                  <div class="price_table_inner text-center">
                                    <form action="{{ route('favicon.update',$identy->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div>
                                            <p class="mt-2">Favicon</p>
                                            <img class="mb-2 mt-2 " src="{{ asset('frontend_asset/assets/img') }}/{{ $identy->favicon }}" alt="">
                                            <input type="file" class="form-control mt-2 @error('favicon') is-invalid @enderror" name="favicon">
                                                @error('favicon')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                        </div>
                                        <div>
                                            <p class="mt-2">Logo</p>

                                            <img class="mb-2 mt-2 text-center" src="{{ asset('frontend_asset/assets/img') }}/{{ $identy->logo }}" alt="">
                                            <input type="file" class="form-control mt-2 @error('logo') is-invalid @enderror" name="logo">
                                                @error('logo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <div class="price_table_bottom">
                                                    <div class="center"><button class="main_bt" >Update</button></div>
                                                </div>
                                        </div>
                                    </form>

                                  </div>
                               </div>
                            </div>
                        </div>

                        {{-- About Info --}}
                        <div class="col-12 col-xs-12">
                            <div class="table_price full">
                               <div class="inner_table_price">
                                  <div class="price_table_head blue1_bg">
                                     <h2>About</h2>
                                  </div>
                                  <div class="price_table_inner text-center">
                                    <form action="{{ route('about.update',$identy->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div>
                                            <h4 class="mt-2">Banner</h4>
                                            <img class="mb-2 mt-2 img-fluid" src="{{ asset('frontend_asset/assets/img') }}/{{ $identy->about_image }}" alt="" style="max-width: 700px">
                                            <input type="file" class="form-control mt-2 @error('about_image') is-invalid @enderror" name="about_image">
                                                @error('about_image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                        </div>
                                        <div>
                                            <h4 class="mt-2">About Text</h4>
                                            <textarea name="about_text" class="form-control mt-2 @error('about_text') is-invalid @enderror" id="" cols="30" rows="10">{{ $identy->about_text }}</textarea>

                                                @error('about_text')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <div class="price_table_bottom">
                                                    <div class="center"><button class="main_bt" >Update</button></div>
                                                </div>
                                        </div>
                                    </form>

                                  </div>
                               </div>
                            </div>
                        </div>

                        {{-- Contact page info --}}

                        <div class="col-12 col-xs-12">
                            <div class="table_price full">
                               <div class="inner_table_price">
                                  <div class="price_table_head blue1_bg">
                                     <h2>Contact</h2>
                                  </div>
                                  <div class="price_table_inner text-center">
                                    <form action="{{ route('contact.update',$identy->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div>
                                            <h4 class="mt-2">Banner</h4>
                                            <img class="mb-2 mt-2 img-fluid" src="{{ asset('frontend_asset/assets/img') }}/{{ $identy->contact_image }}" alt="" style="max-width: 700px">
                                            <input type="file" class="form-control mt-2 @error('contact_image') is-invalid @enderror" name="contact_image">
                                                @error('contact_image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                        </div>
                                        <div>
                                            <h4 class="mt-2">Contact Text</h4>
                                            <textarea name="contact_text" class="form-control mt-2 @error('contact_text') is-invalid @enderror" id="" cols="30" rows="10">{{ $identy->contact_text }}</textarea>

                                                @error('contact_text')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <div class="price_table_bottom">
                                                    <div class="center"><button class="main_bt" >Update</button></div>
                                                </div>
                                        </div>
                                    </form>

                                  </div>
                               </div>
                            </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>



        @section('footer_script')
        @if (session('success'))
        <script>
            const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })

            Toast.fire({
            icon: 'success',
            title: "{{ session('success') }}",
            })
        </script>

        @endif

        @if (session('error_alert'))
        <script>
            const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })

            Toast.fire({
            icon: 'error',
            title: "{{ session('error_alert') }}",
            })
        </script>

        @endif

        @endsection

@endsection
