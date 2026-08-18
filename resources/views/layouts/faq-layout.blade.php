@if(!empty($faqLayOut) && count($faqLayOut)>0)

@php
$i=0;

@endphp


<h3>{{$faq_title}}</h3>
                         
                         
<div class="accordion" id="faq">           





@foreach($faqLayOut as $faq)

@php
$i++;
@endphp


<div class="card">
                              <div class="card-header" id="faqhead{{$i}}">
                                  <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq{{$i}}"
                                  aria-expanded="true" aria-controls="faq1"><strong>{{ $i}} . </strong> {{$faq->question}}</a>
                              </div>
      
                              <div id="faq{{$i}}" class="collapse {{ $i==1?'active show':''}}" aria-labelledby="faqhead1" data-parent="#faq">
                                  <div class="card-body"><strong> Answer -</strong> 
                                  {!! $faq->answer !!}
                                  </div>
                              </div>
 </div>

    
    
 



@endforeach
</div>


@endif