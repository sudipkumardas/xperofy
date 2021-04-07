<?php
    $heading = "Apple iPhone Xs Max";
    include '../../../PHP/header.php';
    $title = "iPhone Xs Max Specifications and Features";    
    $TITLE = str_replace('%TITLE%', $title, $TITLE);
    echo $TITLE;
?>
<?php
    $spec_general['Operating System'] = "Android 9.0 (Pie)";
    $spec_general['Launch Date In India'] = "September 28, 2018";
    $spec_general['Varients'] = "4GB+64GB, 4GB+256GB, 4GB+512GB";
    $spec_general['Dimensions'] = "157.5mm x 77.4mm x 7.7mm";
    $spec_general['Weight'] = "208 g";
    $spec_general['Colors'] = "Gold, Speace Grey, Silver";
    $spec_general['Sensors'] = "Face ID, Ambient Light sensor, Proximity sensor, Accelerometer, Barometer, Gyroscope";

    $spec_display['Screen Size'] = '6.0"';
    $spec_display['Display Type'] = "OLED";
    $spec_display['Resolution'] = "1242 x 2688 pixels";
    $spec_display['Aspect Ratio'] = "19.5:9";
    $spec_display['Pixels Density'] = "458 ppi";
    $spec_display['Contrast Ratio'] = "1000000:1";

    $spec_platform['Chipset'] = "Apple A12 Bionic";
    $spec_platform['GPU'] = "Apple GPU (four-core graphics)";
    $spec_platform['CPU'] = "Hexa Core (2.49 GHz, Dual core, Vortex + 1.52 GHz, Quad core, Tempest)";
    $spec_platform['Architecture'] = "64 bit";
    $spec_platform['RAM'] = "4 GB";

    $spec_rearcam['Megapixels'] = "12 MP + 12 MP";
    $spec_rearcam['Camera Features'] = "2x Optical Zoom, 10x Digital Zoom, Dual Optical Image Stabilisation, Sapphire Crystal Lens Cover, Backside illumination Sensor, Hybrid IR filter, Auto Image Stabilisation";
    $spec_rearcam['Autofocus'] = "Autofocus with Focus Pixels";
    $spec_rearcam['Flash'] = "Quad-LED True Tone flash with Slow Sync";
    $spec_rearcam['Physical Aperature'] = "f/1.8 + f/2.4";
    $spec_rearcam['Video Recording'] = "2160@24/30/60fps, 1080@30/60fps, 720@30fps";

    $spec_frontcam['Megapixels'] = "7 MP";
    $spec_frontcam['Camera Features'] = "Smart HDR, Wide colour capture, Auto image stabilisation, Backside illumination sensor";
    $spec_frontcam['Flash'] = "Ratina Flash";
    $spec_frontcam['Physical Aperture'] = "f/2.2";
    $spec_frontcam['Video Recording'] = "1080@30/60fps";

    $spec_memory['RAM'] = "4 GB";
    $spec_memory['Internal Memory'] = "64/256/512 GB";
    $spec_memory['Expandable Memory'] = "No";
    $spec_memory['USB Otg Support'] = "Yes";

    $spec_multimedia['Loudspeaker'] = "Yes (Stereo Speakers)";
    $spec_multimedia['FM Radio'] = "No";
    $spec_multimedia['Audio Jack'] = "Lightning Connect";

    $spec_battery['Removable Battery'] = "No";
    $spec_battery['Capacity'] = "3174 mAh";
    $spec_battery['Type'] = "Li-ion";
    $spec_battery['Wireless Charging'] = "Yes";

    $spec_network['WLAN'] = "Wi-fi 802.11, a/ac/b/g/n/n 5GHz, MIMO Mobile Hotspot";
    $spec_network['Location'] = "A-GPS, GLONASS, Galileo and QZSS";
    $spec_network['NFC'] = "Enabled";
    $spec_network['Bluetooth'] = "5.0";
    $spec_network['USB'] = "USB 2.0";
    $spec_network['Dual VoLTE'] = "Yes";
    $spec_network['SIM Size'] = "SIM1: Nano, SIM2: eSIM";
    $spec_network['SIM1'] = "4G, 3G, 2G";
    $spec_network['SIM2'] = "4G, 3G, 2G";    
