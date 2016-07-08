<section data-id="contact" class="fullpage-section block block--contact chapter" data-viewport-min-height="100">
    <div class="chapter__title">

        <div class="vertical-align-helper text-align--s-center" data-viewport-height="100">
            <div class="vertical-align--s-middle">
                <h2 class="text-color--white subtitled uppercase animated slideIn5">
                    Man 4 hire
                    <span>Job seeker, entertainer</span>
                </h2>
            </div>
        </div>
        <a href="#the-end">
            <svg class="arrows">
                <path class="a1" d="M0 0 L30 32 L60 0"></path>
                <path class="a2" d="M0 20 L30 52 L60 20"></path>
                <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg>
        </a>
        <nav class="main-nav text-color--white hidden--s hidden--m">
            <?php include 'elements/nav.php'; ?>
        </nav>

    </div><!-- chapter__title -->
    
    <div class="chapter__content" data-viewport-min-height="100">
        <div class="row" style="transform: rotateX(5deg) rotateY(-5deg) rotateZ(5deg);">
            <div class="column--s-12 padding--top--s-2">
                <fieldset id="contact_form">
                <h4 class="montserrat">Drop me a note</h4>
                    <div id="result"></div>
                        Dear Pete,<br>
                        My name is <input type="text" name="name" id="name" placeholder="Jimmy Kowalsky" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jimmy Kowalsky'" /> you can email me back at
                        <input type="email" name="email" id="email" placeholder="jimbo@email.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'jimbo@email.com'" /> or call me on 
                        <input type="text" name="phone" id="phone" placeholder="01234 56789" onfocus="this.placeholder = ''" onblur="this.placeholder = '01234 56789'" />
                        <span>I would like to</span> <textarea class='autoExpand' rows='2' data-min-rows='2' name="message" id="message" placeholder="tell you something" onfocus="this.placeholder = ''" onblur="this.placeholder = 'tell you something'" /></textarea>
                        <button class="button--ghost" id="submit_btn">SUBMIT</button>
                </fieldset>
            </div>
        </div>
        <div class="imprint column--s-12" style="transform: rotateX(5deg) rotateY(-5deg) rotateZ(5deg);">
            <a href="#" data-overlay="easter-egg" class="button--imprint button">EASTER EGG</a>
        </div>
    </div><!-- chapter__content -->
</section><!-- Block Contact -->