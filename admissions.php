<?php


include 'header.php';
?>


<html>
<head>


  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style/surviving.css" />

</head>

<body>
<div class ="container-fluid">
  <br>
  <table class="table-borderless table-condensed">
  <tr>
    <td>
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1">
<img src = "images/mustKnow.jpg" width="200px" height="200px">
<div class="box-caption">Freshmen must know</div>
</button>
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Freshmen must know list</h4>
        </div>
        <div class="modal-body">
          <p>There are a plenty of free resources available for college students.
            Especially, for Computer science students, we, need to acquire skill
            and knowledge in multiple areas. So, fortunately, we are provided
            with a lot of free toolboxes (software and resources). Here is a list of software and other
            useful resources that will play an important role in your college life.
          </p>
          <ul>
            <li><a href = "https://guides.github.com/activities/hello-world/"><strong>GitHub:
            </strong></a><em>One of the largest collections of code, for private
              and open source use, with repository forking,
              commenting, Git versioning and other features. <a href ="https://moodle.ulm.edu/pluginfile.php/2425644/mod_resource/content/2/CVS%2C%20Git%20and%20GITHUB.pdf">
              (Presentation by Dr. Smith on Git)</a></em></li></br>
                <li><a href = "https://stackoverflow.com/"><strong>Stack Overflow:
                </strong></a><em>For when you’re done racking your brain trying to figure
                  out why your code doesn’t work or how to do something tricky, ask the community
                  nicely at Stack Overflow.</em></li></br>

                    <li><a href = "http://www.cheat-sheets.org/"><strong>Cheat sheets:
                    </strong></a><em>A large collection of cheat sheets of interest
                       to computer science students, good for quick reference use.</em></li></br>
            <li><a href = "http://www.cs.cmu.edu/~guyb/realworld.html"><strong>Algorithms in Real World:
            </strong></a><em>Carnegie Mellon University offers up course material from several
              semesters of its “Algorithms in the ‘Real World’.”</em></li></br>

              <li><a href = "https://netbeans.org/"><strong>NetBeans:
              </strong></a><em> It is a free, open-source Integrated Development Environment
                for software developers.</em></li></br>
                <li><a href = "https://hackathon.guide/"><strong>Hackathon:
                </strong></a><em> Hackathon is a collaborative computer programming contest
                where groups are given program to write about software development, graphic
              designing etc.</em></li></br>
              <li><a href = "https://www.hackerrank.com/"><strong>Hackerrank:
              </strong></a><em> Hackerrank is a technology company that focuses on competition
              programming challenges for both consumer and businesses, where developers try
            to compete acoording to their specification.</em></li></br>
            <li><a href = "https://www.sciencedaily.com/news/computers_math/computer_science/"><strong>
              Computer Science Daily News:
            </strong></a><em> It is a website that provides with all the latest news in computer science
            including articles on hardware, software, systems, designing, hacking.</em></li></br>
            <li><a href = "https://www.geeksforgeeks.org/"><strong>
              GeeksforGeeks:
            </strong></a><em> It contains well written quizzes, aricles, programming assignments
            and many more computer related stuff that might be helpful to computer science
          majors to ace their exam.</em></li></br>
          <li><a href = "https://materializecss.com/"><strong>
            Materialize:
          </strong></a><em>It is a responsive front-end framework helper that provides
          most of the default styling and designing components.</em></li></br>


              </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</td>

<td>
  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">
  <img src ="images/tutor.jpg" width="200px" height="200px">
  <div class="box-caption">Getting help</div>
</button>
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Getting help</h4>
        </div>
        <div class="modal-body">
          <p>Here are office hours of all computer science's professors.</br></br>
          <img src = "images/office.png" width ="500px"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</td>

<td>
  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal3">
  <img src ="images/google.jpg" width="200px" height="200px">
  <div class="box-caption">Googling like a programmer</div>
</button>
<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Googling</h4>
        </div>
        <div class="modal-body">
          <p>Google is a powerful tool for comuter science people. There are few tricks you
          need to learn in order to master it.</p>
          <ul>
            <li>
              <strong>Use keywords: </strong>
              Be specific and leave out unnecessary word. Google will pull out most
              relevant information if you become specific. Try just to use the
              important word.</br>
              For example:
              "I want to replace an element with another element of array in java"</br>
              <img src ="images/wrongSearch.PNG" width=400px height=350px>