?>

<?php
$key_spec = array
  (
  array(
      array("OS", "iOS 12"),
      array("Processor", "Hexa Core")
  ),
  array(
      array('Screen', '6.3"'),
      array("Battery", "3174 mAh")
  ),
  array(
      array("RAM", "4 GB"),
      array("ROM", "64/256/512 GB")
  ),
  array(
      array("Rear Camera", "12MP + 12MP"),
      array("Selfie Camera", "7 MP")
  ),
  array(
      array("Chipset", "Snapdragon 675"),
      array("Fingerprint Sensor", "Yes")
  )
  );
?>

<?php
$product = array
  (
    array("link"=>"https://www.amazon.in/gp/product/B07J3BSLNK/ref=as_li_tl?ie=UTF8&tag=skd0099-21&camp=3638&creative=24630&linkCode=as2&creativeASIN=B07J3BSLNK&linkId=f3965d2481972283203a760c33a9c414", "name"=>"Apple iPhone Xs Max (256 GB)-Space Grey", "price"=>"₹124,899", "image"=>"apple-iphone-xs-max-1.jpeg"),
    array("link"=>"https://www.amazon.in/gp/product/B07J3CJM4N/ref=as_li_tl?ie=UTF8&tag=skd0099-21&camp=3638&creative=24630&linkCode=as2&creativeASIN=B07J3CJM4N&linkId=990488e44d4351838d7bf32f324eb150", "name"=>"Apple iPhone Xs Max (64 GB)-Gold", "price"=>"₹109,900", "image"=>"apple-iphone-xs-max-1.jpeg"),
    array("link"=>"https://www.amazon.in/gp/product/B07J2Z88Z9/ref=as_li_tl?ie=UTF8&tag=skd0099-21&camp=3638&creative=24630&linkCode=as2&creativeASIN=B07J2Z88Z9&linkId=5a981856fda087fba7d3be9d1e62f874", "name"=>"Apple iPhone Xs Max (64 GB)-Silver", "price"=>"₹109,890", "image"=>"apple-iphone-xs-max-1.jpeg")
  );
