<!-- notification start here -->

<button class="popup-button" onclick="openPopup()"><i class="fa-brands fa-whatsapp boxx"></i></button>

<div class="popup-container" id="popupContainer">
    <div class="popup-content bg-popup">
        <div class="row">
            <!-- <span class="close-button warp-right" onclick="closePopup()">&times;</span> -->
        </div>
        <div class="row head">

            <div class="col">
                <div class="">
                    <p>Hello,</p>
                    <span class="close-button warp-right" onclick="closePopup()">&times;</span>
                </div>

                <div class="box">
                    <i class="fa-solid fa-headset"
                        style="color: #24369d; font-size: 2.5em; padding-left: 5px;padding-top: 5px;"></i>
                </div>
                <h5>Need to speak with us ?</h5>
                <a href="">Contact us</a>
            </div>

        </div>

        <div class="detail-box">

            <!-- Gunakan view() untuk mencoba langsung memuat view tersebut -->
            <?php
            $numberView = view()
                ->make('layout.tools.number', ['indo' => $indo, 'ibb' => $ibb, 'iwp' => $iwp])
                ->render();
            echo $numberView;
            ?>

        </div>
    </div>
</div>

<!-- notification end here -->
