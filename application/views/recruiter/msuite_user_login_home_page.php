<?php $this->load->model('M_Candidate_profile');?>
<div class="container-fluid innerpagecontainer"> 
<div class="container searchfilter"> 
    <div class="row">
        <div class="col-lg-3 col-sm-12 nopaddingColForMobile">
            <div class="mnuserHomepageLeft">
                <div class="frprofile">
                    <?php $progress_bar= 0; 
                    if(!empty($career_profile->preferred_work_location))
                    {
                    if(!empty($user_details[0]->resume))
                    {
                        $resume=10;
                        $progress_bar= $resume;
                    }
                    else
                    {
                        $resume=0;
                    }
                    
                    $profile_image = base_url($user_details[0]->image);
                        
                    if(!empty($career_profile->preferred_work_location))
                    {
                        $preferred_work_location = 2;
                        $progress_bar= $preferred_work_location+$resume;
                    }
                       
                    if(!empty($employement_details))
                    {
                        foreach($employement_details as $row)
                        {
                            if(!empty($row->emp_current_company_name && $row->emp_current_desigantion))
                            {
                               $candidate_designation_current_company = 10;
                               $progress_bar= $candidate_designation_current_company+$preferred_work_location+$resume;
                            }
                            else
                            {
                                $candidate_designation_current_company = 0;
                            }
                              
                       }
                        
                    }
                            
                    if(!empty($career_profile->career_profile_department))   
                     {
                        $career_profile_department=10;
                        $progress_bar= @$candidate_designation_current_company+@$preferred_work_location+$resume;
                     } 
                     else
                     {
                        $career_profile_department = 0;
                     }
                      
                     
                      if(!empty($career_profile->career_current_industry)) 
                      {
                          $career_current_industry=2;
                          $progress_bar= @$candidate_designation_current_company+@$career_profile_department+@$preferred_work_location+@$career_current_industry+@$resume;
                      }
                      else
                      {
                          $career_current_industry = 0;
                      }
                      if(!empty($user_details[0]->image))
                      {
                          $profile_photo = 5;
                          $progress_bar= @$candidate_designation_current_company+@$career_profile_department+@$preferred_work_location+@$career_current_industry+@$profile_photo+$resume;
                      }
                      else
                      {
                          $profile_photo = 0;
                      }
                      if(!empty($resume_headline))
                       {
                          $resume_headlines = 8;
                          $progress_bar= @$candidate_designation_current_company+@$career_profile_department+@$preferred_work_location+@$career_current_industry+@$profile_photo+@$resume_headlines+@$resume;
                       }
                       else
                       {
                          $resume_headlines = 0;
                       }
                     
                       
                      if(!empty($know_language))
                      {
                          $candidate_know_language = 2;
                          $progress_bar= @$candidate_designation_current_company+@$career_profile_department+@$preferred_work_location+@$career_current_industry+@$profile_photo+@$resume_headlines+@$candidate_know_language+@$resume ;
                      }
                      else
                      {
                          $candidate_know_language = 0;
                      } 
                      
                      if(!empty($education_details))
                       {
                          $education_detail = 10;
                          $progress_bar= @$candidate_designation_current_company+@$career_profile_department+@$preferred_work_location+@$career_current_industry+@$profile_photo+@$resume_headlines+@$candidate_know_language+@$education_detail+@$resume ;
                       }
                      else
                      {
                          $education_detail = 0;
                      }
                      
                      if(!empty($personal_details))
                      {
                          $personal_detail = 2;
                          $progress_bar= @$candidate_designation_current_company+@$career_profile_department+@$preferred_work_location+@$career_current_industry+@$profile_photo+@$resume_headlines+@$candidate_know_language+@$education_detail+@$personal_detail+$resume ;
                      }
                      else
                      {
                          $personal_detail = 0;
                      }
                      
                      if(!empty($employement_details))
                      {
                          $employement_detail = 8;
                          $progress_bar= @$candidate_designation_current_company+@$career_profile_department+@$preferred_work_location+@$career_current_industry+@$profile_photo+@$resume_headlines+@$candidate_know_language+@$education_detail+@$personal_detail+@$employement_detail+@$resume;
                      }
                      else
                      {
                          $employement_detail = 0;
                      }
                      
                      
                     if(!empty($key_skiils))
                       {
                          $key_skiil = 8;
                          $progress_bar= @$candidate_designation_current_company+@$career_profile_department+@$preferred_work_location+@$career_current_industry+@$profile_photo+@$resume_headlines+@$candidate_know_language+@$education_detail+@$personal_detail+@$employement_detail+@$key_skiil+$resume;
                       }
                      else
                      {
                           $key_skiil = 0;
                      }
                      
                      
                     if(!empty($profile_summary))
                      {
                          $profile_summarys = 8;
                          $progress_bar= @$candidate_designation_current_company+@$career_profile_department+@$preferred_work_location+@$career_current_industry+@$profile_photo+@$resume_headlines+@$candidate_know_language+@$education_detail+@$personal_detail+@$employement_detail+@$key_skiil+@$profile_summarys+@$resume;
                      }
                      else
                      {
                          $profile_summarys = 0;
                      }
                           $progress_bar;
                         
                    }
                    else
                    {
                        $preferred_work_location = 0;
                    }
                    ?>        
 <?php
