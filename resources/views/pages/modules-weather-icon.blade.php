@extends('layouts.app-admin')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/weathericons/css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/weathericons/css/weather-icons-wind.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Weather Icon</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Modules</a></div>
                    <div class="breadcrumb-item">Weather Icon</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Weather Icon</h2>
                <p class="section-lead">
                    We also added 'Weather Icons' to make it easier for you to display weather icons. This library was
                    created by @erikflowers
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Weather Icons</h4>
                            </div>
                            <div class="card-body">
                                <div class="row new-icons">
                                    <div class="col-sm-12">
                                        <div class="section-title mt-0">25 New 2.0 Icons!</div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <ul>
                                                    <li><i class="wi wi-day-cloudy-high"></i>day-cloudy-high</li>
                                                    <li><i class="wi wi-day-light-wind"></i>day-light-wind</li>
                                                    <li><i class="wi wi-day-sleet"></i>day-sleet</li>
                                                    <li><i class="wi wi-day-haze"></i>day-haze</li>
                                                    <li><i class="wi wi-night-cloudy-high"></i>night-cloud-high</li>
                                                    <li><i class="wi wi-night-alt-partly-cloudy"></i>night-alt-partly-cloudy
                                                    </li>
                                                    <li><i class="wi wi-sleet"></i>sleet</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <ul>
                                                    <li><i class="wi wi-moonrise"></i>moonrise</li>
                                                    <li><i class="wi wi-moonset"></i>moonset</li>
                                                    <li><i class="wi wi-night-sleet"></i>night-sleet</li>
                                                    <li><i class="wi wi-night-alt-sleet"></i>night-alt-sleet</li>
                                                    <li><i class="wi wi-raindrop"></i>raindrop</li>
                                                    <li><i class="wi wi-barometer"></i>barometer</li>
                                                    <li><i class="wi wi-humidity"></i>humidity</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <ul>
                                                    <li><i class="wi wi-na"></i>na (no report)</li>
                                                    <li><i class="wi wi-flood"></i>flood</li>
                                                    <li><i class="wi wi-sandstorm"></i>sandstorm</li>
                                                    <li><i class="wi wi-tsunami"></i>tsunami</li>
                                                    <li><i class="wi wi-earthquake"></i>earthquake</li>
                                                    <li><i class="wi wi-fire"></i>fire</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <ul>
                                                    <li><i class="wi wi-volcano"></i>volcano</li>
                                                    <li><i class="wi wi-train"></i>train</li>
                                                    <li><i class="wi wi-small-craft-advisory"></i>small-craft-advisory</li>
                                                    <li><i class="wi wi-gale-warning"></i>gale-warning</li>
                                                    <li><i class="wi wi-storm-warning"></i>storm-warning</li>
                                                    <li><i class="wi wi-hurricane-warning"></i>hurricane-warning</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 icon-set">
                                        <div class="section-title">Daytime</div>
                                        <div class="row">
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf00d;</div>
                                                <div class="icon-name">wi-day-sunny</div>
                                                <div class="icon_unicode">f00d </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf002;</div>
                                                <div class="icon-name">wi-day-cloudy</div>
                                                <div class="icon_unicode">f002 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf000;</div>
                                                <div class="icon-name">wi-day-cloudy-gusts</div>
                                                <div class="icon_unicode">f000 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf001;</div>
                                                <div class="icon-name">wi-day-cloudy-windy</div>
                                                <div class="icon_unicode">f001 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf003;</div>
                                                <div class="icon-name">wi-day-fog</div>
                                                <div class="icon_unicode">f003 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf004;</div>
                                                <div class="icon-name">wi-day-hail</div>
                                                <div class="icon_unicode">f004 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0b6;</div>
                                                <div class="icon-name">wi-day-haze</div>
                                                <div class="icon_unicode">f0b6 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf005;</div>
                                                <div class="icon-name">wi-day-lightning</div>
                                                <div class="icon_unicode">f005 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf008;</div>
                                                <div class="icon-name">wi-day-rain</div>
                                                <div class="icon_unicode">f008 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf006;</div>
                                                <div class="icon-name">wi-day-rain-mix</div>
                                                <div class="icon_unicode">f006 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf007;</div>
                                                <div class="icon-name">wi-day-rain-wind</div>
                                                <div class="icon_unicode">f007 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf009;</div>
                                                <div class="icon-name">wi-day-showers</div>
                                                <div class="icon_unicode">f009 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0b2;</div>
                                                <div class="icon-name">wi-day-sleet</div>
                                                <div class="icon_unicode">f0b2 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf068;</div>
                                                <div class="icon-name">wi-day-sleet-storm</div>
                                                <div class="icon_unicode">f068 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf00a;</div>
                                                <div class="icon-name">wi-day-snow</div>
                                                <div class="icon_unicode">f00a </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf06b;</div>
                                                <div class="icon-name">wi-day-snow-thunderstorm</div>
                                                <div class="icon_unicode">f06b </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf065;</div>
                                                <div class="icon-name">wi-day-snow-wind</div>
                                                <div class="icon_unicode">f065 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf00b;</div>
                                                <div class="icon-name">wi-day-sprinkle</div>
                                                <div class="icon_unicode">f00b </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf00e;</div>
                                                <div class="icon-name">wi-day-storm-showers</div>
                                                <div class="icon_unicode">f00e </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf00c;</div>
                                                <div class="icon-name">wi-day-sunny-overcast</div>
                                                <div class="icon_unicode">f00c </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf010;</div>
                                                <div class="icon-name">wi-day-thunderstorm</div>
                                                <div class="icon_unicode">f010 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf085;</div>
                                                <div class="icon-name">wi-day-windy</div>
                                                <div class="icon_unicode">f085 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf06e;</div>
                                                <div class="icon-name">wi-solar-eclipse</div>
                                                <div class="icon_unicode">f06e </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf072;</div>
                                                <div class="icon-name">wi-hot</div>
                                                <div class="icon_unicode">f072 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf07d;</div>
                                                <div class="icon-name">wi-day-cloudy-high</div>
                                                <div class="icon_unicode">f07d </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0c4;</div>
                                                <div class="icon-name">wi-day-light-wind</div>
                                                <div class="icon_unicode">f0c4 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 icon-set">
                                        <div class="section-title">Nighttime</div>
                                        <div class="row">
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf02e;</div>
                                                <div class="icon-name">wi-night-clear</div>
                                                <div class="icon_unicode">f02e </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf086;</div>
                                                <div class="icon-name">wi-night-alt-cloudy</div>
                                                <div class="icon_unicode">f086 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf022;</div>
                                                <div class="icon-name">wi-night-alt-cloudy-gusts</div>
                                                <div class="icon_unicode">f022 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf023;</div>
                                                <div class="icon-name">wi-night-alt-cloudy-windy</div>
                                                <div class="icon_unicode">f023 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf024;</div>
                                                <div class="icon-name">wi-night-alt-hail</div>
                                                <div class="icon_unicode">f024 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf025;</div>
                                                <div class="icon-name">wi-night-alt-lightning</div>
                                                <div class="icon_unicode">f025 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf028;</div>
                                                <div class="icon-name">wi-night-alt-rain</div>
                                                <div class="icon_unicode">f028 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf026;</div>
                                                <div class="icon-name">wi-night-alt-rain-mix</div>
                                                <div class="icon_unicode">f026 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf027;</div>
                                                <div class="icon-name">wi-night-alt-rain-wind</div>
                                                <div class="icon_unicode">f027 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf029;</div>
                                                <div class="icon-name">wi-night-alt-showers</div>
                                                <div class="icon_unicode">f029 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0b4;</div>
                                                <div class="icon-name">wi-night-alt-sleet</div>
                                                <div class="icon_unicode">f0b4 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf06a;</div>
                                                <div class="icon-name">wi-night-alt-sleet-storm</div>
                                                <div class="icon_unicode">f06a </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf02a;</div>
                                                <div class="icon-name">wi-night-alt-snow</div>
                                                <div class="icon_unicode">f02a </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf06d;</div>
                                                <div class="icon-name">wi-night-alt-snow-thunderstorm</div>
                                                <div class="icon_unicode">f06d </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf067;</div>
                                                <div class="icon-name">wi-night-alt-snow-wind</div>
                                                <div class="icon_unicode">f067 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf02b;</div>
                                                <div class="icon-name">wi-night-alt-sprinkle</div>
                                                <div class="icon_unicode">f02b </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf02c;</div>
                                                <div class="icon-name">wi-night-alt-storm-showers</div>
                                                <div class="icon_unicode">f02c </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf02d;</div>
                                                <div class="icon-name">wi-night-alt-thunderstorm</div>
                                                <div class="icon_unicode">f02d </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf031;</div>
                                                <div class="icon-name">wi-night-cloudy</div>
                                                <div class="icon_unicode">f031 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf02f;</div>
                                                <div class="icon-name">wi-night-cloudy-gusts</div>
                                                <div class="icon_unicode">f02f </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf030;</div>
                                                <div class="icon-name">wi-night-cloudy-windy</div>
                                                <div class="icon_unicode">f030 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf04a;</div>
                                                <div class="icon-name">wi-night-fog</div>
                                                <div class="icon_unicode">f04a </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf032;</div>
                                                <div class="icon-name">wi-night-hail</div>
                                                <div class="icon_unicode">f032 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf033;</div>
                                                <div class="icon-name">wi-night-lightning</div>
                                                <div class="icon_unicode">f033 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf083;</div>
                                                <div class="icon-name">wi-night-partly-cloudy</div>
                                                <div class="icon_unicode">f083 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf036;</div>
                                                <div class="icon-name">wi-night-rain</div>
                                                <div class="icon_unicode">f036 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf034;</div>
                                                <div class="icon-name">wi-night-rain-mix</div>
                                                <div class="icon_unicode">f034 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf035;</div>
                                                <div class="icon-name">wi-night-rain-wind</div>
                                                <div class="icon_unicode">f035 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf037;</div>
                                                <div class="icon-name">wi-night-showers</div>
                                                <div class="icon_unicode">f037 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0b3;</div>
                                                <div class="icon-name">wi-night-sleet</div>
                                                <div class="icon_unicode">f0b3 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf069;</div>
                                                <div class="icon-name">wi-night-sleet-storm</div>
                                                <div class="icon_unicode">f069 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf038;</div>
                                                <div class="icon-name">wi-night-snow</div>
                                                <div class="icon_unicode">f038 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf06c;</div>
                                                <div class="icon-name">wi-night-snow-thunderstorm</div>
                                                <div class="icon_unicode">f06c </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf066;</div>
                                                <div class="icon-name">wi-night-snow-wind</div>
                                                <div class="icon_unicode">f066 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf039;</div>
                                                <div class="icon-name">wi-night-sprinkle</div>
                                                <div class="icon_unicode">f039 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf03a;</div>
                                                <div class="icon-name">wi-night-storm-showers</div>
                                                <div class="icon_unicode">f03a </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf03b;</div>
                                                <div class="icon-name">wi-night-thunderstorm</div>
                                                <div class="icon_unicode">f03b </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf070;</div>
                                                <div class="icon-name">wi-lunar-eclipse</div>
                                                <div class="icon_unicode">f070 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf077;</div>
                                                <div class="icon-name">wi-stars</div>
                                                <div class="icon_unicode">f077 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf01d;</div>
                                                <div class="icon-name">wi-storm-showers</div>
                                                <div class="icon_unicode">f01d </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf01e;</div>
                                                <div class="icon-name">wi-thunderstorm</div>
                                                <div class="icon_unicode">f01e </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf07e;</div>
                                                <div class="icon-name">wi-night-alt-cloudy-high</div>
                                                <div class="icon_unicode">f07e </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf080;</div>
                                                <div class="icon-name">wi-night-cloudy-high</div>
                                                <div class="icon_unicode">f080 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf081;</div>
                                                <div class="icon-name">wi-night-alt-partly-cloudy</div>
                                                <div class="icon_unicode">f081 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 icon-set">
                                        <div class="section-title">Neutral</div>
                                        <div class="row">
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf041;</div>
                                                <div class="icon-name">wi-cloud</div>
                                                <div class="icon_unicode">f041 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf013;</div>
                                                <div class="icon-name">wi-cloudy</div>
                                                <div class="icon_unicode">f013 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf011;</div>
                                                <div class="icon-name">wi-cloudy-gusts</div>
                                                <div class="icon_unicode">f011 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf012;</div>
                                                <div class="icon-name">wi-cloudy-windy</div>
                                                <div class="icon_unicode">f012 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf014;</div>
                                                <div class="icon-name">wi-fog</div>
                                                <div class="icon_unicode">f014 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf015;</div>
                                                <div class="icon-name">wi-hail</div>
                                                <div class="icon_unicode">f015 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf019;</div>
                                                <div class="icon-name">wi-rain</div>
                                                <div class="icon_unicode">f019 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf017;</div>
                                                <div class="icon-name">wi-rain-mix</div>
                                                <div class="icon_unicode">f017 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf018;</div>
                                                <div class="icon-name">wi-rain-wind</div>
                                                <div class="icon_unicode">f018 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf01a;</div>
                                                <div class="icon-name">wi-showers</div>
                                                <div class="icon_unicode">f01a </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0b5;</div>
                                                <div class="icon-name">wi-sleet</div>
                                                <div class="icon_unicode">f0b5 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf01b;</div>
                                                <div class="icon-name">wi-snow</div>
                                                <div class="icon_unicode">f01b </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf01c;</div>
                                                <div class="icon-name">wi-sprinkle</div>
                                                <div class="icon_unicode">f01c </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf01d;</div>
                                                <div class="icon-name">wi-storm-showers</div>
                                                <div class="icon_unicode">f01d </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf01e;</div>
                                                <div class="icon-name">wi-thunderstorm</div>
                                                <div class="icon_unicode">f01e </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf064;</div>
                                                <div class="icon-name">wi-snow-wind</div>
                                                <div class="icon_unicode">f064 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf01b;</div>
                                                <div class="icon-name">wi-snow</div>
                                                <div class="icon_unicode">f01b </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf074;</div>
                                                <div class="icon-name">wi-smog</div>
                                                <div class="icon_unicode">f074 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf062;</div>
                                                <div class="icon-name">wi-smoke</div>
                                                <div class="icon_unicode">f062 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf016;</div>
                                                <div class="icon-name">wi-lightning</div>
                                                <div class="icon_unicode">f016 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf04e;</div>
                                                <div class="icon-name">wi-raindrops</div>
                                                <div class="icon_unicode">f04e </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf078;</div>
                                                <div class="icon-name">wi-raindrop</div>
                                                <div class="icon_unicode">f078 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf063;</div>
                                                <div class="icon-name">wi-dust</div>
                                                <div class="icon_unicode">f063 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf076;</div>
                                                <div class="icon-name">wi-snowflake-cold</div>
                                                <div class="icon_unicode">f076 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf021;</div>
                                                <div class="icon-name">wi-windy</div>
                                                <div class="icon_unicode">f021 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf050;</div>
                                                <div class="icon-name">wi-strong-wind</div>
                                                <div class="icon_unicode">f050 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf082;</div>
                                                <div class="icon-name">wi-sandstorm</div>
                                                <div class="icon_unicode">f082 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0c6;</div>
                                                <div class="icon-name">wi-earthquake</div>
                                                <div class="icon_unicode">f0c6 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0c7;</div>
                                                <div class="icon-name">wi-fire</div>
                                                <div class="icon_unicode">f0c7 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf07c;</div>
                                                <div class="icon-name">wi-flood</div>
                                                <div class="icon_unicode">f07c </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf071;</div>
                                                <div class="icon-name">wi-meteor</div>
                                                <div class="icon_unicode">f071 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0c5;</div>
                                                <div class="icon-name">wi-tsunami</div>
                                                <div class="icon_unicode">f0c5 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0c8;</div>
                                                <div class="icon-name">wi-volcano</div>
                                                <div class="icon_unicode">f0c8 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf073;</div>
                                                <div class="icon-name">wi-hurricane</div>
                                                <div class="icon_unicode">f073 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf056;</div>
                                                <div class="icon-name">wi-tornado</div>
                                                <div class="icon_unicode">f056 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0cc;</div>
                                                <div class="icon-name">wi-small-craft-advisory</div>
                                                <div class="icon_unicode">f0cc </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0cd;</div>
                                                <div class="icon-name">wi-gale-warning</div>
                                                <div class="icon_unicode">f0cd </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0ce;</div>
                                                <div class="icon-name">wi-storm-warning</div>
                                                <div class="icon_unicode">f0ce </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0cf;</div>
                                                <div class="icon-name">wi-hurricane-warning</div>
                                                <div class="icon_unicode">f0cf </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0b1;</div>
                                                <div class="icon-name">wi-wind-direction</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 icon-set">
                                        <div class="section-title">Miscellaneous</div>
                                        <div class="row">
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf075;</div>
                                                <div class="icon-name">wi-alien</div>
                                                <div class="icon_unicode">f075 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf03c;</div>
                                                <div class="icon-name">wi-celsius</div>
                                                <div class="icon_unicode">f03c </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf045;</div>
                                                <div class="icon-name">wi-fahrenheit</div>
                                                <div class="icon_unicode">f045 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf042;</div>
                                                <div class="icon-name">wi-degrees</div>
                                                <div class="icon_unicode">f042 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf055;</div>
                                                <div class="icon-name">wi-thermometer</div>
                                                <div class="icon_unicode">f055 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf053;</div>
                                                <div class="icon-name">wi-thermometer-exterior</div>
                                                <div class="icon_unicode">f053 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf054;</div>
                                                <div class="icon-name">wi-thermometer-internal</div>
                                                <div class="icon_unicode">f054 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf03d;</div>
                                                <div class="icon-name">wi-cloud-down</div>
                                                <div class="icon_unicode">f03d </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf040;</div>
                                                <div class="icon-name">wi-cloud-up</div>
                                                <div class="icon_unicode">f040 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf03e;</div>
                                                <div class="icon-name">wi-cloud-refresh</div>
                                                <div class="icon_unicode">f03e </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf047;</div>
                                                <div class="icon-name">wi-horizon</div>
                                                <div class="icon_unicode">f047 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf046;</div>
                                                <div class="icon-name">wi-horizon-alt</div>
                                                <div class="icon_unicode">f046 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf051;</div>
                                                <div class="icon-name">wi-sunrise</div>
                                                <div class="icon_unicode">f051 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf052;</div>
                                                <div class="icon-name">wi-sunset</div>
                                                <div class="icon_unicode">f052 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0c9;</div>
                                                <div class="icon-name">wi-moonrise</div>
                                                <div class="icon_unicode">f0c9 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0ca;</div>
                                                <div class="icon-name">wi-moonset</div>
                                                <div class="icon_unicode">f0ca </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf04c;</div>
                                                <div class="icon-name">wi-refresh</div>
                                                <div class="icon_unicode">f04c </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf04b;</div>
                                                <div class="icon-name">wi-refresh-alt</div>
                                                <div class="icon_unicode">f04b </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf084;</div>
                                                <div class="icon-name">wi-umbrella</div>
                                                <div class="icon_unicode">f084 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf079;</div>
                                                <div class="icon-name">wi-barometer</div>
                                                <div class="icon_unicode">f079 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf07a;</div>
                                                <div class="icon-name">wi-humidity</div>
                                                <div class="icon_unicode">f07a </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf07b;</div>
                                                <div class="icon-name">wi-na</div>
                                                <div class="icon_unicode">f07b </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0cb;</div>
                                                <div class="icon-name">wi-train</div>
                                                <div class="icon_unicode">f0cb </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 icon-set">
                                        <div class="section-title">Moon Phases</div>
                                        <div class="alert alert-primary alert-has-icon">
                                            <div class="alert-icon"><i class="fa fa-info-circle"></i></div>
                                            <div class="alert-body">
                                                <p>The moons are split into 28 icons, to correspond neatly with the 28 day
                                                    moon cycle. There is a primary set and alternate set. The primary set is
                                                    meant to be interpreted as: where there are pixels, that is the
                                                    illuminated part of the moon. The alternate set is meant to be
                                                    interpreted as: where there are pixels, that is the shadowed part of the
                                                    moon.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf095;</div>
                                                <div class="icon-name">wi-moon-new</div>
                                                <div class="icon_unicode">f095 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf096;</div>
                                                <div class="icon-name">wi-moon-waxing-crescent-1</div>
                                                <div class="icon_unicode">f096 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf097;</div>
                                                <div class="icon-name">wi-moon-waxing-crescent-2</div>
                                                <div class="icon_unicode">f097 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf098;</div>
                                                <div class="icon-name">wi-moon-waxing-crescent-3</div>
                                                <div class="icon_unicode">f098 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf099;</div>
                                                <div class="icon-name">wi-moon-waxing-crescent-4</div>
                                                <div class="icon_unicode">f099 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf09a;</div>
                                                <div class="icon-name">wi-moon-waxing-crescent-5</div>
                                                <div class="icon_unicode">f09a </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf09b;</div>
                                                <div class="icon-name">wi-moon-waxing-crescent-6</div>
                                                <div class="icon_unicode">f09b </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf09c;</div>
                                                <div class="icon-name">wi-moon-first-quarter</div>
                                                <div class="icon_unicode">f09c </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf09d;</div>
                                                <div class="icon-name">wi-moon-waxing-gibbous-1</div>
                                                <div class="icon_unicode">f09d </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf09e;</div>
                                                <div class="icon-name">wi-moon-waxing-gibbous-2</div>
                                                <div class="icon_unicode">f09e </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf09f;</div>
                                                <div class="icon-name">wi-moon-waxing-gibbous-3</div>
                                                <div class="icon_unicode">f09f </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0a0;</div>
                                                <div class="icon-name">wi-moon-waxing-gibbous-4</div>
                                                <div class="icon_unicode">f0a0 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0a1;</div>
                                                <div class="icon-name">wi-moon-waxing-gibbous-5</div>
                                                <div class="icon_unicode">f0a1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0a2;</div>
                                                <div class="icon-name">wi-moon-waxing-gibbous-6</div>
                                                <div class="icon_unicode">f0a2 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0a3;</div>
                                                <div class="icon-name">wi-moon-full</div>
                                                <div class="icon_unicode">f0a3 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0a4;</div>
                                                <div class="icon-name">wi-moon-waning-gibbous-1</div>
                                                <div class="icon_unicode">f0a4 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0a5;</div>
                                                <div class="icon-name">wi-moon-waning-gibbous-2</div>
                                                <div class="icon_unicode">f0a5 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0a6;</div>
                                                <div class="icon-name">wi-moon-waning-gibbous-3</div>
                                                <div class="icon_unicode">f0a6 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0a7;</div>
                                                <div class="icon-name">wi-moon-waning-gibbous-4</div>
                                                <div class="icon_unicode">f0a7 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0a8;</div>
                                                <div class="icon-name">wi-moon-waning-gibbous-5</div>
                                                <div class="icon_unicode">f0a8 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0a9;</div>
                                                <div class="icon-name">wi-moon-waning-gibbous-6</div>
                                                <div class="icon_unicode">f0a9 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0aa;</div>
                                                <div class="icon-name">wi-moon-third-quarter</div>
                                                <div class="icon_unicode">f0aa </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0ab;</div>
                                                <div class="icon-name">wi-moon-waning-crescent-1</div>
                                                <div class="icon_unicode">f0ab </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0ac;</div>
                                                <div class="icon-name">wi-moon-waning-crescent-2</div>
                                                <div class="icon_unicode">f0ac </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0ad;</div>
                                                <div class="icon-name">wi-moon-waning-crescent-3</div>
                                                <div class="icon_unicode">f0ad </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0ae;</div>
                                                <div class="icon-name">wi-moon-waning-crescent-4</div>
                                                <div class="icon_unicode">f0ae </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0af;</div>
                                                <div class="icon-name">wi-moon-waning-crescent-5</div>
                                                <div class="icon_unicode">f0af </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0b0;</div>
                                                <div class="icon-name">wi-moon-waning-crescent-6</div>
                                                <div class="icon_unicode">f0b0 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0eb;</div>
                                                <div class="icon-name">wi-moon-alt-new</div>
                                                <div class="icon_unicode">f0eb </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0d0;</div>
                                                <div class="icon-name">wi-moon-alt-waxing-crescent-1</div>
                                                <div class="icon_unicode">f0d0 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0d1;</div>
                                                <div class="icon-name">wi-moon-alt-waxing-crescent-2</div>
                                                <div class="icon_unicode">f0d1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0d2;</div>
                                                <div class="icon-name">wi-moon-alt-waxing-crescent-3</div>
                                                <div class="icon_unicode">f0d2 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0d3;</div>
                                                <div class="icon-name">wi-moon-alt-waxing-crescent-4</div>
                                                <div class="icon_unicode">f0d3 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0d4;</div>
                                                <div class="icon-name">wi-moon-alt-waxing-crescent-5</div>
                                                <div class="icon_unicode">f0d4 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0d5;</div>
                                                <div class="icon-name">wi-moon-alt-waxing-crescent-6</div>
                                                <div class="icon_unicode">f0d5 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0d6;</div>
                                                <div class="icon-name">wi-moon-alt-first-quarter</div>
                                                <div class="icon_unicode">f0d6 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0d7;</div>
                                                <div class="icon-name">wi-moon-alt-waxing-gibbous-1</div>
                                                <div class="icon_unicode">f0d7 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0d8;</div>
                                                <div class="icon-name">wi-moon-alt-waxing-gibbous-2</div>
                                                <div class="icon_unicode">f0d8 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0d9;</div>
                                                <div class="icon-name">wi-moon-alt-waxing-gibbous-3</div>
                                                <div class="icon_unicode">f0d9 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0da;</div>
                                                <div class="icon-name">wi-moon-alt-waxing-gibbous-4</div>
                                                <div class="icon_unicode">f0da </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0db;</div>
                                                <div class="icon-name">wi-moon-alt-waxing-gibbous-5</div>
                                                <div class="icon_unicode">f0db </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0dc;</div>
                                                <div class="icon-name">wi-moon-alt-waxing-gibbous-6</div>
                                                <div class="icon_unicode">f0dc </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0dd;</div>
                                                <div class="icon-name">wi-moon-alt-full</div>
                                                <div class="icon_unicode">f0dd </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0de;</div>
                                                <div class="icon-name">wi-moon-alt-waning-gibbous-1</div>
                                                <div class="icon_unicode">f0de </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0df;</div>
                                                <div class="icon-name">wi-moon-alt-waning-gibbous-2</div>
                                                <div class="icon_unicode">f0df </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0e0;</div>
                                                <div class="icon-name">wi-moon-alt-waning-gibbous-3</div>
                                                <div class="icon_unicode">f0e0 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0e1;</div>
                                                <div class="icon-name">wi-moon-alt-waning-gibbous-4</div>
                                                <div class="icon_unicode">f0e1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0e2;</div>
                                                <div class="icon-name">wi-moon-alt-waning-gibbous-5</div>
                                                <div class="icon_unicode">f0e2 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0e3;</div>
                                                <div class="icon-name">wi-moon-alt-waning-gibbous-6</div>
                                                <div class="icon_unicode">f0e3 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0e4;</div>
                                                <div class="icon-name">wi-moon-alt-third-quarter</div>
                                                <div class="icon_unicode">f0e4 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0e5;</div>
                                                <div class="icon-name">wi-moon-alt-waning-crescent-1</div>
                                                <div class="icon_unicode">f0e5 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0e6;</div>
                                                <div class="icon-name">wi-moon-alt-waning-crescent-2</div>
                                                <div class="icon_unicode">f0e6 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0e7;</div>
                                                <div class="icon-name">wi-moon-alt-waning-crescent-3</div>
                                                <div class="icon_unicode">f0e7 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0e8;</div>
                                                <div class="icon-name">wi-moon-alt-waning-crescent-4</div>
                                                <div class="icon_unicode">f0e8 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0e9;</div>
                                                <div class="icon-name">wi-moon-alt-waning-crescent-5</div>
                                                <div class="icon_unicode">f0e9 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0ea;</div>
                                                <div class="icon-name">wi-moon-alt-waning-crescent-6</div>
                                                <div class="icon_unicode">f0ea </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 icon-set">
                                        <div class="section-title">Time</div>
                                        <div class="row">
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf08a;</div>
                                                <div class="icon-name">wi-time-1</div>
                                                <div class="icon_unicode">f08a </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf08b;</div>
                                                <div class="icon-name">wi-time-2</div>
                                                <div class="icon_unicode">f08b </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf08c;</div>
                                                <div class="icon-name">wi-time-3</div>
                                                <div class="icon_unicode">f08c </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf08d;</div>
                                                <div class="icon-name">wi-time-4</div>
                                                <div class="icon_unicode">f08d </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf08e;</div>
                                                <div class="icon-name">wi-time-5</div>
                                                <div class="icon_unicode">f08e </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf08f;</div>
                                                <div class="icon-name">wi-time-6</div>
                                                <div class="icon_unicode">f08f </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf090;</div>
                                                <div class="icon-name">wi-time-7</div>
                                                <div class="icon_unicode">f090 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf091;</div>
                                                <div class="icon-name">wi-time-8</div>
                                                <div class="icon_unicode">f091 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf092;</div>
                                                <div class="icon-name">wi-time-9</div>
                                                <div class="icon_unicode">f092 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf093;</div>
                                                <div class="icon-name">wi-time-10</div>
                                                <div class="icon_unicode">f093 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf094;</div>
                                                <div class="icon-name">wi-time-11</div>
                                                <div class="icon_unicode">f094 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf089;</div>
                                                <div class="icon-name">wi-time-12</div>
                                                <div class="icon_unicode">f089 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 icon-set">
                                        <div class="section-title">Directional Arrows</div>
                                        <div class="row">
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf058;</div>
                                                <div class="icon-name">wi-direction-up</div>
                                                <div class="icon_unicode">f058 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf057;</div>
                                                <div class="icon-name">wi-direction-up-right</div>
                                                <div class="icon_unicode">f057 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf04d;</div>
                                                <div class="icon-name">wi-direction-right</div>
                                                <div class="icon_unicode">f04d </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf088;</div>
                                                <div class="icon-name">wi-direction-down-right</div>
                                                <div class="icon_unicode">f088 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf044;</div>
                                                <div class="icon-name">wi-direction-down</div>
                                                <div class="icon_unicode">f044 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf043;</div>
                                                <div class="icon-name">wi-direction-down-left</div>
                                                <div class="icon_unicode">f043 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf048;</div>
                                                <div class="icon-name">wi-direction-left</div>
                                                <div class="icon_unicode">f048 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf087;</div>
                                                <div class="icon-name">wi-direction-up-left</div>
                                                <div class="icon_unicode">f087 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 icon-set">
                                        <div class="section-title">Wind Degree Examples</div>
                                        <div class="alert alert-primary alert-has-icon">
                                            <div class="alert-icon"><i class="fa fa-info-circle"></i></div>
                                            <div class="alert-body">
                                                <p>The classes for the wind direction indicator is split into 2 options. You
                                                    can choose towards or from. Towards points to the degree, zero at the
                                                    top. From points directly away from the degree. This means, if you want
                                                    the indicator to represent "wind is coming from the south", you can use
                                                    the <code>towards-0-deg</code> class, or if you prefer to use from, then
                                                    you would use <code>from-180-deg</code>.</p>
                                                <p>There are 360 classes for each in 1 degree increments for maximum
                                                    precision.</p>
                                                <p></p>
                                                <p>To make a wind icon appear, you need to add 3 classes, the base icon
                                                    class, the wind icon class, and then the direction you want it to face:
                                                    <code>class="wi wi-wind towards-23-deg"</code>
                                                </p>

                                                <p></p>
                                                <p>NOTE: You must include the additional stylesheeet,
                                                    <code>weather-icons-wind.css</code> to use the wind icons and API
                                                    mappings.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-0-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-0-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-23-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-23-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-45-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-45-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-68-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-68-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-90-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-90-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-113-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-113-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-135-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-135-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-158-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-158-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-180-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-180-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-203-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-203-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-225-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-225-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-248-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-248-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-270-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-270-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-293-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-293-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-313-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-313-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind towards-336-deg"></i>
                                                </div>
                                                <div class="icon-name">towards-336-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-180-deg"></i>
                                                </div>
                                                <div class="icon-name">from-180-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-203-deg"></i>
                                                </div>
                                                <div class="icon-name">from-203-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-225-deg"></i>
                                                </div>
                                                <div class="icon-name">from-225-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-248-deg"></i>
                                                </div>
                                                <div class="icon-name">from-248-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-270-deg"></i>
                                                </div>
                                                <div class="icon-name">from-270-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-293-deg"></i>
                                                </div>
                                                <div class="icon-name">from-293-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-313-deg"></i>
                                                </div>
                                                <div class="icon-name">from-313-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-336-deg"></i>
                                                </div>
                                                <div class="icon-name">from-336-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-0-deg"></i>
                                                </div>
                                                <div class="icon-name">from-0-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-23-deg"></i>
                                                </div>
                                                <div class="icon-name">from-23-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-45-deg"></i>
                                                </div>
                                                <div class="icon-name">from-45-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-68-deg"></i>
                                                </div>
                                                <div class="icon-name">from-68-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-90-deg"></i>
                                                </div>
                                                <div class="icon-name">from-90-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-113-deg"></i>
                                                </div>
                                                <div class="icon-name">from-113-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-135-deg"></i>
                                                </div>
                                                <div class="icon-name">from-135-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind from-158-deg"></i>
                                                </div>
                                                <div class="icon-name">from-158-deg</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 icon-set">
                                        <div class="section-title">Wind Cardinal Examples</div>
                                        <div class="alert alert-primary alert-has-icon">
                                            <div class="alert-icon"><i class="fa fa-info-circle"></i></div>
                                            <div class="alert-body">
                                                <p>The classes for the cardinal wind direction indicator is split into 2
                                                    options. You can choose towards or from. Towards points to the direction
                                                    in the class, north at the top. From points directly away from the
                                                    direction in the class. This means, if you want the indicator to
                                                    represent "wind is coming from the south", you can use the
                                                    <code>towards-n</code> class, or if you prefer to use from, then you
                                                    would use <code>from-s</code>.
                                                </p>
                                                <p>The purpose of this is to accommodate applications that prefer to point
                                                    to where the wind is originating from (arrow points against the wind),
                                                    or pointing where the wind is blowing (arrow points in direction of
                                                    wind). You can decide which fits your application best and use the class
                                                    that matches.</p>
                                                <p>There are 16 classes each for precision when using cardinal directions.
                                                </p>
                                                <p></p>
                                                <p>To make a wind icon appear, you need to add 3 classes, the base icon
                                                    class, the wind icon class, and then the direction you want it to face:
                                                    <code>class="wi wi-wind wi-from-e"</code>
                                                </p>
                                                <p>NOTE: You must include the additional stylesheeet,
                                                    <code>weather-icons-wind.css</code> to use the wind icons and API
                                                    mappings.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-n"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-n</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-nne"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-nne</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-ne"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-ne</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-ene"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-ene</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-e"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-e</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-ese"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-ese</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-se"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-se</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-sse"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-sse</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-s"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-s</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-ssw"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-ssw</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-sw"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-sw</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-wsw"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-wsw</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-w"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-w</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-wnw"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-wnw</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-nw"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-nw</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-towards-nnw"></i>
                                                </div>
                                                <div class="icon-name">wi-towards-nnw</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-n"></i>
                                                </div>
                                                <div class="icon-name">wi-from-n</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-nne"></i>
                                                </div>
                                                <div class="icon-name">wi-from-nne</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-ne"></i>
                                                </div>
                                                <div class="icon-name">wi-from-ne</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-ene"></i>
                                                </div>
                                                <div class="icon-name">wi-from-ene</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-e"></i>
                                                </div>
                                                <div class="icon-name">wi-from-e</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-ese"></i>
                                                </div>
                                                <div class="icon-name">wi-from-ese</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-se"></i>
                                                </div>
                                                <div class="icon-name">wi-from-se</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-sse"></i>
                                                </div>
                                                <div class="icon-name">wi-from-sse</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-s"></i>
                                                </div>
                                                <div class="icon-name">wi-from-s</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-ssw"></i>
                                                </div>
                                                <div class="icon-name">wi-from-ssw</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-sw"></i>
                                                </div>
                                                <div class="icon-name">wi-from-sw</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-wsw"></i>
                                                </div>
                                                <div class="icon-name">wi-from-wsw</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-w"></i>
                                                </div>
                                                <div class="icon-name">wi-from-w</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-wnw"></i>
                                                </div>
                                                <div class="icon-name">wi-from-wnw</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-nw"></i>
                                                </div>
                                                <div class="icon-name">wi-from-nw</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon"><i class="wi wi-wind wi-from-nnw"></i>
                                                </div>
                                                <div class="icon-name">wi-from-nnw</div>
                                                <div class="icon_unicode">f0b1 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 icon-set">
                                        <div class="section-title">Beaufort Wind Scale</div>
                                        <div class="row">
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0b7;</div>
                                                <div class="icon-name">wi-wind-beaufort-0</div>
                                                <div class="icon_unicode">f0b7 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0b8;</div>
                                                <div class="icon-name">wi-wind-beaufort-1</div>
                                                <div class="icon_unicode">f0b8 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0b9;</div>
                                                <div class="icon-name">wi-wind-beaufort-2</div>
                                                <div class="icon_unicode">f0b9 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0ba;</div>
                                                <div class="icon-name">wi-wind-beaufort-3</div>
                                                <div class="icon_unicode">f0ba </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0bb;</div>
                                                <div class="icon-name">wi-wind-beaufort-4</div>
                                                <div class="icon_unicode">f0bb </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0bc;</div>
                                                <div class="icon-name">wi-wind-beaufort-5</div>
                                                <div class="icon_unicode">f0bc </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0bd;</div>
                                                <div class="icon-name">wi-wind-beaufort-6</div>
                                                <div class="icon_unicode">f0bd </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0be;</div>
                                                <div class="icon-name">wi-wind-beaufort-7</div>
                                                <div class="icon_unicode">f0be </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0bf;</div>
                                                <div class="icon-name">wi-wind-beaufort-8</div>
                                                <div class="icon_unicode">f0bf </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0c0;</div>
                                                <div class="icon-name">wi-wind-beaufort-9</div>
                                                <div class="icon_unicode">f0c0 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0c1;</div>
                                                <div class="icon-name">wi-wind-beaufort-10</div>
                                                <div class="icon_unicode">f0c1 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0c2;</div>
                                                <div class="icon-name">wi-wind-beaufort-11</div>
                                                <div class="icon_unicode">f0c2 </div>
                                            </div>
                                            <div class="icon-wrap">
                                                <div class="icon">&#xf0c3;</div>
                                                <div class="icon-name">wi-wind-beaufort-12</div>
                                                <div class="icon_unicode">f0c3 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
