@extends('indexTemplate')

@section('css')
    <link rel="stylesheet" href="css/about.css">
@stop

@section('body')
    <div class="row background front_banner">
        <div class="front_black"></div>
        <div class="container_custom">
            <div class="col-lg-2 col-lg-offset-5">
                <img class="img-circle" src="resources/pp.jpg" style="width: 100%;">
            </div>
            <div class="col-lg-10 col-lg-offset-1 front_banner_my_info">
                <div class="row">
                    <div class="col-lg-12 name_top">
                        <h1 class="text-center" style="margin-top: 5px;">Tahnik Mustasin</h1>
                    </div>
                </div>
                <div class="row name_bottom">
                    <div class="col-lg-6">
                        <img class="img_center_logo" src="resources/speiuss.png">
                        <h3 class="text-center">IT Consultant</h3>
                        <p class="text-center">Speiuss Ltd</p>
                        <p class="text-center what_aclr">What I Have Created</p>
                        <p class="text-center who_project">Adobe Captivate Content Creation</p>
                        <p class="text-center who_project">Animated Video</p>
                        <p class="text-center who_project">LMS(Learning Management System) Management</p>
                    </div>
                    <div class="col-lg-6" style="border-left: 2px solid; border-left-color: #2aabd2">
                        <img class="img_center_logo" src="resources/qmlogo.png">
                        <h3 class="text-center">BEng Computer Systems Engineering</h3>
                        <p class="text-center">Queen Mary, University of London</p>
                        <p class="text-center what_aclr">What I Have Learned</p>
                        <p class="text-center who_project">Video Editing</p>
                        <p class="text-center who_project">Blog</p>
                        <p class="text-center who_project">Business KPI Simulator</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row foreground" style="background-color: white;">
        <div class="col-lg-8 col-lg-offset-2 summary">
            <h2 class="text-center">Summary</h2>
            <p class="summary_p">My goal of my life is to become a Chartered Engineer.
                I want to be both front-end web developer (HTML5, CSS, Javascript) and back-end developer (Apache, IIS, PHP, MySQL).
                Also, I want to be a software engineer in Java programming language.
                I am learning about network troubleshooting too.</p><br>

            <p class="summary_p">I like to be confident about what I'm doing and I also try to mange my time properly.
                To me time management is the most important aspect of someone's life.
                Along with time management, a professional attitude and behavior is what makes a person perfect.
                I want to be that kind of person.</p><br>

            <p class="summary_p">I want to create new project ideas and I intend to lead the project I take or Manage.
                I always try to keep myself updated with new ideas.</p><br>

            <p class="summary_p">To summarize myself I am a person who would like to be professional, wants to take the lead, provide better idea, have a professional attitude and have better time management.</p>
        </div>
    </div>
    <div class="row foreground" style="background-color: azure;">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12" style="padding: 0;">
                    <h1 class="text-center experience_top">WORK EXPERIENCE</h1>
                </div>
            </div>
            <div class="row ex_fix_top">
                <div class="col-md-4">
                    <img class="img_center_logo" style="" src="resources/speiuss.png">
                </div>
                <div class="col-md-8">
                    <h3 class="text-center" style="font-size: 3em;">IT Consultant</h3>
                    <p class="text-center" style="margin: 0;padding: 0;">Speiuss Ltd</p>
                    <p class="text-center" style="margin: 0;padding: 0; margin-bottom: 10px;">January 2015 - Current</p>
                    <div class="ex_hide">
                        <p class="text-center" style="margin: 0;padding: 0;">Suite 9, Cranbrook House<br>61 Cranbrook Road, Ilford
                            <br>IG1 4PG<br>Phone: 020 3659 5052</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row foreground work" style="padding: 10px;overflow: hidden;">
        <div class="container">
            <div class="col-lg-4 col-md-12">
                <div style="width: 100%;height: 210px;overflow: hidden;">
                    <img class="work_images img_center_logo" src="resources/responsive-web-design.png">
                </div>
                <div style="border:1px dotted black;margin-top: 10px;"></div>
                <h1>Responsive eLearning Content</h1>
                <p class="text-justify">Expert at creating responsive eLearning content using Adobe Captivate. Created over 60
                    courses about Health &
                    Social Care. Have expertise over all the elements of Captivate.</p>
                <p class="text-justify">
                    I managed the eLearning project as well. That included testing the eLearning website, creating template for
                    contents, working with a tutor to get the content on adobe captivate and uploading the content to
                    website</p>
                <a href="/cap_ex/" target="_blank"><button class="btn btn-info">Click here for a demo</button></a>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="work_image_div" style="width: 100%;height: 210px;overflow: hidden;">
                    <img class="work_images img_center_logo" src="css/resources/animated1.jpg">
                </div>
                <div style="border:1px dotted black;margin-top: 10px;"></div>
                <h1>Video That Makes Difference</h1>
                <p class="text-justify">Created several animated videos using professional tools like GoAnimate. One of them
                    explains how finance at Speiuss works. I am already working on another video which will be used as the
                    induction video at Speiuss College. Have expertise over all the elements of GoAnimate. I used Adobe audition
                    and Audacity to edit the audio. </p>
                <p class="text-justify">
                    Expert at creating script and giving life to that script.
                    Gave voice over to all the videos</p>
                <a href="https://www.youtube.com/watch?v=0t2B7rZrlHs" target="_blank"><button class="btn btn-danger">Click here
                        for a demo</button></a>
            </div>
            <div class="col-lg-4 col-md-12">
                <div style="width: 100%;height: 210px;overflow: hidden;">
                    <img class="work_images img_center_logo" src="css/resources/lms.jpg">
                </div>
                <div style="border:1px dotted black;margin-top: 10px;"></div>
                <h1>Responsive eLearning Content</h1>
                <p class="text-justify">Expert at creating responsive eLearning content using Adobe Captivate. Created over 60
                    courses about Health &
                    Social Care. Have expertise over all the elements of Captivate.</p>
                <p class="text-justify">
                    I managed the eLearning project as well. That included testing the eLearning website, creating template for
                    contents, working with a tutor to get the content on adobe captivate and uploading the content to
                    website</p>
                <a href="http://ecareacademy.com" target="_blank"><button class="btn btn-primary">Click here
                        to see the website</button></a>
            </div>
        </div>
    </div>
    <div class="row foreground ex_hr">
        <div class="col-md-4">
            <img class="img_center_logo" src="resources/speiuss.png">
        </div>
        <div class="col-md-8">
            <h3 class="text-center" style="font-size: 3em;">HR Assistant</h3>
            <p class="text-center" style="margin: 0;padding: 0;">Speiuss Ltd</p>
            <p class="text-center" style="margin: 0;padding: 0; margin-bottom: 10px;">December 2014 - January 2015</p>
            <p class="text-center" style="margin: 0;padding: 0;">Suite 9, Cranbrook House<br>61 Cranbrook Road, Ilford
                <br>IG1 4PG<br>Phone: 020 3659 5052</p>
        </div>
    </div>
    <div class="row foreground" style="padding-top: 20px;padding-bottom: 20px;background-color: azure;">
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center">Skills Learned</h2>
            <ul class="list-group">
                <li class="list-group-item text-center">Taking Interview</li>
                <li class="list-group-item text-center">Oraganizing Files</li>
                <li class="list-group-item text-center">Dealing with difficult situation</li>
            </ul>
        </div>
    </div>
    <div class="row" style="margin:0;">
        <div class="col-lg-12" style="padding: 0;">
            <h1 class="text-center education_top">EDUCATION</h1>
        </div>
    </div>
    <div class="row foreground">
        <div class="col-lg-12" style="background-color: white;">
            <img class="img_center_logo" style="width: 40% !important;height: auto !important;" src="resources/qmlogo.png">
            <h2 class="text-center">BEng Computer Systems Engineering</h2>
            <p class="text-center">2014-2017</p>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Module</th>
                        <th>Year</th>
                        <th>Grade</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Object Oriented Programming</td>
                        <td>First</td>
                        <td>96.4</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Signals and Information</td>
                        <td>First</td>
                        <td>92.4</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Procedural Programming</td>
                        <td>First</td>
                        <td>85.5</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Fundmentals of Web Technology</td>
                        <td>First</td>
                        <td>89.9</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Digital Circuit Design</td>
                        <td>First</td>
                        <td>83.3</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Communications and Networks</td>
                        <td>First</td>
                        <td>82.5</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Professional and Research Themes</td>
                        <td>First</td>
                        <td>73.2</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Electronic Engineering Mathematics I</td>
                        <td>First</td>
                        <td>70.2</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row foreground" style="background-color: #ffffff;">
        <div class="col-md-8 col-lg-8">
            <div class="row">
                <img style="width: 100%;" src="css/resources/java.jpg">
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <span class="center-block cover_text_edu">Programming The Future</span>
            <p class="text-justify">Created a KPI(Key Performance Indicator) simulator which simulates the key performance indicators of
                various departments. Not the best software but it's a good start.</p>
        </div>
    </div>
    <div class="row background video_parent">
        <img class="parallax_images" src="css/resources/video_uni.png">
        <div class="video_edit">
            <span class="center-block cover_text_edu_video">Professional Video Editing</span>
            <p class="text-justify">I was part of the editing team in my video project in module called Professional
                and Research theme. I used Adobe Premiere to edit our project video which demonstrate How G.P.S
                trackers work</p>
            <a href="https://www.youtube.com/watch?v=2O-bZ9YCNEU" target="_blank">
                <button class="btn btn-info" style="margin-bottom: 10px;">Click here to see the video</button>
            </a>
        </div>
    </div>
    <div class="row foreground" style="background-color: white;padding-bottom: 20px;">
        <h1 class="text-center">Contact Me</h1><br>
        <div class="col-md-2">
            <a href="https://www.facebook.com/Tahnik" target="_blank"><button class="btn btn-info center-block"
                                                                              style="margin-bottom: 10px;">Facebook</button></a>
        </div>
        <div class="col-md-2">
            <a href="https://uk.linkedin.com/in/tahnik" target="_blank"><button class="btn btn-primary center-block"
                                                                                style="margin-bottom: 10px;">LinkedIn</button></a>
        </div>
        <div class="col-md-2">
            <a href="https://twitter.com/mstahnik" target="_blank"><button class="btn btn-default center-block"
                                                                           style="margin-bottom: 10px;">Twitter</button></a>
        </div>
        <div class="col-md-2">
            <a href="https://plus.google.com/+TahnikMustasin" target="_blank"><button class="btn btn-danger center-block"
                                                                                      style="margin-bottom: 10px;">Google+</button></a>
        </div>
        <div class="col-md-2">
            <a href="mailto:tahnik@live.co.uk"><button class="btn btn-default center-block"
                                                       style="margin-bottom: 10px;">Email Me</button></a>
        </div>
        <div class="col-md-2">
            <a href="tel:+447850318114"><button class="btn btn-default center-block"
                                                style="margin-bottom: 10px;">Call Me</button></a>
        </div>
    </div>
