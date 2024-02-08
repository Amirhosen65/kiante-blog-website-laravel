@extends('layouts.dashboard_master')

@section('content')

<div class="full inbox_inner_section">
    <div class="row">
       <div class="col-md-12">
          <div class="full padding_infor_info">
             <div class="mail-box">

                <aside class="lg-side">
                   <div class="inbox-head">
                      <h3>Inbox</h3>
                      <form action="#" class="pull-right position search_inbox">
                         <div class="input-append">
                            <input type="text" class="sr-input" placeholder="Search Mail">
                            <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                         </div>
                      </form>
                   </div>
                   <div class="inbox-body">
                      <div class="mail-option">
                         <div class="chk-all">
                            <div class="btn-group">
                               <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false"> All <i class="fa fa-angle-down "></i></a>
                               <ul class="dropdown-menu">
                                  <li><a href="#"> None</a></li>
                                  <li><a href="#"> Read</a></li>
                                  <li><a href="#"> Unread</a></li>
                               </ul>
                            </div>
                         </div>
                         <div class="btn-group">
                            <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                            <i class=" fa fa-refresh"></i>
                            </a>
                         </div>
                         <div class="btn-group hidden-phone">
                            <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                            More
                            <i class="fa fa-angle-down "></i>
                            </a>
                            <ul class="dropdown-menu">
                               <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                               <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                               <li class="divider"></li>
                               <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                            </ul>
                         </div>
                         <div class="btn-group">
                            <a data-toggle="dropdown" href="#" class="btn mini blue">
                            Move to
                            <i class="fa fa-angle-down "></i>
                            </a>
                            <ul class="dropdown-menu">
                               <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                               <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                               <li class="divider"></li>
                               <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                            </ul>
                         </div>
                         <ul class="unstyled inbox-pagination">
                            <li><span>1-50 of 234</span></li>
                            <li>
                               <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                            </li>
                            <li>
                               <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                            </li>
                         </ul>
                      </div>
                      <table class="table table-inbox table-hover">
                         <tbody>
                            @forelse ($mailbox as $mail)
                            <tr class="">
                                <a href="{{ route('contact.mailbox.view', $mail->id) }}">
                               <td class="inbox-small-cells">
                                  <div class="custom-control custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="customCheck3">
                                     <label class="custom-control-label" for="customCheck3"></label>
                                  </div>
                               </td>

                               <td class="view-message dont-show">{{ $mail->name }}</td>
                               <td class="view-message">{{ $mail->subject }}</td>
                               <td class="view-message inbox-small-cells"></td>
                               <td class="view-message text-right">
                                {{ \Carbon\Carbon::parse($mail->created_at)->format("M d, Y") }}
                               </td>
                               <td class="view-message text-right">
                                <a href="{{ route('contact.mailbox.view', $mail->id) }}" class="btn btn-primary btn-sm">View</a>
                               </td>
                            </a>
                            </tr>
                            @empty
                            <h3 class="text-center">Mailbox Empty!</h3>
                            @endforelse
                         </tbody>
                      </table>
                   </div>
                </aside>
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection

@section('footer_script')

@endsection

