@extends('layout2')
@section('style')
    <style>
        .location{
            border: 2px solid black!important;
            border-radius: 8px!important;
        }
        /*section#contact{*/
        /*    background-image: */
        /*}*/
        .form-auth{

            font-weight: bold;
            font-size: large;
            color: white;
            border: 1px solid black;
            background-image:linear-gradient(rgba(225,225,225,0.6), rgba(225,225,225,0.6)), url(../../../images/background/96a7d6389a8104de8e637fd9e7f26769.png);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .accordions{
            /*background-image:linear-gradient(rgba(255,255,255,0.1), rgba(255,255,255,0.1)), url(../../../images/background/9f3fefe825700bd6eaf0e307b016c381.jpg);*/
            background-color: #191919;
        }
        .btn-primary{
            font-weight: bold;
            font-size: large;
            color: white;
        }
        .social-media{
            color: white;
            font-weight: bolder;
        }
        .social-media:hover{
            color: #EF9D28;
        }
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        #contact{
            color: darkred;
        }

    </style>

@endsection
@section('content')



<section class="contact-us" id="contact" >
    <br>
        <div class="container">
            <div class="row">
                @if(session("status"))

                    <div class="alert alert-warning" role="alert">
                        {{session("status")}}
                    </div>
                    <br>
                @endif
                <div class="col-lg-9 align-self-center ">
                    <div class="row ">
                        <div class="col-lg-12">
                            <form id="contact" action="{{ route('mail-post') }}" class="form-auth" method="post">
                                @csrf
                                <div class="row deneme">
                                    <div class="col-lg-12 ">
                                        <h2 style="color: darkred"> Kolayca Bİze Ulaş  </h2>
                                    </div>

                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input name="name" type="text" id="name" placeholder="AD SOYAD ...*" required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-MAIL...*" required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input name="subject" type="text" id="subject" placeholder="KONU...*" required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="tel" id="number" name="number" placeholder="TELEFON NO ...*" pattern="[0]{1}[5]{1}[0-9]{2}[0-9]{3}[0-9]{2}[0-9]{2}" required>
                                            </fieldset>
                                        </div>
                                    <div class="col-lg-6">
                                            <label for="start">Kira Başlangıç Tarihi:</label>

                                            <input type="date" id="start" name="start-date"
                                                   min="2022-02-01" value="">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="start">Kira Bitiş Tarihi:</label>

                                        <input type="date" id="start" name="finish-date"
                                               min="2022-02-01" value="">
                                    </div>

                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" type="text" class="form-control" id="message" placeholder="MESAJINIZ...*" required></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12" style="position:relative;"><input style="width: 22px;height: 22px;position: absolute;" type="checkbox"  name="terms" required>
                                    <label for="terms" style="padding-left: 30px;"> <a href="#" style="color: darkred" id="myBtn">Şartlar ve Koşulları Okudum Kabul Ediyorum.</a> </label><br>
                                        <br>
                                        <!-- The Modal -->
                                        <div id="myModal" class="modal">

                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>MADDE-1) TARAFLAR:
                                                    <br>    1-KİRACI
                                                    <br>    ADI SOYADI	:
                                                    <br>    T.C.		:
                                                    <br>    ADRESİ	:
                                                    <br>    2-KİRALAYAN
                                                    <br>    AraPas Playstation        Kuşcağız Mah. Sanatoryum Cad. No:257/B Keçiğren/ANKARA
                                                    <br>    Bu Sözleşme iki suret düzenlenerek taraflara verilmiştir. Bu sözleşme tarafların serbest iradeleri ile düzenlenerek her iki tarafa da verildiğinden, Kiracı okumadığından bahisle veya herhangi bir gerekçe ile bu sözleşmenin tümüne veya bir kısmına veya herhangi bir maddesi şart ve koşullarına itirazda bulunmayacağını ve sözleşmeyi tümüyle kabul ettiğini beyan, kabul ve taahhüt eder. Tarafların bu sözleşmede belirtilenlerden başka özel şartları varsa 8 nci maddeye eklenerek yazılmak zorundadır. Yazılmamış şart, anlaşma, talep veya itirazlarını hukuki hiçbir zeminde davaya konu yapmayacağını taraflar kabul ve taahhüt eder.
                                                    <br>MADDE-2) KONU :
                                                    <br>   İşbu sözleşmenin konusu, KİRACI'nın KİRALAYAN'a ait www.arapasplaystation.com internet sitesinden elektronik ortamda siparişini yaptığı veya kiralayanın adresinden teslim aldığı aşağıda nitelikleri ve kiralama fiyatı belirtilen ürünün kiralanması ve teslimi ile ilgili olarak 4077 sayılı Tüketicilerin Korunması Hakkındaki Kanun ve Mesafeli Sözleşmeleri Uygulama Esas ve Usulleri Hakkında Yönetmelik hükümleri gereğince tarafların hak ve yükümlülüklerinin saptanması olup Kiracının talep ettiği ve Kiralayanın kendi işyerinde veya elden veya kiracının yukarıdaki adresinde teslim edeceği Playstation3, Nintendo Wii, XBox vb. Oyun Konsolu ve satın alınan paketteki Controller/Gamepad, orijinal oyun veya oyunlar ile aksesuarlarının (MAKİNE olarak anılacaktır) aşağıda belirtilen ücret karşılığı kiralanmasıdır.
                                                    <br>  MADDE-3) ÜCRET :
                                                    <br>   İşbu sözleşmenin bedeli, kira konusu Makinenin kiracıya teslim edildiği günden itibaren …………..(…………) gün için KDV dahil ……………… (…….…………………) TL.dır. Teslim tarihi (kira başlangıç tarihi) sözleşmenin imzalandığı tarihtir.
                                                    <br>   MADDE-4) MALIN TESLİMİ VE ÖDEME ŞEKLİ :
                                                    <br>  4.1.) Makine, işbu sözleşmenin taraflarca imzalanmasıyla birlikte, kiralayanın kendi işyerinde veya elden veya kiracının yukarıdaki adresinde tam, sağlam, eksiksiz ve çalışır durumda teslim edilmiş, kiracı tarafından teslim alınmıştır.
                                                    <br>   4.2.) Ödeme makinenin kiracıya tesliminde PEŞİN olarak yapılacaktır. Ancak peşin yapılmayan kiralamalarda ödemenin ne zaman yapılacağı belirlenmelidir. Buna göre vadesinde ödenmeyen kira alacaklarına hiçbir ihtara gerek olmadan aylık %10 gecikme bedeli ilave edilerek tahsil edileceği hususunu kiracı taraf peşinen kabul ve taahhüt eder.
                                                    <br>   4.3.) Kira başlama saati…………., bitişi saat ……………dır. Kiracı Makine’yi iade edeceği saati bilerek teslim aldığından hangi sebeple olursa olsun daha geç aldığı makineyi saat ………………..da iade etmek zorundadır. Kiracı Makine’yi geç aldığından bahisle geç iade edemez. Temerrüde düşmesi durumunda günlük kira bedelini yasal faiziyle birlikte ödemeyi kabul eder.
                                                    <br>   4.4.) KİRACI, kirayalanın işyerinde bizzat veya www.arapasplaystation.com internet sitesinde sözleşme konusu ürünün temel nitelikleri, kiralama fiyatı ve ödeme şekli ile teslimata ilişkin ön bilgileri okuyup bilgi sahibi olduğunu ve elektronik ortamda gerekli teyidi verdiğini beyan eder.
                                                    <br>   4.5.) Sözleşme konusu ürün, KİRACI'dan başka bir kişi/kuruluşa teslim edilecek ise, teslim edilecek kişi/kuruluşun teslimatı kabul etmemesinden KİRALAYAN sorumlu tutulamaz.
                                                    <br>  4.6.) KİRALAYAN, sözleşme konusu ürünün sağlam, eksiksiz, siparişte belirtilen niteliklere uygun ve kullanıma hazır olarak teslim edilmesinden sorumludur.
                                                    <br>   4.7.) Sözleşme konusu ürünün teslimatı için işbu sözleşmenin imzalı nüshasının KİRALAYAN'a ulaştırılmış olması ve bedelinin KİRACI'nın tercih ettiği ödeme şekli ile ödenmiş olması şarttır. Herhangi bir nedenle ürün bedeli ödenmez veya banka kayıtlarında iptal edilir ise, KİRALAYAN ürünün teslimi yükümlülüğünden kurtulmuş kabul edilir.
                                                    <br>  4.8.) Ürünün tesliminden sonra KİRACI'ya ait kredi kartının KİRALAYAN'nın kusurundan kaynaklanmayan bir şekilde yetkisiz kişilerce haksız veya hukuka aykırı olarak kullanılması nedeni ile ilgili banka veya finans kuruluşun ürün bedelini KİRALAYAN'a ödememesi halinde, KİRACI'nın kendisine teslim edilmiş olması kaydıyla ürünün bedelini 3 gün içinde KİRALAYAN'a ödemesi zorunludur. Bu takdirde havale/EFT giderleri KİRACI'ya aittir.
                                                    <br>  MADDE-5) SÖZLEŞMENİN ORTADAN KALKMASI VE FESHİ:
                                                    <br>   Sözleşme ancak aşağıdaki şartların oluşması hallerinde sona erer.				<br>   5.1.) Kiracının bu sözleşmeye uygun olarak tüm kira bedellerini ödeyerek makineyi kiralayana teslim aldığı gibi sağlam ve eksiksiz olarak kiralayanın işyerinde veya elden veya kiracının yukarıdaki adresinde iadesi ile sona erer.
                                                    <br>   5.2.) Ancak 5.1 nci maddedeki iade işlemi hangi sebeple olursa olsun gerçekleşmez ise bu sözleşme: Kiracının, makinenin satış ücreti olan …………… TL.yi ve geç teslim edilen gün sayısı kadar kira bedeli ile faizleri ve icra takip ve giderleriyle beraber avukatlık ücretleri giderlerini peşin olarak ödemesi halinde sona erer.
                                                    <br>   5.3.) Kiracı hiçbir şart veya hak veya gerekçe ile bu sözleşmeyi tek taraflı olarak fesh edemeyeceği gibi fesh, iptal veya hükümsüzlük talebinde bulunmamayı peşinen kabul ve taahhüt eder. Bu sözleşme Kiralayanın Rızası ve Oluru olmaksızın ortadan kalkmaz.
                                                    <br>  MADDE-6) KİRA MÜDDETİ :
                                                    <br>   Kira müddeti 3 ncü maddede belirtilen süredir. Ancak kiracı makineyi süre bitiminde aldığı gibi teslim etmez ise teslim edene kadar geçen gün sayısının veya kiracının kusurundan dolayı meydana gelen hasar nedeniyle Makinenin tamirde geçen gün sayısının bu sözleşmenin 5 nci maddesinde belirtilen şartlar yerine getirilene kadar Kira Müddetine eklenerek devam edeceğini kabul eder. Kiracı makineyi bu süre zarfında kullanmadığından bahisle, kira bedeli ödemekten kaçınamaz.
                                                    <br>  MADDE-7) TEMERRÜT HÜKÜMLERİ :
                                                    <br>    7.1.) Tarafların işbu sözleşmeden kaynaklarından edimlerini yerine getirmemesi durumunda Borçlar Kanunu'nun 106-108.maddesinde yer alan Borçlunun Temerrüdü hükümleri uygulanacaktır. Temerrüt durumlarında, herhangi bir tarafın edimlerini süresi içinde haklı bir sebebi olmaksızın yerine getirmemesi durumunda diğer taraf söz konusu edimin yerine getirilmesi için edimini yerine getirmeyen tarafa 7 günlük süre verecektir. Bu süre zarfında da yerine getirilmesi durumunda edimini yerine getirmeyen taraf mütemerrit olarak addolunacak ve alacaklı edimin ifasını talep etmek suretiyle malın teslimini, ve/veya sözleşmenin feshini ve bedelin iadesini talep etme hakkına sahiptir.
                                                    <br>    7.2.) Mesafeli Sözleşmeler Hakkında Yönetmeliğin 9. maddesinin son fıkrası gereğince KİRALAYAN arapasplaystation.com, sipariş konusu mal veya hizmetin yerine getirilmesinin imkansızlaştığı ileri sürerek, sözleşme konusu yükümlülüklerini yerine getiremiyorsa, bu durumu sözleşmeden doğan ifa yükümlülüğünün süresi dolmadan tüketiciye bildirmeyi taahhüt eder. Bu durumda, aloplaystation.com sözleşmeyi derhal fesih etme hakkına haiz olup, Müşterinin sipariş verdiği ürünün bedelini ve varsa borç altına sokan tüm belgeleri geri iade edeceğini taahhüt eder.
                                                    <br>    7.3.) KİRALAYANIN işbu yükümlülüğünü yerine getirmesini engelleyebilecek mücbir sebepler veya nakliyeyi engelleyen hava muhalefetleri, ulaşımın kesilmesi, yangın, deprem, sel baskını gibi olağanüstü olaylar nedeni ile sözleşme konusu ürünü süresi içerisinde teslim edemez ise, Bu tip durumlarda KİRACI, KİRALAYANIN hiçbir sorumluluğu olmadığını, siparişin iptal edilmesini veya teslimat süresinin engelleyici durumunun ortadan kalkmasına kadar ertelenmesi haklarından birini kullanabilir. KİRACI’nın siparişi iptal etmesi halinde ödediği tutar 10 gün içerisinde kendisine ödenir. (kredi kartı ile yapılan ödemelerde kredi kartına iade için yasal prosedür KİRACI tarafından kabul edilir)
                                                    <br>  MADDE-8) ÖZEL HÜKÜMLER :
                                                    <br>     8.1.) Teslimat, Kiralayanın işyeri adresinde elden alınan siparişler hariç olmak üzere kurye aracılığı ile Kiracının yukarıda belirtilen adresinde elden teslim edilecektir. Teslim anında alıcının adresinde bulunmaması durumunda dahi KİRALAYAN edimini tam ve eksiksiz olarak yerine getirmiş olarak kabul edilecektir. Bu nedenle, alıcının ürünü geç teslim almasından kaynaklanan her türlü zarar ile ürünün kuryede beklemiş olması ve/veya kargonun KİRALAYAN'a geri iade edilmesinden dolayı da oluşan giderler de KİRACI'ya aittir.
                                                    <br>    8.2.) Kurye Ücreti : 10.00 TL olup, kurye fiyatı sipariş toplam tutarına eklenmekte ve müşteri tarafından ödenmektedir. Kurye ücreti Ürün bedeline dahil edildiğinden Sipariş Tutarının iadesi durumunda kurye ücreti tahsil edilerek kalan bakiye iade edilecektir.
                                                    <br>    8.3.) Kiracı Makineyi teslim aldıktan sonra koruyup kollamak zorunda olup meydana gelecek kaza, kırım ve hasardan sorumludur. Makine her iki yanından kırmızı mum ile mühürlü ve mühürü sağlam olarak Kiracıya teslim edilmiştir. Mühürün kırılması veya sökülmesi halinde Kiralayan Makineyi Kiracıdan geri almama ve bedeli olan ……… TL.yi isteme hakkına sahiptir. Mühür Fekki halinde kiracı hiçbir ihtara gerek kalmadan makinenin bedeli …… TL.yi bu sözleşmenin 5 ve 6 ncı maddeleri esaslarında 30 gün içinde def’aten ödemeyi kabul ve taahhüt eder.
                                                    <br>   8.4.) Özel şart olarak (………………… …………… ……………… ……………… …………………… …………………… …………………… ………………) kabul edilmiş olup İşbu sözleşmeden doğan ihtilaflarda Ankara Batı İcra daireleri ile mahkemeleri yetkilidir.
                                                    <br><br>
                                                    <a class="fa fa-folder" style="font-weight: bold;font-size: larger"  href="{{asset('images/arapas/ARAPAS KİRA SÖZLEŞMESİ.pdf')}}" download>
                                                       SÖZLEŞMEYİ İNDİR
                                                    </a>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">MESAJI GÖNDER</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-info" style="text-align: center;padding-left: 20px;">
                        <br> <br>
                        <ul>
                            <li>
                                <h6>İRTİBAT NUMARASI</h6>
                                <span>0312 381 02 00</span>
                            </li>
                            <li>
                                <h6>E-MAİL ADRESİ</h6>
                                <span>arapasl1ucgen@gmail.com</span>
                            </li>
                            <li>
                                <h6>ADRES</h6>
                                <span>Kuşcağız Mahallesi, Sanatoryum Caddesi, No:257/B Keçiören/ANKARA</span>
                            </li>

                            <li style="padding-left: 20px;font-size: larger;color: white;text-align: center">
                                <br>
                                <span>Bizi Takip Edin</span>
                                <hr>
                                <a class="social-media" href="https://www.facebook.com/arapasplaystation/"><i style="padding-left: 20px" class="icon fa fa-facebook"></i></a>
                                <a class="social-media" href="https://www.instagram.com/arapasplaystation/"><i style="padding-left: 20px" class="icon fa fa-instagram"></i></a>
                                <a class="social-media" href="https://twitter.com/arapasplay"><i style="padding-left: 20px" class="icon fa fa-twitter"></i></a>
                                <a class="social-media"  href=""><i style="padding-left: 20px" class="icon fa fa-linkedin"></i></a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <label> <h4 style="color: white;font-weight: bold">YOL TARİFİ</h4> </label>
            <hr style="color: white">
            <iframe class="location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5140.307069280775!2d32.85286478667817!3d39.998508050733214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34d8a54e18353%3A0x668fbb3b57c1a265!2sAraPas%20Playstation!5e0!3m2!1sen!2str!4v1643404420897!5m2!1sen!2str" width="1300" height="500" style="border-radius: 8px;border: 2px solid black;margin-top: 15px" allowfullscreen="" loading="lazy"></iframe>

        </div>


    </section>
    @section('script')
        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
@endsection
@endsection