@stop

@section('script')
    <script src="js/detectmobilebrowser.js"></script>
    <script>
        var mobile = jQuery.browser.mobile;
        var window_height = $(window).height();
        var ie = false;
        var IEversion = detectIE();
        if (IEversion !== false) {
            ie = true;
        }
        function detectIE() {
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf('MSIE ');
            if (msie > 0) {
                return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
            }
            var trident = ua.indexOf('Trident/');
            if (trident > 0) {
                var rv = ua.indexOf('rv:');
                return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
            }
            var edge = ua.indexOf('Edge/');
            if (edge > 0) {
                return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
            }
            return false;
        }
        $(document).ready(function(){
            refreshed = true;
        })
        var os = navigator.platform;
        var ismac = false;
        if(os.indexOf("Mac") != (-1)){
            ismac = true;
        }
        $(".front_banner").css("top", 0);
        $(".container_custom").css("top", (window_height/2)/3);
        $(window).scroll(function () {
            scroll_pos = $(window).scrollTop();
            offset = $(".summary").offset().top;
            stopvid = scroll_pos - offset;
            if(stopvid > 0){
                $("#vid").get(0).pause();
            }else{
                $("#vid").get(0).play();
            }
        })
        if(mobile){
            $(".parallax_back").css("background-position", "top");
            $(".cover_text").css("font-size", "xx-large");
            $(".cover_text_edu_video").css("font-size", "xx-large");
        }
    </script>
@stop
