@extends('layouts.nav')
@section('content')
<input id="search" type="text" placeholder="Search Process"/>

<section class="main">
    <div class="process">
        <div class="process-image">
            <img src="{{asset('images/logo.png')}}" alt=""/>
        </div>
        <div class="process-body">
            <div class="process-title">
                <h3>Install and configure Laravel<span class="user">By amshel</span></h3>
            </div>
            <div class="process-detail">
                Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit. 
                Quisque sapien velit, aliquet 
                eget commodo nec, auctor a 
                sapien. Nam eu neque 
                vulputate diam rhoncus 
                faucibus. Curabitur quis 
                varius libero. Lorem... <a class="button" href="">Read More</a>
            </div>
        </div>
    </div>
    
    
    <div class="process">
        <div class="process-image">
            <img src="{{asset('images/etl.jpeg')}}" alt=""/>
        </div>
        <div class="process-body">
            <div class="process-title">
                <h3>Configuring Mutall Studio<span class="user">By Muraya</span></h3>
            </div>
            <div class="process-detail">
                Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit. 
                Quisque sapien velit, aliquet 
                eget commodo nec, auctor a 
                sapien. Nam eu neque 
                vulputate diam rhoncus 
                faucibus. Curabitur quis 
                varius libero. Lorem... <a class="button" href="">Read More</a>
            </div>
        </div>
    </div>
    
        <div class="process">
        <div class="process-image">
            <img src="{{asset('images/netbeans.png')}}" alt=""/>
        </div>
        <div class="process-body">
            <div class="process-title">
                <h3>Connecting netbeans to remote server<span class="user">By Samuel</span></h3>
            </div>
            <div class="process-detail">
                Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit. 
                Quisque sapien velit, aliquet 
                eget commodo nec, auctor a 
                sapien. Nam eu neque 
                vulputate diam rhoncus 
                faucibus. Curabitur quis 
                varius libero. Lorem... <a class="button" href="">Read More</a>
            </div>
        </div>
    </div>
 </section>
@endsection