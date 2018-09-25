@extends('layouts.default')

@section('content')

<div class="row" style="margin-bottom: 25px;">
    <div class="col-md-3">
        <div class="planCard" style="background-image:url(img/bg-img/SC1.png);">
            <div class="cardText">
                <h4 class="membership-title"><a href="{{ route('self-study-chamber') }}">Mentoring Chamber</a></h4>
                <a class="linkMore" href="{{ route('self-study-chamber') }}">Learn More</a>
            </div>
        </div>
    </div>
    
    
    <div class="col-md-3">
        <div class="planCard" style="background-image:url(img/bg-img/sc22.jpg);">
            <div class="cardText">
                <h4 class="membership-title"><a href="{{ route('study-group-chamber') }}">Study Group Chamber</a></h4>
                <a class="linkMore" href="{{ route('study-group-chamber') }}">Learn More</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="planCard" style="background-image:url(img/bg-img/00003.jpg);">
            <div class="cardText">
                <h4 class="membership-title"><a href="{{ route('lesehan') }}">Lesehan Chamber</a></h4>
                <a class="linkMore" href="{{ route('lesehan') }}">Learn More</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="planCard" style="background-image:url(img/bg-img/00005.jpg);">
            <div class="cardText">
                <h4 class="membership-title"><a href="{{ route('hall') }}">Hall</a></h4>
                <a class="linkMore" href="{{ route('hall') }}">Learn More</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="planCard" style="background-image:url(img/bg-img/sc5.png);">
            <div class="cardText">
                <h4 class="membership-title"><a href="{{ route('reading-room') }}">Reading Chamber</a></h4>
                <a class="linkMore" href="{{ route('reading-room') }}">Learn More</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="planCard" style="background-image:url(img/bg-img/sc6.png);">
            <div class="cardText">
                <h4 class="membership-title"><a href="{{ route('refreshment-corner') }}">Refreshment Corner</a></h4>
                <a class="linkMore" href="{{ route('refreshment-corner') }}">Learn More</a>
            </div>
        </div>
    </div>
</div>

    <!-- <div class="col-md-3">
        <div class="planCard" style="background-image:url(https://web.rework.id/rework/img/M.png);">
            <div class="cardText">
                <h3 class="membership-title"><a href="https://web.rework.id/membership/15">Meeting Room 30h</a></h3>
                <p class="planPrice">
                            Starts at <b>Rp 4,500,000 / month</b>
                    </p>
                <a class="linkMore" href="https://web.rework.id/membership/15">Learn More</a>
            </div>
        </div>
        <div class="planDetails">
            <div class="planCell planDes">
                <div class="planDetail">
                    Meeting Room - 30 hours package (valid for 1 year)
                </div>
            </div>
            <div class="planCell planAttr0">
                <div class="planDetail">
                    <div class="cellHeader">Workspace</div>
                    <div>
                         credit
                    </div>
                </div>
            </div>
            <div class="planCell planAttr0">
                <div class="planDetail">
                    <div class="cellHeader">Meeting Room</div>
                    <div>
                        30 credit
                    </div>
                </div>
            </div>
            <div class="planCell planAttr0">
                <div class="planDetail">
                    <div class="cellHeader"></div>
                    <div>
                        
                    </div>
                </div>
            </div>
            <div class="planCell planMore">
                <div class="planDetail">
                    <a class="linkMore" href="https://web.rework.id/membership/15">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="planCard" style="background-image:url(https://web.rework.id/rework/img/M.png);">
            <div class="cardText">
                <h3 class="membership-title"><a href="https://web.rework.id/membership/17">Hot Desk - Monthly for Team</a></h3>
                <p><b>Price upon request</b></p>
                <a class="linkMore" href="https://web.rework.id/membership/17">Learn More</a>
            </div>
        </div>
        <div class="planDetails">
            <div class="planCell planDes">
                <div class="planDetail">
                    Hot Desk Monthly for Teams
                </div>
            </div>
            <div class="planCell planAttr0">
                <div class="planDetail">
                    <div class="cellHeader">Workspace</div>
                    <div>
                        unlimited
                    </div>
                </div>
            </div>
            <div class="planCell planAttr0">
                <div class="planDetail">
                    <div class="cellHeader">Meeting Room</div>
                    <div>
                         credit
                    </div>
                </div>
            </div>
            <div class="planCell planAttr0">
                <div class="planDetail">
                    <div class="cellHeader"></div>
                    <div>
                        
                    </div>
                </div>
            </div>
            <div class="planCell planMore">
                <div class="planDetail">
                    <a class="linkMore" href="https://web.rework.id/membership/17">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div> -->

@stop