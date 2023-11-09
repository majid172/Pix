
<div class="card shadow-box">
    <div class="card-item">
        <!-- img -->
        <div>
            <h3 class="subtitle">@lang('Free Trial')</h3>
            <p> {{$data['instruction']}} </p>
        </div>

        <div class="data">
            <ul>
                <li><strong>@lang('Name') : </strong> {{$data['name']}} </li>
                <li><strong>@lang('Email') : </strong> {{$data['email']}}  </li>
                <li><strong>@lang('Contact Number') : </strong> {{$data['phone']}} </li>
                <li><strong>@lang('Service') : </strong> {{$data['service']}} (Quantity:{{$data['quantity']}}) </li>
               
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
