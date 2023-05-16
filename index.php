<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <script src="https://kit.fontawesome.com/baea168211.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div style="background-color: black;">
        <div class="container">
            <nav class="navbar">
                <div class="navbar-logo">
                    <a href="#"><img src="logo.png" alt="Logo"></a>
                </div>
                <ul class="navbar-links">
                    <li><a href="#">What We Do</a></li>
                    <li><a href="#">What We Are</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Contact</a></li>
                    <li class="search-icon"><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
                <div class="navbar-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>
            </nav>
        </div>
        <div style="background-color: #1F2937;">
            <div class="container" style="padding:2% 10%;">
                <div class="text-center" style="margin-bottom: 4%;">
                    <h2 style="color:skyblue">FAQ</h2>
                </div>
                <div style="margin-bottom: 8%;">
                    <ul class="faq-list">
                        <li class="faq-item">
                            <div class="question">
                                <span class="icon">+</span> What is the RP Tech Novelty?
                            </div>
                            <div class="answer">
                                RedPhantom Tech Novelty is a recognized Software company offering unparalleled Technical
                                solutions that use trending technology & aspires to provides a platform where people may
                                interact with future technology in the present.
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="question">
                                <span class="icon">+</span> What is the Vision and Mission of RP Tech Novelty?
                            </div>
                            <div class="answer">
                                The Vision of RP Tech Novelty is to become a leading provider of innovative and reliable
                                software solutions that enable organizations to realize their business goals. The
                                Mission is
                                to deliver high-quality software solutions that leverage emerging technologies and
                                exceed
                                customer expectations.
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="question">
                                <span class="icon">+</span> What is the Motto of RP Tech Novelty?
                            </div>

                        </li>
                        <li class="faq-item">
                            <div class="question">
                                <span class="icon">+</span> When the RPTN is establishe?
                            </div>

                        </li>
                        <li class="faq-item">
                            <div class="question">
                                <span class="icon">+</span> What is the Services provided by RP Tech Novelty?
                            </div>

                        </li>
                        <li class="faq-item">
                            <div class="question">
                                <span class="icon">+</span> What are the benefits of RP Tech Novelty?
                            </div>

                        </li>
                        <li class="faq-item">
                            <div class="question">
                                <span class="icon">+</span> How RPTN helping to Youth?
                            </div>

                        </li>
                        <li class="faq-item">
                            <div class="question">
                                <span class="icon">+</span> Ho
                                w RPTN solve the modern problems using technologies?
                            </div>

                        </li>
                        <li class="faq-item">
                            <div class="question">
                                <span class="icon">+</span> What are the ne
                                w Technologies used and developed b
                                y RPTN?
                            </div>

                        </li>
                        <?php
                        // Replace database_name, username, password, and table_name with your actual values
                        $conn = mysqli_connect("localhost", "root", "", "task");
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $sql = "SELECT Question FROM form";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<li class="faq-item">';
                                echo '<div class="question">';
                                echo '<span class="icon">+</span> ' . $row["Question"];
                                echo '</div>';
                                echo '<div class="answer">';
                                // Add the answer for this question here
                                echo '</div>';
                                echo '</li>';
                            }
                        }
                        mysqli_close($conn);
                        ?>
                        <!-- Add more list items as needed -->
                    </ul>
                </div>



                <div class="text-center" style="margin-bottom: 4%;">
                    <h2 style="color:skyblue">Ask Your Questions</h2>
                </div>
                <div style="margin-bottom: 8%;">
                    <form class="forms-sample" action="form_insert.php" method="POST" id="quote">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" id="name" class="form-control" name="name" placeholder="Enter your name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="email" class="form-control" name="email" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <input type="text" class="form-control" name="questions" id="questions" placeholder="Enter your questions">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <textarea id="message" class="form-control" name="message" rows="4" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-12" style="text-align: right;">
                                <button type="submit" class="btn btn-primary" name="send">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-center" style="margin-bottom: 4%;">
                    <h2 style="color:skyblue">Contact Us</h2>
                </div>
                <div class="container">
                    <div class="text-center" style="margin-bottom: 2%;">
                        <span class="word active" data-section="general">General Enquiry</span>
                        <span class="word" data-section="business">Business</span>
                        <span class="word" data-section="investor">Investor</span>
                        <span class="word" data-section="media">Media</span>

                    </div>

                    <div id="general-section" class="section active">
                        <h4>THANKS FOR YOUR INTEREST IN REDPHANTOM</h4>
                        <p>Please provide your most valuable information, so we can help you better!</p>
                        <form action="general.php" method="POST" class="hidden">
                            <div class="row mb-3">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group mb-3">

                                <textarea class="form-control" id="questions" name="questions" rows="5" placeholder="Write your querry here"></textarea>
                            </div>
                            <div class="form-group mb-3">

                                <p>Confirm that you are not a Robot</p>
                                <div>
                                    <input type="checkbox" id="robot" name="robot" required>
                                    <label for="robot">I'm not a Robot</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="insert">Submit</button>
                        </form>
                    </div>

                    <div id="business-section" class="section">
                        <h3>Business Section</h3>
                        <span>Content related to Business Section.</span>
                    </div>

                    <div id="investor-section" class="section">
                        <h3>Investor Section</h3>
                        <span>Content related to Investor Section.</span>
                    </div>

                    <div id="media-section" class="section">
                        <h3>Media Section</h3>
                        <span>Content related to Media Section.</span>
                    </div>
                </div>

            </div>

            <section class="footer">

                <div class="box-container">

                    <div class="box">
                        <h3>Company</h3>
                        <a href=""> About us</a>
                        <a href=""> Services</a>
                        <a href=""> Career</a>
                        <a href=""> Latest News</a>
                    </div>

                    <div class="box">
                        <h3>Support</h3>
                        <a href="#"> Social Resposibility</a>
                        <a href="#"> privacy policy</a>
                        <a href="#"> terms & conditions</a>
                        <a href=""> COntact us</a>

                    </div>

                    <div class="box">
                        <h3>Address</h3>
                        <a href="#"> Savarkar Nagar, Pandharpur </a>
                        <a href="#"> Email: contact@rptechnovelty.com</a>
                        <a href="#"> Phone: +919172912622
                        </a>

                    </div>

                    <div class="box">
                        <img src="logo.png">
                        <h3>follow us</h3>
                        <div class="social-icons">
                            <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                            <a href="#"> <i class="fab fa-twitter"></i> </a>
                            <a href="#"> <i class="fab fa-instagram"></i> </a>
                            <a href="#"> <i class="fab fa-whatsapp"></i></a>
                            <a href="#"> <i class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                </div>


            </section>


        </div>
        <script>
            const faqList = document.querySelector('.faq-list');

            faqList.addEventListener('click', (event) => {
                const question = event.target.closest('.question');
                if (!question) return;

                const answer = question.nextElementSibling;

                question.querySelector('.icon').textContent = answer.classList.toggle('show') ? '-' : '+';

                if (answer.classList.contains('show')) {
                    answer.setAttribute('aria-hidden', 'false');
                } else {
                    answer.setAttribute('aria-hidden', 'true');
                }
            });
        </script>
        <script>
            const words = document.querySelectorAll('.word');
            const sections = document.querySelectorAll('.section');

            words.forEach((word) => {
                word.addEventListener('click', () => {
                    // remove underline and blue color from all words
                    words.forEach((w) => w.classList.remove('active'));
                    // hide all sections
                    sections.forEach((section) => section.classList.remove('active'));

                    // add underline and blue color to clicked word
                    word.classList.add('active');
                    // show related section
                    const sectionId = word.getAttribute('data-section');
                    document.getElementById(sectionId + '-section').classList.add('active');
                });
            });
        </script>


</body>

</html>