
<div class="card shadow-box">
    <div class="card-item">
        <!-- img -->
        <div>
            <h3 class="subtitle">@lang('Project Proposal')</h3>
            <p> {{$data['description']}} </p>
        </div>

        <div class="data">
            <ul>
                <li><strong>@lang('Proposser Name') : </strong> {{$data['name']}} ({{$data['designation']}}) </li>
                <li><strong>@lang('Company') : </strong> {{$data['company_name']}} <a href="{{$data['url']}}">({{$data['url']}})</a>  </li>
                <li><strong>@lang('Company Email') : </strong> {{$data['email']}} ({{$data['phone']}}) </li>
                <li><strong>@lang('Budget') : </strong> {{$data['budget']}} @lang('USD') </li>
                <li><strong>@lang('Project Duration') : </strong> {{$data['name']}} (Quantity:{{$data['quantity']}}) </li>
               
            </ul>
        </div>
    </div>
</div>

<style>
    
.card {
    width: 24%;
  margin: 0 auto;
}
.card-item {
    padding: 30px 20px;
}
p{
    color: gray;
    text-align: justify;
}
li{
    color: gray;
    line-height: 1.5;
}
.shadow-box {
    box-shadow: 0px 3px 20px #00000028;
    background: #fff;
}
@media print, screen and (max-width: 1024px) {
    .card {
        width: 48%;
        margin-bottom: 40px;
    }
  
}
@media print, screen and (max-width: 768px) {
    .card-list {
        display: block; 
    }
   .card {
        width: 100%;
    }
}
</style>

    <!--/100% body table-->
