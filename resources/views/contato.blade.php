@section('main')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url({{asset('frontbase/images/bg-01.jpg')}});">
            <h2 class="ltext-105 cl0 txt-center">
                Contato
            </h2>
        </section>	


        <!-- Content page -->
        <section class="bg0 p-t-104 p-b-116">
            <div class="container">
                <div class="flex-w flex-tr">
                    <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                        <form>
                            <h4 class="mtext-105 cl2 txt-center p-b-30">
                                Envie-nos uma mensagem
                            </h4>

                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="e-Mail">
                                <img class="how-pos4 pointer-none" src="{{asset('frontbase/images/icons/icon-email.png')}}" alt="ICON">
                            </div>

                            <div class="bor8 m-b-30">
                                <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="Como podemos ajudar?"></textarea>
                            </div>

                            <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                                Enviar
                            </button>
                        </form>
                    </div>

                    <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                        <div class="flex-w w-full p-b-42">
                            <span class="fs-18 cl5 txt-center size-211">
                                <span class="lnr lnr-map-marker"></span>
                            </span>

                            <div class="size-212 p-t-2">
                                <span class="mtext-110 cl2">
                                    Endereço
                                </span>

                                <p class="stext-115 cl6 size-213 p-t-18">
                                RUA SÃO FRANCISCO, 176 Penápolis/SP  (18)3652-3771 ou (18) 99138-0048  sac@casadospresentesshop.com.br
                                </p>
                            </div>
                        </div>

                        <div class="flex-w w-full p-b-42">
                            <span class="fs-18 cl5 txt-center size-211">
                                <span class="lnr lnr-phone-handset"></span>
                            </span>

                            <div class="size-212 p-t-2">
                                <span class="mtext-110 cl2">
                                    Vamos Conversar
                                </span>

                                <p class="stext-115 cl1 size-213 p-t-18">
                                    +1 800 1236879
                                </p>
                            </div>
                        </div>

                        <div class="flex-w w-full">
                            <span class="fs-18 cl5 txt-center size-211">
                                <span class="lnr lnr-envelope"></span>
                            </span>

                            <div class="size-212 p-t-2">
                                <span class="mtext-110 cl2">
                                    Suporte Venda
                                </span>

                                <p class="stext-115 cl1 size-213 p-t-18">
                                    contact@example.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>	
        <!-- -21.419162, -50.076771 -->
        
        <!-- Map -->
        <div class="map">
            <div class="size-303" id="google_map" data-map-x="-21.419162" data-map-y="-50.076771" data-pin="{{asset('frontbase/images/icons/favicon2.png')}}" data-scrollwhell="9" data-draggable="1" data-zoom="18"></div>
        </div>
@endsection

