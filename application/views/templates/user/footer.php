<!--
  Description of footer
 
  @author Nurul Huda Mustaqim -- Trenggalek
-->
<article id="content2">
    <div class="wrapper">
        <section class="col3">
            <h4>Why Us?</h4>
            <ul class="list1">
                <li><a href="#">Lorem ipsum dolor sit</a></li>
                <li><a href="#">Dmet, consectetur</a></li>
                <li><a href="#">Adipisicing elit eiusmod </a></li>
                <li><a href="#">Tempor incididunt ut</a></li>
            </ul>
        </section>
        <section class="col3 pad_left2">
            <h4>Follow Us</h4>
            <ul id="icons">
                <li><a href="#"><?php echo img("asset/templates/user/images/icon1.jpg"); ?>Facebook</a></li>
                <li><a href="#"><?php echo img("asset/templates/user/images/icon2.jpg"); ?>Twitter</a></li>
                <li><a href="#"><?php echo img("asset/templates/user/images/icon3.jpg"); ?>Facebook</a></li>
                <li><a href="#"><?php echo img("asset/templates/user/images/icon4.jpg"); ?>LinkedIn</a></li>
            </ul>
        </section>
        <section class="col2 right">
            <h4>Newsletter</h4>
            <form id="newsletter" method="post">
                <div>
                    <div class="wrapper">
                        <input class="input" type="text" value="Type Your Email Here"  onblur="if(this.value=='') this.value='Type Your Email Here'" onfocus="if(this.value =='Type Your Email Here' ) this.value=''" >
                    </div>
                    <a href="#" class="button" onclick="document.getElementById('newsletter').submit()">Subscribe</a>
                </div>
            </form>
        </section>
    </div>
</article>

