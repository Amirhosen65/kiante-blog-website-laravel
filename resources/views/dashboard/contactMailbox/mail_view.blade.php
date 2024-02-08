@extends('layouts.dashboard_master')


@section('content')

<div class="full inbox_inner_section">
    <div class="row">
       <div class="col-md-12">
          <div class="full padding_infor_info">
             <div class="mail-box">

                <aside class="lg-side">

                    <div class="mailbox-open-content col-xl-9">

                        <div class="row">
                            <div class="col-6">
                                <span class="mailbox-open-date">{{ \Carbon\Carbon::parse($mail->created_at)->format("M j, Y, g:i A") }}</span>
                            </div>
                            <div class="col-6 col align-self-end">
                                <a href="{{ route('mail.delete', $mail->id) }}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>


                        <h5 class="mailbox-open-title">
                           Subject: {{ $mail->subject }}
                        </h5>
                        <div class="mailbox-open-author">
                            <img src="../../assets/images/avatars/avatar.png" alt="">
                            <div class="mailbox-open-author-info">
                                <span class="mailbox-open-author-info-email d-block"><b>{{ $mail->name }}</b></span>
                                <span class="mailbox-open-author-info-to">From: {{ $mail->email }}</span><br><br>
                            </div>

                        </div>
                        <div class="mailbox-open-content-email">
                            <p>
                                {{ $mail->message }}
                            </p>

                        </div>

                    </div>

                </aside>
            </div>
         </div>
      </div>
   </div>
</div>


@endsection