</br>
              This example is too wordy and uses irrelevant words. When you search
              that in google, you will get a whole bunch of results. Instead of array,
              google gives you result about arraylist.

            </br>
          </br>
          So, a better way to search this
              will be "How to replace an element in an array in java".

              If you search that in google, we will get what we were looking for.
            </br>
              <img src ="images/correctSearch.PNG" width=400px height=350px>
            </br>

            </li>
          </br></br>
            <li>
              <strong>Open Multiple Tabs: </strong>
              Open all tabs that you think might be helpful from the search results.
              Compare the content of all the results parallely. If you do not open
              it in new tabs, then you have to backtrack after observing each result.
              So it is time consuming to backtrack. Hence, once you open as many tabs as
              you think you need to find your answer, start going through the tabs one by one.
              If one tab doesn’t have your answer, close it and move on to the next one.

            </li>
          </br></br>
            <li>
              <strong> Stack overflow: </strong>
              Stack overflow is an important website for programmer. Every time I search
              in google, I get my answer from stack overflow. There are many answers a problem
              in this website. The one with the green check mark on the left side is the
              most relevant solution. You can go through all the answers so as to get idea
              of what you were missing. Search in google.com not in stack overflow's website.
              Search engine of google is better than that of stack overflow.
            </li>
            </br></br>



          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</td>
</tr>
<tr>
  <td>

<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal4">
    <img src ="images/computer.jpg" width="200px" height="200px">

    <div class="box-caption">What courses when</div>
  </button>
  <div class="modal fade" id="myModal4" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Computer courses based on classification</h4>
          </div>
          <div class="modal-body">
            <img src = "images/map.jpg" width="90%">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>



  </td>
  <td>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal5">
    <img src ="images/java.jpg" width="200px" height="200px">
    <div class="box-caption">Java Documentation</div>
  </button>
  <div class="modal fade" id="myModal5" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Java Documentation</h4>
          </div>
          <div class="modal-body">
            <p>The Java language supports three types of comments:
            </p>
            <ol>
              <li><strong>/* text */</strong></br>
                The compiler ignores everything from /* to */.
              </li></br>
              <li><strong>//text</strong></br>
              The compiler ignores everything from // to the end of the line.
              </li>
            </br>
            <li><strong>/** documentation */</strong></br>
            This is a documentation comment and in general its called doc comment.
            </li>
          </br>

            </ol>
            <p>
              Javadoc is a tool that generates Java code documentation in HTML format.
               At the beginning of the program, programmer must mention his/her name
             and little description of what the program does. Here is an example:
           </br></br>
           <img src ="images/comment.jpg">

            </p>
          </br>
            <p>
              Before each method, there should be a description that must contain
              details like return value, parameter, data structures etc. Here is
              an example: </br>
            </br>
              <img src ="images/method.jpg">
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
  </td>

  <td>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal6">
    <img src ="images/dictionary.jpg" width="200px" height="200px">
    <div class="box-caption">CS Dictionary</div>
  </button>
  <div class="modal fade" id="myModal6" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Computer Science Dictionary</h4>
          </div>
          <div class="modal-body">
            <p>Here are some of the important computer words and some libraries: </p>
            <hr>
            <ul>
              <li>
                <a href="https://www.webopedia.com/Computer_Science/Artificial_Intelligence">
            <strong>
              Artificial intelligence
            </strong>
          </br></br>
          </a>
          </li>

          <li>
            <a href="https://www.webopedia.com/Computer_Science/Databases">
            <strong>
              Database
            </strong>
          </br></br></a>
          </li>
          <li>
            <a href="https://www.webopedia.com/TERM/W/web-science.html">
            <strong>
              Web Development
            </strong>
          </br></br></a>
          </li>
          <li>
            <a href="https://www.webopedia.com/TERM/S/security.html">
            <strong>
              Security
            </strong>
            </br></br></a>
          </li>
          <li>
            <a href ="https://www.webopedia.com/TERM/A/algorithm.html">
            <strong>
              Algorithms
            </strong>
              </br></br></a>
          </li>
          <li>
            <a href="https://www.webopedia.com/TERM/N/nanotechnology.html">
            <strong>
              NanoTechnology
            </strong>
            </br></br></a>
          </li>
          <li>
            <a href="https://www.webopedia.com/TERM/S/supercomputer.html">
            <strong>
              Supercomputing
            </strong>
            </br></br></a>
          </li>
          <li>
            <a href="https://www.webopedia.com/TERM/N/network_engineer.html">
            <strong>
              Networking
            </strong>
            </br></br></a>
          </li>






          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
  </td>


</table>
<br>


</div>
  <body>

</html>

<?php include 'footer.php';
?>