$profile_image = base_url($user_details[0]->image);     
if($progress_bar==0)
{
   $progress_percentage = 1; 
}
else
{
   $progress_percentage = $progress_bar;
}
 ?>                   
                    
<div class="row d-flex justify-content-center ">
 <div class="circular-progress" data-inner-circle-color="white" data-percentage="<?= $progress_percentage; ?>" data-progress-color="blue" data-bg-color="lightgrey">
  <div class="inner-circle"><img class="circular-image" width="120" height="auto" src="<?php if(!empty($profile_image)){ echo $profile_image; } else{ echo base_url("frontend/images/profilepic.svg"); }?>"/>
  </div>
  <p class="percentage">0%</p>
</div>
<script>const circularProgress = document.querySelectorAll(".circular-progress");

Array.from(circularProgress).forEach((progressBar) => {
  const progressValue = progressBar.querySelector(".percentage");
  const innerCircle = progressBar.querySelector(".inner-circle");
  let startValue = 0,
    endValue = Number(progressBar.getAttribute("data-percentage")),
    speed = 50,
    progressColor = progressBar.getAttribute("data-progress-color");

  const progress = setInterval(() => {
    startValue++;
    progressValue.textContent = ;`${startValue}%`;
    progressValue.style.color = `${progressColor}`;

    innerCircle.style.backgroundColor = `${progressBar.getAttribute(
      "data-inner-circle-color"
    )}`;

    progressBar.style.background = `conic-gradient(${progressColor} ${
      startValue * 3.6
    }deg,${progressBar.getAttribute("data-bg-color")} 0deg)`;
    if (startValue === endValue) {
      clearInterval(progress);
    }
  }, speed);
});</script>
</div>
               
    <h6><?php echo @$user_details[0]->candidate_name; ?></h6>
    <p><?php echo @$last_employment->emp_current_desigantion; ?></p>
    <p><?php echo @$last_employment->emp_current_company_name; ?></p>
    <span>last updated date</span>
    <a class="button btn-primary hvr-wobble-bottom" href="<?php echo base_url("candidate_profile/fill_candidate_profile");?>">Complete Profile</a>
</div>           

