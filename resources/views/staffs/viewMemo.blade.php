@extends('layouts.staffs')

@section('contentstaffs')

   {{--@foreach($memos as $memo)--}}
       {{--{{$memo}}--}}
       {{--@endforeach--}}
   <div class="row">
       <div class="col-md-12">
           <div class="card-box card shadow">
               <div class="card-body border-bottom">
                   <div class="clearfix">
                       <div class="float-left">
                           <a class="navbar-brand" href=""><img alt="..." class="navbar-brand-img main-logo" src="{{asset('assets/img/brand/futo.png')}}"> </a>

                           <p style="text-align: center"><strong>Federal University of Science and Technology Memo</strong></p>
                       </div>

                       <div class="float-right">
                           <h3 class="mb-0">Date: 12-08-2018</h3>
                       </div>
                   </div>
               </div>

               <div class="card-body">
                   <div class="mb-0">
                       <div class="row">
                           <div class="col-md-12">
                               <div class="float-left">
                                   <h4><strong>Mailed From: </strong></h4>
                                   <address>
                                       <strong>John Admin</strong><br>
                                       Federal University of Science and Technology,
                                       Owerri, Imo State<br>
                                       Phone: +234 8060860984
                                   </address>
                               </div>
                               <div class="float-right text-right">
                                   <h4><strong>Mailed To: </strong></h4>
                                   <address>
                                       Name: <strong>{{$memo->user->fname."  ".$memo->user->lname}} </strong><br>
                                       Staff ID:: <strong>{{$memo->user->staff_idNo}}</strong>
                                        <br>
                                       Phone::{{$memo->user->phone}}
                                   </address>
                               </div>
                           </div><!-- end col -->

                       </div>
                       <!-- end row -->

                       <div class="row mt-4">
                           <div class="col-md-12">

                               <div class="media-heading mt-3" >
                                   <p style="font-size:30px !important; text-align: center; text-decoration: underline">{{$memo->memo_title}}</p>
                               </div>

                               <p>{{$memo->memo_body}}</p>

                               {{--<p>{{$memos['memo_body']}}</p>--}}
                               {{--<div class="table-responsive">--}}
                                   {{--<table class="table table-bordered m-t-30 text-nowrap">--}}
                                       {{--<thead >--}}
                                       {{--<tr>--}}
                                           {{--<th>Code</th>--}}
                                           {{--<th>Description</th>--}}
                                           {{--<th>Quantity</th>--}}
                                           {{--<th>Units</th>--}}
                                           {{--<th>Unit Price</th>--}}
                                           {{--<th class="text-right">Amount(USD)</th>--}}
                                       {{--</tr>--}}
                                       {{--</thead>--}}
                                       {{--<tbody>--}}
                                       {{--<tr>--}}
                                           {{--<td>#2578</td>--}}
                                           {{--<td>LCD</td>--}}
                                           {{--<td>2</td>--}}
                                           {{--<td>01</td>--}}
                                           {{--<td>$134.00</td>--}}
                                           {{--<td class="text-right">$134.50 (tax also)</td>--}}
                                       {{--</tr>--}}
                                       {{--<tr>--}}
                                           {{--<td>#4587</td>--}}
                                           {{--<td>Brochure Design</td>--}}
                                           {{--<td>01</td>--}}
                                           {{--<td>2</td>--}}
                                           {{--<td>$250.00</td>--}}
                                           {{--<td class="text-right">$310.50 (tax also)</td>--}}
                                       {{--</tr>--}}
                                       {{--<tr>--}}
                                           {{--<td>#5345</td>--}}
                                           {{--<td>Down Coat</td>--}}
                                           {{--<td>05</td>--}}
                                           {{--<td>3</td>--}}
                                           {{--<td>$450.00</td>--}}
                                           {{--<td class="text-right">$490.70 (tax also)</td>--}}
                                       {{--</tr>--}}
                                       {{--<tr>--}}
                                           {{--<td>#8765</td>--}}
                                           {{--<td>Print Ad - Basic - Color</td>--}}
                                           {{--<td>04</td>--}}
                                           {{--<td>4</td>--}}
                                           {{--<td>$550.90</td>--}}
                                           {{--<td class="text-right">$550.90 (tax also)</td>--}}
                                       {{--</tr>--}}
                                       {{--</tbody>--}}
                                   {{--</table>--}}
                               {{--</div>--}}
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xl-4 col-12 offset-xl-8">
                               {{--<p class="text-right mt-3 font-weight-600">Signature</p>--}}
                               <p class="text-right font-weight-600">Signed Management</p>
                               {{--<p class="text-right font-weight-600">VAT: 25.9%</p>--}}
                               {{--<hr>--}}
                               {{--<h4 class="text-right text-xl"></h4>--}}
                           </div>
                       </div>
                       <hr>
                       <div class="d-print-none">
                           <div class="float-right">
                               <a href="javascript:window.print()" class="btn btn-primary"><i class="fe fe-file"></i> print</a>
                           </div>
                           <div class="clearfix"></div>
                       </div>
                   </div>
               </div>

           </div>
       </div>
   </div>
@stop