@extends('layouts.layout')
@section('style')
<style>
    .h-800{
        height: 800px;
    }
    .h-Rader{
        height: 220px;
    }
    .opacity0{
        opacity: 0;
    }
    .opacity1{
        opacity: 1;
    }
    :root {
       --animate-duration: 2s;
    }
</style>
@endsection
@section('content')
<section class="conA">
    <div class="container-fluid">
        <h1>PortFolio</h1>
    </div>
</section>
<section>
    <div id="box1" class="container opacity0">
        <h2 class="sech2">Skill</h2>
        <div class="row">
            <div class="col-lg-3 mx-auto Rader">
                <canvas id="myRaderChart1" style="width:100px; height:100px;"></canvas>
            </div>
            <div class="col-lg-3 mx-auto Rader">
                <canvas id="myRaderChart2" style="width:100px; height:100px;"></canvas>
            </div>
            <div class="col-lg-3 mx-auto Rader">
                <canvas id="myRaderChart3" style="width:100px; height:100px;"></canvas>
            </div>
        </div>
    </div>
</section>
<section>
<div id="box2" class="container opacity0">
    <div class="row">
        <div class="col-3 mx-auto" style="height: 140px;">
            <span>5: 実務で３年以上経験がある</span><br>
            <span>4: 実務で使える</span><br>
            <span>3: 実務でそこそこ使える</span><br>
            <span>2: 独学でそこそこ使える</span><br>
            <span>1 :初学習者レベル</span><br>
        </div>
    </div>
</div>
</section>
<section>
    <div id="box3" class="container opacity0">
        <h2 class="sech2">Profile</h2>
        <div class="row">
            <div class="col-4" style="height: 300px;">
                <div class="ml-3"><i class="icon3 fas fa-pen-fancy"></i><span>氏名：布川　浩平</span></div>
                <div class="ml-3"><i class="icon3 fas fa-hourglass-half"></i><span class="ml-2">年齢：２８歳</span></div>
                <div class="ml-3"><i class="icon3 fas fa-mars"></i><span class="ml-2">性別：男性</span></div>
            </div>
            <div class="col-8" style="height: 300px;">
                <span>2014年　『Tsurumen』（ラーメン屋）1006 Kapahulu AveHonolulu, HI 96816　三ヶ月代理店長として勤務</span><br>
                <span>2015年　近畿大学　経営学部　ITビジネスコース卒業</span><br>
                <span>同年　　　INUS Australia Education 卒業　（ワーキングホリデー</span><br>
                <span>同年　　　Hamilton Island （リゾート地勤務）</span><br>
                <span>2016年　帰国後、TOEIC 815点獲得</span><br>
                <span>2017年　株式会社K＆Cファクトリー　入社　（システムエンジニア & インフラエンジニア）</span><br>
                <span>2021年　Web制作フリーランスとして活動開始</span><br>
                <span></span><br>
                
            </div>
        </div>
    </div>
</section>
<section>
    <div id="box4" class="container opacity0">
        <h2 class="sech2">Creation</h2>
        <div class="row">
            <div class="col-lg-4 lis">
                <div class="lis-srcA">
                    <p>Web制作</p>
                </div>
            </div>
            <div class="col-lg-4 lis">
                <div class="lis-srcA">
                    <p>PortFolio</p>
                </div>
            </div>
            <div class="col-lg-4 lis">
                <div class="lis-srcA">
                    <p>Laravel + Vue</p>
                </div>
            </div>
            <div class="col-lg-4 lis">
                <div class="lis-srcA">
                    <p>Unity</p>
                </div>
            </div>
            <div class="col-lg-4 lis">
                <div class="lis-srcA">
                    <p>Python</p>
                </div>
            </div>
            <div class="col-lg-4 lis">
                <div class="lis-srcA">
                    <p>LineBot</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact">
    <div class="container">
        <form action="post" action="contactform/contactform.php" class="form">
            <div>
                <h2 class="sech2">Contact</h2>
            </div>
            <div class="">
            <input type="text" required="required" name="name" placeholder="Name"/>
            </div>
            <div>
            <input type="email" required="required" name="email" placeholder="Email"/>
            </div>
            <div>
                <textarea name="text" required="required" placeholder="Content"></textarea>    
            </div>
            <input type="hidden" id="token" name="token" value="1234567" />
            <div>
                <input type="submit" value="送信"/>
            </div>
        </form>
    </div>
</section>
@endsection