<div class="profilePerformance">
<h6>Profile performance</h6>
<div class="performanceInn">
<div><p>Search appearances</p>
<a href="#">172 ></a></div>
<div><p>Recruiter actions</p>
<a href="#">13 ></a>
</div>
</div>
</div>
<div class="line"></div>  
<ul>
<li><a class="hvr-wobble-bottom" href="#"><i class="fa fa-home"></i>My Home</a></li>
<li><a class="hvr-wobble-bottom" href="<?php echo base_url("recruitment/all_jobs"); ?>"><i class="fa fa-briefcase"></i>Jobs</a></li>
<li><a class="hvr-wobble-bottom" href="#top_companies"><i class="fa fa-building-o"></i>Companies</a></li>
<li><a class="hvr-wobble-bottom" href="#blogs"><i class="fa fa-book"></i>Blogs</a></li>    
</ul>   
</div>
        </div>
        <div class="col-lg-6 col-sm-12 mnuserhomepageMiddle">
    <div id="recommended_job" class="MultiCarousel recommendedJobs" data-items="1,2,2,3" data-slide="1" id="MultiCarousel"  data-interval="1000">
    <h1>Choose Resume Template</h1>
    
            <div class="MultiCarousel-inner frResumeTempsss">
                <div class="item">
                    <div class="pad15">
                        <a href="<?php echo base_url("resume_builder/template1"); ?>"><div class="companylogos"><img width="" height="auto" src="<?php echo base_url("uploads/resume_template/resumetemp1.jpg") ?>"/></div>
                        <p class="ResumeTempName">Template 1</p></a>
                    </div>
                </div>
           
                <div class="item">
                    <div class="pad15">
                        <a href="<?php echo base_url("resume_builder/template2"); ?>"><div class="companylogos"><img width="" height="auto" src="<?php echo base_url("uploads/resume_template/resumetemp2.jpg") ?>"/></div>
                        <p class="ResumeTempName">Template 2</p></a>
                    </div>
                </div>
            
                <div class="item">
                    <div class="pad15">
                        <a href="<?php echo base_url("resume_builder/template3"); ?>"><div class="companylogos"><img width="" height="auto" src="<?php echo base_url("uploads/resume_template/resumetemp3.jpg") ?>"/></div>
                        <p class="ResumeTempName">Template 3</p></a>
                    </div>
                </div>
            
                <div class="item">
                    <div class="pad15">
                        <a href="<?php echo base_url("resume_builder/template4"); ?>"><div class="companylogos"><img width="" height="auto" src="<?php echo base_url("uploads/resume_template/resumetemp4.jpg") ?>"/></div>
                        <p class="ResumeTempName">Template 4</p></a>
                    </div>
                </div>
            
                <div class="item">
                    <div class="pad15">
                        <a href="<?php echo base_url("resume_builder/template5"); ?>"><div class="companylogos"><img width="" height="auto" src="<?php echo base_url("uploads/resume_template/resumetemp5.jpg") ?>"/></div>
                        <p class="ResumeTempName">Template 5</p></a>
                    </div>
                </div>
        
                <div class="item">
                    <div class="pad15">
                        <a href="<?php echo base_url("resume_builder/template6"); ?>"><div class="companylogos"><img width="" height="auto" src="<?php echo base_url("uploads/resume_template/resumetemp6.jpg") ?>"/></div>
                        <p class="ResumeTempName">Template 6</p></a>
                    </div>
                </div>
            </div>
            
            
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
        <?php
                $candidate_skils=explode(',',$key_skills);
                $result_companies=$this->M_Candidate_profile->candidate_skills_fill_for_job_recommendtion($candidate_skils);
                //  print_r($candidate_skils);exit;
                 if(count($result_companies)<=3)
                {
                    
                ?>
                <div id="recommended_job" class="MultiCarousel recommendedJobs" data-items="1,2,2,3" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <h1>Recommended Jobs For You <a class="hvr-wobble-bottom" href="#">view all</a></h1>
            <div class="MultiCarousel-inner">
                <?php
                foreach($result_companies as $row_company){?>
                ?>
                <div class="item">
                    <div class="pad15">
                        <div class="companylogos"><img width="" height="auto" src="<?php echo base_url() ?>frontend/images/complogo.png"/><span>4 d ago</span></div>
                        <p class="lead">Urgent Opening For a Designation</p>
                        <p><?php echo $row_company->company_name;?></p>
                        <p class="locationn"><?php echo $row_company->job_opening_address;?></p>
                    </div>
                </div>
                
                <?php }?>
               </div>
            <!--<button class="btn btn-primary leftLst"><</button>-->
            <!--<button class="btn btn-primary rightLst">></button>-->
        </div>
                
               <?php 
                
                }elseif(count($result_companies)>3){ ?>
                
                <div id="recommended_job" class="MultiCarousel recommendedJobs" data-items="1,2,2,3" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <h1>Recommended Jobs For You <a class="hvr-wobble-bottom" href="#">view all</a></h1>
            <div class="MultiCarousel-inner">
                <?php
                foreach($result_companies as $row_company){?>
                
                <div class="item">
                    <div class="pad15">
                        <div class="companylogos"><img width="" height="auto" src="<?php echo base_url() ?>frontend/images/complogo.png"/><span>4 d ago</span></div>
                        <p class="lead">Urgent Opening For a Designation</p>
                        <p><?php echo $row_company->company_name;?></p>
                        <p class="locationn"><?php echo $row_company->job_opening_address;?></p>
                    </div>
                </div>
                
                <?php }?>
               </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
              
                
               <?php
                
                }
               ?>


        <div class="recruitersApply">
            <h3>Recruiters are inviting you to apply!</h3>
            <div class="fromrecruiterss">
            <img width="" height="auto" src="<?php echo base_url() ?>frontend/images/complogo.png"/>
            <p><span class="jobtitleee">Urgent Opening For a Designation</span><br>
                   Company Name<br><span>4 d ago</span></p>
            </div>

            <div class="fromrecruiterss">
            <img width="" height="auto" src="<?php echo base_url() ?>frontend/images/complogo.png"/>
            <p><span class="jobtitleee">Urgent Opening For a Designation</span><br>
                        Company Name<br><span>4 d ago</span></p>
                        
            </div>

            <div class="fromrecruiterss">
            <img width="" height="auto" src="<?php echo base_url() ?>frontend/images/complogo.png"/>
            <p><span class="jobtitleee">Urgent Opening For a Designation</span><br>
                        Company Name<br><span>4 d ago</span></p>
                        
            </div>

            <a class="hvr-wobble-bottom" href="#">view all</a>

        </div>

