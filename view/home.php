                <div class="row mb ">
                            <div class="boxLeft mr ">
                                <!-- Slideshow container -->
                <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <!-- <div class="numbertext">1 / 3</div> -->
                <img src="view/image/banner-quang-cao-dien-thoai-dep_103211368.jpg"  width="99%" height="100%">
                <!-- <div class="text">Caption Text</div> -->
                </div>

                <div class="mySlides fade">
                <!-- <div class="numbertext">2 / 3</div> -->
                <img src="view/image/banner.jpg" style="width:99%" height="100%">
                <!-- <div class="text">Caption Two</div> -->
                </div>

                <div class="mySlides fade">
                <!-- <div class="numbertext">3 / 3</div> -->
                <img src="view/image/banner 3.jpg" style="width:99%" height="100%">
                <!-- <div class="text">Caption Three</div> -->
                </div>

                <!-- Next and previous buttons -->
                <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                </div>
                

                                <!-- js cho slideshow -->
                <script>
                let slideIndex = 0;
                showSlides();

                function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                slides[slideIndex-1].style.display = "block";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
                }
                </script>



                <div class="row">
                <?php
                $i=0;
                foreach ($spnew as $sp) {
                   extract($sp);
                   $linksp="index.php?act=sanphamct&idsp=".$id;
                   $hinh=$img_part.$img;
                   if(($i==2)||($i==5)||($i==7)){
                    $mr="mr";
                   }else{
                    $mr="";
                   }
                   
                   echo '<div class="boxproduct '.$mr.'">
                        <div class="row img">
                        <a href="'.$linksp.'"> <img  src="'.$hinh.'" alt="" width="100%" height="100%"></a>
                    </div>
                    <div class="sp">
                        <p>$'.$price.'</p>
                        <a href="'.$linksp.'">'.$name_sanpham.'</a>
                        <div class="row btnaddtocart ">
                        <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" id="" value="'.$id.'">
                        <input type="hidden" name="name" id="" value="'.$name_sanpham.'">
                        <input type="hidden" name="img" id="" value="'.$img.'">
                        <input type="hidden" name="price" id="" value="'.$price.'">
                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" id="">
                        </form>
                        </div>
                        
                        </div>
                    </div>';
                    
                }


?>

                    <!-- <div class="boxproduct mr">
                        <div class="row img">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                        </div>
                        <p>$2000</p>
                        <a href="#">Iphone 13 Pro Max</a>
                    </div>
                    <div class="boxproduct mr">
                        <div class="row img">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                        </div>
                        <p>$2000</p>
                        <a href="#">Iphone 13 Pro Max</a>
                    </div>
                    <div class="boxproduct ">
                        <div class="row img">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                        </div>
                        <p>$2000</p>
                        <a href="#">Iphone 13 Pro Max</a>
                    </div>




                    <div class="boxproduct mr">
                        <div class="row img">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                        </div>
                        <p>$2000</p>
                        <a href="#">Iphone 13 Pro Max</a>
                    </div> 
                    <div class="boxproduct mr">
                        <div class="row img">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                        </div>
                        <p>$2000</p>
                        <a href="#">Iphone 13 Pro Max</a>
                    </div>
                    <div class="boxproduct ">
                        <div class="row img">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                        </div>
                        <p>$2000</p>
                        <a href="#">Iphone 13 Pro Max</a>
                    </div>



                    <div class="boxproduct mr">
                        <div class="row img">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                        </div>
                        <p>$2000</p>
                        <a href="#">Iphone 13 Pro Max</a>
                    </div>
                    <div class="boxproduct mr">
                        <div class="row img">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                        </div>
                        <p>$2000</p>
                        <a href="#">Iphone 13 Pro Max</a>
                    </div>
                    <div class="boxproduct ">
                        <div class="row img">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                        </div>
                        <p>$2000</p>
                        <a href="#">Iphone 13 Pro Max</a>
                    </div>
                    

                     -->
                    
                </div>
            </div>
            <div class="boxRight ">
                <?php
                include "boxright.php";

?>
            </div>

        </div>