?>

        <div class="row">
        
            <div class="col-lg-2 px-0 mx-auto my-1">
            
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php
                        $x=0;
                        $n=1;
                        while($x<=$n){
                        ?>
                            <li data-target="#myCarousel" data-slide-to="<?php echo $x; ?>" class="<?php if($x==0){ echo 'active'; } ?>"></li>
                        <?php
                            $x++;
                        }
                        ?>
                    </ol>
            
                    <div class="carousel-inner border rounded">
                        <?php
                        $n=1;
                        while($n <= 2) {
                        ?>
                            <div class="carousel-item <?php if($n==1){ echo 'active'; } ?>">
                                <a href="#" data-target="#modalIMG<?php echo $n; ?>" data-toggle="modal">
                                    <div class="ba-0 ds-1">
                                        <img alt="<?php echo $heading ?>" class="card-img-top d-block mx-auto" src="apple-iphone-xs-max-<?php echo $n; ?>.jpeg" />
                                    </div>	
                                </a>
                            </div>
                        <?php
                            $n++;
                        }
                        ?>
                    </div>

                    <?php
                    $n=1;
                    while($n <= 2) {
                    ?>
                        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG<?php echo $n; ?>" role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content mx-auto">
                                    <div class="modal-body mb-0 p-0">
                                        <img src="apple-iphone-xs-max-<?php echo $n; ?>.jpeg" class="d-block mx-auto modal-img">
                                        <span class="close font-weight-bold" data-dismiss="modal">&times;</span>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                        $n++;
                    }
                    ?>

                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="prev">&#10094;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="next">&#10095;</span>
                        <span class="sr-only">Next</span>
                    </a>  
                </div>

            </div>

            <div class="col-lg-4 px-1 my-1 mgn">
                <div class="d-flex flex-column border rounded" style="height:100%;">
                    <div class="text-center border" style="background-image: url('../../../img/background/mario3.jpg')">
                        <div class="text-center font-weight-bold ks">Key Specs</div>
                    </div>
                    <div class="d-flex flex-column border flex-grow-1">
                        <?php
                        for($y=0; $y<5; $y++){
                        ?>
                            <div class="d-flex mt-1 flex-fill">
                                <?php
                                for($z=0; $z<2; $z++){
                                ?>
                                    <div class="flex-fill border rounded mx-1 d-flex flex-column align-items-center key-spec" style="background-image: url('../../../img/background/mario3.jpg')">
                                    <?php
                                    for($c=0; $c<2; $c++){
                                    ?>
                                        <div>
                                            <span class="<?php if($c==0) { echo 'feature one'; } ?>"><?php echo $key_spec[$y][$z][$c]; ?></span>
                                        </div>
                                    <?php } ?>
                                    </div>
                            <?php } ?>
                            </div>
                    <?php } ?> 
                    </div>                                    
                </div>
            </div>

            <div class="col-lg-4 px-1 mgn">
                <div class="d-flex flex-column" style="height:100%;">
                    <?php
                    for($l=0; $l<3; $l++){                        
                    ?>
                            <div class="p-2 border rounded my-1 flex-fill store" style="background-image: url('../../../img/background/light2.jpg')">
                                <a href="<?php echo $product[$l]['link']; ?>" target="_blank">
                                    <div class="d-flex align-items-center">
                                        <div class="mr-1 mr-sm-1 mr-md-2 mr-lg-2">
                                            <span class="s-image"><img src="<?php echo $product[$l]['image']; ?>"></span>
                                        </div>
                                        <div class="d-flex flex-column ml-1 ml-sm-1 ml-md-2 ml-lg-1">
                                            <div class="flex-fill"><?php echo $product[$l]['name']; ?></div>
                                            <div class="flex-fill"><?php echo $product[$l]['price']; ?></div>
                                            <div class="flex-fill d-flex my-1">
                                                <div class="mx-3 mx-sm-3 mx-md-4 mx-lg-2">
                                                    <span class="logo"><img src="../../../img/logo/amazon.jpg" alt="amazon-logo"></span>
                                                </div>
                                                <div class="ml-3 ml-sm-3 ml-md-4 ml-lg-2">
                                                    <span class="go-btn btn btn-warning d-inline">Buy Now</span>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </a>
                            </div> 
            
            <?php   } ?>
                </div>
            </div>

            <div class="col-lg-2 pl-1 my-1 mgn">
                <div class="d-flex flex-column border" style="height:100%;">
                    <div class="flex-fill pl-2 border">
                        <h5 class="font-weight-bold mb-0">Design</h5>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <div class="flex-fill pl-2 border">
                        <h5 class="font-weight-bold mb-0">Display</h5>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <div class="flex-fill pl-2 border">
                        <h5 class="font-weight-bold mb-0">Performance</h5>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <div class="flex-fill pl-2 border">
                        <h5 class="font-weight-bold mb-0">Software</h5>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <div class="flex-fill pl-2 border">
                        <h5 class="font-weight-bold mb-0">Camera</h5>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <div class="flex-fill pl-2 border">
                        <h5 class="font-weight-bold mb-0">Value for money</h5>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
            </div>
            
        </div>
        <hr/>

        <div class="row">
        
            <div id="specs" class="col-md-7">
                <?php include '../../../PHP/specs.php'; ?>
            </div>

            <div class="col-md-5">

                <?php include '../../../PHP/brands_single_page.php'; ?>

                <?php include '../../../PHP/popular_phones.php'; ?>

                <?php include '../more.php'; ?>

                <?php include '../instores.php'; ?>

                <?php include '../../../PHP/best_of_phones_single.php'; ?>


            </div>
        </div>
        
    </div>
    <?php include '../../../PHP/footer.php'; ?>