<!--mnuserTopCompanies start here-->
        <div id="top_companies" class="mnuserTopCompanies">
          <div class="MultiCarousel topcompaniesslieder" data-items="1,2,2,3" data-slide="1" id="MultiCarousel"  data-interval="1000">
    <h1>Top Companies<br><span>Hiring for other design</span><a class="hvr-wobble-bottom" href="#">view all</a></h1>
            <div class="MultiCarousel-inner">

<?php foreach($client_list as $row){ ?>
                <div class="item">
                    <div class="pad15">
                        <p><img src="<?php echo base_url(); ?>frontend/images/complogo.png" width="100%" height="auto"></p>
                        <p class="lead"><?php echo $row->client_name ?></p>
                        <p>stars | 2.4k+ reviews</p>
                        <a href="<?php echo base_url();?>recruitment/get_job_post_company/<?php echo $row->client_id ?>" class="badge viewjobsss hvr-wobble-bottom">View Jobs</a>
                    </div>
                </div>
                
          <?php }?>

        


            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>  
        </div>
<!--mnuserTopCompanies end here -->

        </div>
        <div class="col-lg-3 col-sm-12 nopaddingColForMobile">
            <div class="jobFilterRight whatsupupdatess">
                <h6>Get updates directly on WhatsApp!</h6>
                <img width="90%" src="<?php echo base_url() ?>frontend/images/whatsapp-update.webp"/>
                <p>Know instantly when status of your job application changes</p>
                <a class="hvr-wobble-bottom" href="#">Whatsup Now</a>
             </div>

            <div class="jobFilterRight">

                    <!--div class="featuredCompanies">-->
<!-- mnuser blog start here -->
<div id="blogs" class="mnuserhomeBlog">
    <h6>Stay updated with our blogs</h6>
    <div class="mnuserhomeBlogInn">
    <div class="blogshort">
        <img src="http://localhost/msuite/frontend/images/imageicon.jpg" width="100%" height="auto">
        <h6>Blog title 1</h6>
        <p>SHARKS JOB Blog | <span>27 feb 2023</span></p>
    </div>
    <div class="blogshort">
        <img src="http://localhost/msuite/frontend/images/imageicon.jpg" width="100%" height="auto">
        <h6>Blog title 1</h6>
        <p>SHARKS JOB Blog | <span>27 feb 2023</span></p>
    </div>
</div>
<a class="hvr-wobble-bottom" href="#">view all</a>
</div>
<!-- mnuser blog end here -->

            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
       
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();

    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
</script>

<!-- company slider start here -->