<?php

$data = [
    
    'info' =>
    [
        'name' => 'Azharul Islam',
        'address' => '146,Ibrahimpur,Kafrul',
        'email' => 'azharcse1997@gmail.com',
        'phone' => '+088 01792261115'

    ],

   'computerSkills' => 
   [

        'Programming Languages' => 'C,PHP,SQL',
        'Web based skills' => 'Laravel,HTML,CSS,Bootstrap,jQuery',
        'Database skills' => 'MySql',
        'Scripting skills' => 'PHP,JavaScript',
        'Development Tools' => 'Git,VS Code,Xammp',
        'Others' => 'CPanel'
    ],

    'education' => 
        [
                'bachelor' =>
                [
                    'exam' => 'Bachelor',
                    'board_university' => 'City University',
                    'year' => '2020',
                    'institution' => 'City University',
                    'marks' => '3.54'
                ],

                'hsc' =>
                [
                    'exam' => 'HSC',
                    'board_university' => 'Dhaka',
                    'year' => '2015',
                    'institution' => 'Gafargaon Govt. College',
                    'marks' => '4.50'
                ],

                'ssc' =>
                [
                    'exam' => 'SSC',
                    'board_university' => 'Dhaka',
                    'year' => '2013',
                    'institution' => 'Pachbagh Islamia High School',
                    'marks' => '4.19'
                ]
        ],

   'personal_info' =>
        [
        'full_name' => 'Azharul Islam',
        'f_name' => 'Habibur Rahman',
        'm_name' => 'Mahfuza Khatun',
        'dob' => '12 January 1997',
        'sex' => 'Male',
        'marital_status' => 'Single',
        'religion' => 'Islam',
        'blood_group' => 'O+',
        'nationility' => 'Bangladeshi',
        'present_Address' => 'Kafrul,Mirpur',
        'parmanent_address' => 'Mymensingh'
            
       ]  

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
    <!--Container start-->
    <div class="container">
            <!--Header start-->
        <header>
            <img class="pimg" src="images/azhar.jpg" alt="picture">
               
                <div class="contact">
                    <?php foreach($data as $key => $info) { ?>
                    <h1><?php echo $info["name"];?></h1>
                    <p><?php echo $info["address"];?></p>
                    <p><?php echo $info["email"];?></p>
                    <p><?php echo $info["phone"];?></p>
                    <?php }?>
                    </div>
            
        </header>
         <!--Header end-->
         <div class="clear-div"></div>

         <section id="career-objective">
           <h3>Career Objective</h3>
           <hr>
           <p>To build the career in a reputed
            organization for an opportunity to
            learn, grow and take greater
            responsibilities and proper utilization
            of educational background and
            experience.</p>
         </section>

         <section id="present-status">
            <h3>Present Status
            </h3>
            <hr>
            <p>I would like to see myself growing in the space that I am working. Now this growth could be in monetary value, knowledge or responsibility. I would focus my attention on contribution without worrying about
               the outcome. If I could do that, it would be quite an achievement.</p>
          </section>

          <section id="education">
            <h3>Education</h3>
            <hr>
            <table class="table">
                <thead>
                 
                    <th>Exam</th>
                    <th>Board/University</th>
                    <th>Year</th>
                    <th>Name of Institution</th>
                    <th>Marks</th>
              
               </thead>
       
                <tbody>

                  <?php foreach($data as $education)
                  {
                    if(is_array($education))
                    {
                    foreach($education as $key=> $bachelor)
                    {
                        if(is_array($education))
                        {

                         foreach($bachelor as $key => $val)
                         {
                             
                        ?>
                    <tr>
                    <td><?php echo $bachelor["exam"] ;?></td>
                    <td><?php echo $bachelor["board_university"] ;?></td>
                    <td><?php echo $bachelor["year"] ;?></td>
                    <td><?php echo $bachelor["institution"] ;?> </td>
                    <td><?php echo $bachelor["marks"] ;?> </td>
                   </tr>
                    <?php
                         }
                        }
                     }
                    }
                }
                 ?>

                  
                   <!-- <tr> -->
                    <!-- <td>HSC</td>
                    <td>Dhaka</td>
                    <td>2015</td>
                    <td>Gafargaon Govt. College</td>
                    <td>4.50</td>
                   </tr>
    
                   <tr>
                    <td>SSC</td>
                    <td>Dhaka</td>
                    <td>2013</td>
                    <td>Pachbag Islamia High School</td>
                    <td>4.19</td>
                   </tr> -->

                </tbody>
            </table>
          </section>

          <section class="computer-skills">
            <h3>Computer Skills
            </h3>
            <hr>
            <?php foreach($data as $key => $computerSkills) { ?>
            <p>Programming Languages<span style="padding-left:50px">:</span> <span style="padding-left:50px"></span><?php echo $computerSkills["Programming Languages"]; ?></p>
            <p>Web based skills<span style="padding-left:105px">:</span> <span style="padding-left:50px"></span><?php echo $computerSkills["Web based skills"]; ?></p>
            <p>Database skills<span style="padding-left:116px">:</span> <span style="padding-left:50px"></span><?php echo $computerSkills["Database skills"]; ?></p>
            <p>Scripting skills<span style="padding-left:116px">:</span> <span style="padding-left:50px"></span><?php echo $computerSkills["Scripting skills"]; ?></p>
            <p>Development Tools<span style="padding-left:87px">:</span> <span style="padding-left:50px"></span><?php echo $computerSkills["Development Tools"]; ?></p>
            <p>Others<span style="padding-left:170px">:</span> <span style="padding-left:50px"></span><?php echo $computerSkills["Others"]; ?></p>
          
          </section> 
          <?php }?>
          <section class="present-status">
            <h3>Professional Experience
            </h3>
            <hr>
            <p> I have designed, developed and launched customized, highly responsive websites using
                HTML,CSS,Bootstrap,PHP,Laravel and WordPress.</p>
          </section>


          <section class="present-status">
            <h3>Projects
            </h3>
            <hr>
             <ul>
                
                <li class="plist"><strong>CityShop: </strong>
                  <ul>
                    <li class="plist">An eCommerce web based application.</li>
                  </ul>
                </li>
                              
                <li class="plist"><strong>eShop: </strong>
                    <ul>
                      <li class="plist">An eCommerce web based application.</li>
                    </ul>
                  </li>
            
              </ul>

          </section>

          <section class="present-status">
            <h3>Academic Projects
            </h3>
            <hr>
             <ul>
                
                <li class="plist"><strong>BloodBook Management System: </strong>
                  <ul>
                    <li class="plist">This web application for blood management system.</li>
                  </ul>
                </li>
            
              </ul>

          </section>

          <section class="present-status">
            <h3>Achievements
            </h3>
            <hr>
            <p>-x</p>
            <p>-y</p>
          </section>

          <section class="present-status">
            <h3>Language
            </h3>
            <hr>
            <p>-Bangla</p>
            <p>-English</p>
          </section>

          
          <section class="computer-skills">
            <h3>Personal Information
            </h3>
            <hr>
            <div class="personal-info">
  
            <?php foreach($data as  $personal_info) { 
               if(is_array($personal_info))
               {
                foreach($personal_info as $key =>  $val){
                ?>
            <p>Full Name<span style="padding-left:70px">:</span> <span style="padding-left:50px"></span><?php echo $personal_info['full_name']; ?></p>
            <p>Father's Name<span style="padding-left:46px">:</span> <span style="padding-left:50px"></span>Habibur Rahman</p>
            <p>Mother’s Name<span style="padding-left:38px">:</span> <span style="padding-left:50px"></span>Mafuza Khatun</p>
            <p>Date of Birth<span style="padding-left:54px">:</span> <span style="padding-left:50px"></span>12 January 1997</p>
            <p>Sex<span style="padding-left:114px">:</span> <span style="padding-left:50px"></span>Male</p>
            <p>Marital Status<span style="padding-left:48px">:</span> <span style="padding-left:50px"></span>Single</p>
            <p>Nationality<span style="padding-left:66px">:</span> <span style="padding-left:50px"></span>Bangladeshi</p>
            <p>Religion<span style="padding-left:83px">:</span> <span style="padding-left:50px"></span>Islam</p>
            <p>Blood Group<span style="padding-left:54px">:</span> <span style="padding-left:50px"></span>O+(Positive)</p>
            <p>Present Address<span style="padding-left:34px">:</span> <span style="padding-left:50px"></span>146,Ibrahimpur,Kafrul</p>
            <p>Permanent Address<span style="padding-left:13px">:</span> <span style="padding-left:50px"></span>Gafargaon,Mymensingh</p>

            <?php }  }}?>
        </div>
          </section> 

          <section class="present-status">
            <h3>Hobbies
            </h3>
            <hr>
            <p>-Gardening</p>
            <p>-Travelling</p>
            <p>-Photography</p>
          </section>

          <section class="present-status">
            <h3>Games
            </h3>
            <hr>
            <p>-Soccer</p>
            <p>-Cricket</p>
            <p>-Chess</p>
          </section>
          <section class="present-status">
            <h3>References
            </h3>
            <hr>
            <p><strong>Tahsin Abrar</strong></p>
            <p>Address: Mirpur</p>
            <p>Email:tahsinabrar@gmail.com</p>
            <p>Tel:+088 01792261115</p>
            <br>
            <p><strong>Abdul Matin Rafi</strong></p>
            <p>Address: Mirpur</p>
            <p>Email:matin@gmail.com</p>
            <p>Tel:+088 01792261115</p>
          </section>

          <p class="footer">Copyright &copy; azhar, 2022</p>

    </div>
     <!--Container end-->

</body>
</html>