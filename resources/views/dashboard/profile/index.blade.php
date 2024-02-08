
@extends('layouts.dashboard_master')

@section('content')

<div class="row column_title">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Profile</h2>
       </div>
    </div>
 </div>


        <div class="row column1">
            <div class="col-md-12">
               <div class="white_shd full margin_bottom_30">
                  <div class="full graph_head">
                     <div class="heading1 margin_0">
                        <h2>Profile Update</h2>
                     </div>
                  </div>
                  <div class="full price_table padding_infor_info">
                     <div class="row">
                        <!-- Form -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="table_price full">
                              <div class="inner_table_price">
                                 <div class="price_table_head blue1_bg">
                                    <h2>Name Update</h2>
                                 </div>
                                 <div class="price_table_inner">
                                    <form action="{{ route('profile.name.update',auth()->id()) }}" method="POST">
                                        @csrf

                                        <input type="text" class="form-control mt-2 @error('name') is-invalid @enderror" name="name" value="{{ auth()->user()->name }}">
                                        @error('name')
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
                                     <h2>Email Update</h2>
                                  </div>
                                  <div class="price_table_inner">
                                    <form action="{{ route('profile.email.update',auth()->id()) }}" method="POST">
                                        @csrf

                                        <input type="email" class="form-control mt-2 @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email }}">
                                            @error('email')
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
                                     <h2>Image Update</h2>
                                  </div>
                                  <div class="price_table_inner">
                                    <form action="{{ route('profile.image.update',auth()->id()) }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <img src="{{ asset('uploads/default') }}/{{ auth()->user()->image }}" class="img-thumbnail align-middle" style="height: 250px;">
                                        <input type="file" class="form-control mt-2 @error('image') is-invalid

                                        @enderror" name="image">
                                        @error('image')
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
                                     <h2>Password Update</h2>
                                  </div>
                                  <div class="price_table_inner">
                                    <form action="{{ route('profile.password.update',auth()->id()) }}" method="POST">
                                        @csrf

                                        <input type="password" class="form-control mt-2 @error('current_password') is-invalid @enderror" name="current_password" placeholder="Enter Current Password">
                                        @error('current_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <input type="password" class="form-control mt-2 @error('password') is-invalid @enderror"  name="password" placeholder="Enter New Password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <input type="password" class="form-control mt-2 @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Enter Confirm Password">
                                        @error('password_confirmation')
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
